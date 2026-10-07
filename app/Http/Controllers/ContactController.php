<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Mail\ContactMessageReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact', [
            'subjects' => config('contact.subjects'),
        ]);
    }

    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $message = $request->validated();
        $subject = config('contact.subjects.'.$message['subject']);

        try {
            Mail::to(config('contact.recipient'))->send(new ContactMessageReceived(
                fullName: $message['full_name'],
                email: $message['email'],
                subjectLabel: $subject,
                messageBody: $message['message'],
            ));
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->with('contact_error', 'We could not send your message right now. Please try again shortly.');
        }

        return redirect()
            ->route('contact')
            ->with('contact_success', 'Thank you for reaching out. We’ll get back to you within 1–2 business days.');
    }
}
