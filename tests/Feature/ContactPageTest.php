<?php

namespace Tests\Feature;

use App\Mail\ContactMessageReceived;
use Illuminate\Support\Facades\Exceptions;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_renders_the_complete_contact_experience(): void
    {
        $response = $this->get('/contact');

        $response
            ->assertSeeTextInOrder([
                'Contact Us',
                'Let’s',
                'Connect',
                'Send Us a Message',
                'Product Inquiries',
                'Order Support',
                'General Questions',
                'Frequently Asked Questions',
                'Find Quick Answers',
            ])
            ->assertSee('images/contact/connect-ground-crayfish.webp')
            ->assertSee('name="_token"', false)
            ->assertSee('maxlength="500"', false)
            ->assertSee('<details name="contact-faq"', false);
    }

    public function test_valid_contact_submission_sends_message_and_returns_success_state(): void
    {
        config(['contact.recipient' => 'support@krillharvest.test']);
        Mail::fake();

        $response = $this->post(route('contact.store'), $this->validContactMessage());

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHas(
                'contact_success',
                'Thank you for reaching out. We’ll get back to you within 1–2 business days.',
            );

        Mail::assertSent(ContactMessageReceived::class, function (ContactMessageReceived $mail): bool {
            return $mail->hasTo('support@krillharvest.test')
                && $mail->fullName === 'Ada Ekanem'
                && $mail->email === 'ada@example.com'
                && $mail->subjectLabel === 'Product Inquiry'
                && $mail->messageBody === 'Please tell me when the product is available.';
        });
    }

    public function test_missing_required_contact_fields_return_clear_validation_errors(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))->post(route('contact.store'));

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'full_name' => 'Please enter your full name.',
                'email' => 'Please enter your email address.',
                'subject' => 'Please select a subject.',
                'message' => 'Please enter your message.',
            ]);

        Mail::assertNothingSent();
    }

    public function test_invalid_email_is_rejected_and_old_input_is_preserved(): void
    {
        Mail::fake();
        $payload = $this->validContactMessage([
            'email' => 'not-an-email',
        ]);

        $response = $this->from(route('contact'))->post(route('contact.store'), $payload);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'email' => 'Please enter a valid email address.',
            ])
            ->assertSessionHasInput('full_name', 'Ada Ekanem')
            ->assertSessionHasInput('email', 'not-an-email');

        Mail::assertNothingSent();
    }

    public function test_unknown_contact_subject_is_rejected(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))->post(route('contact.store'), $this->validContactMessage([
            'subject' => 'unsupported-subject',
        ]));

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'subject' => 'Please select one of the available subjects.',
            ]);

        Mail::assertNothingSent();
    }

    public function test_contact_message_longer_than_500_characters_is_rejected(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))->post(route('contact.store'), $this->validContactMessage([
            'message' => str_repeat('a', 501),
        ]));

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'message' => 'Your message may not be longer than 500 characters.',
            ]);

        Mail::assertNothingSent();
    }

    public function test_mail_delivery_failure_returns_safe_error_and_preserves_input(): void
    {
        Exceptions::fake();
        Mail::shouldReceive('to')
            ->once()
            ->andThrow(new RuntimeException('Private mail transport failure.'));

        $response = $this->from(route('contact'))->post(route('contact.store'), $this->validContactMessage());

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHas(
                'contact_error',
                'We could not send your message right now. Please try again shortly.',
            )
            ->assertSessionHasInput('email', 'ada@example.com')
            ->assertSessionMissing('contact_success');

        Exceptions::assertReported(RuntimeException::class);
    }

    public function test_contact_email_escapes_submitted_html(): void
    {
        $mail = new ContactMessageReceived(
            fullName: '<script>alert("name")</script>',
            email: 'ada@example.com',
            subjectLabel: 'General Question',
            messageBody: '<script>alert("message")</script>',
        );

        $html = $mail->render();

        $this->assertStringContainsString('&lt;script&gt;', $html);
        $this->assertStringNotContainsString('<script>alert', $html);
    }

    /**
     * @param  array<string, string>  $overrides
     * @return array<string, string>
     */
    private function validContactMessage(array $overrides = []): array
    {
        return array_replace([
            'full_name' => 'Ada Ekanem',
            'email' => 'ada@example.com',
            'subject' => 'product-inquiry',
            'message' => 'Please tell me when the product is available.',
        ], $overrides);
    }
}
