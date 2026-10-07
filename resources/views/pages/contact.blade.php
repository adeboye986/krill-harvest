@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="overflow-hidden bg-[#faf8f3]">
        <div class="mx-auto grid w-full max-w-[100rem] lg:min-h-[42rem] lg:grid-cols-[38%_62%] xl:min-h-[48rem]">
            <div class="relative isolate min-h-[46rem] overflow-hidden px-6 pt-12 sm:min-h-[50rem] sm:px-10 lg:min-h-0 lg:px-8 lg:pt-10 xl:px-16 xl:pt-14">
                <div class="relative z-10 max-w-[31rem]">
                    <p class="text-[clamp(0.78rem,0.85vw,1rem)] font-semibold tracking-[0.3em] text-accent uppercase">
                        Contact Us
                    </p>
                    <h1 class="mt-4 font-display text-[clamp(4.7rem,12vw,6.8rem)] leading-[0.72] font-semibold tracking-[-0.055em] text-[#071d17] lg:text-[4.7rem] xl:text-[clamp(5.2rem,5.8vw,6.7rem)]">
                        Let’s<br>
                        Connect
                    </h1>
                    <p class="mt-6 max-w-[27rem] text-[clamp(1rem,1.2vw,1.3rem)] leading-[1.48] text-[#263d36]">
                        Have a question, feedback, or simply<br class="hidden xl:block">
                        want to learn more about Krill Harvest?<br class="hidden xl:block">
                        We’d love to hear from you.
                    </p>

                </div>

                <img
                    src="{{ asset('images/contact/connect-ground-crayfish.webp') }}"
                    alt="Ground Oron crayfish overflowing from a carved wooden bowl with tomatoes and fresh greens"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    class="absolute inset-x-0 bottom-0 -z-10 h-[24rem] w-full object-cover object-[42%_center] sm:h-[28rem] lg:h-[46%] lg:object-[44%_center] xl:h-[48%]"
                >
            </div>

            <div class="flex items-center px-5 py-10 sm:px-8 lg:px-4 lg:py-10 xl:px-8 xl:py-14">
                <div class="w-full rounded-2xl border border-[#e5e7e3] bg-white px-6 py-9 shadow-[0_18px_55px_rgba(18,55,44,0.10)] sm:px-10 lg:px-9 lg:py-6 xl:px-12 xl:py-11">
                    <h2 class="font-display text-[clamp(3rem,6vw,4.6rem)] leading-[0.86] font-semibold tracking-[-0.045em] text-[#071d17] lg:text-[3rem] xl:text-[clamp(3.5rem,4vw,4.75rem)]">
                        Send Us a Message
                    </h2>
                    <p class="mt-3 text-[clamp(0.98rem,1.05vw,1.2rem)] leading-relaxed text-[#3f504a]">
                        Fill out the form below and we’ll get back to you as soon as possible.
                    </p>

                    @if (session('contact_success'))
                        <div role="status" class="mt-6 rounded-lg border border-[#b8d8c6] bg-[#edf7f0] px-4 py-3 text-sm leading-relaxed text-forest">
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    @if (session('contact_error'))
                        <div role="alert" class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm leading-relaxed text-red-800">
                            {{ session('contact_error') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="mt-7 space-y-5 lg:mt-5 lg:space-y-4 xl:mt-7 xl:space-y-5">
                        @csrf

                        <div>
                            <label for="full_name" class="mb-2 block text-[0.95rem] font-semibold text-[#14251f]">
                                Full Name <span class="text-red-600" aria-hidden="true">*</span>
                            </label>
                            <input
                                id="full_name"
                                name="full_name"
                                type="text"
                                value="{{ old('full_name') }}"
                                autocomplete="name"
                                required
                                @error('full_name') aria-invalid="true" aria-describedby="full_name-error" @enderror
                                @class([
                                    'min-h-14 w-full rounded-lg border bg-white px-4 text-[0.95rem] text-[#14251f] shadow-inner shadow-black/[0.02] transition placeholder:text-[#8c9692] focus:border-accent focus:ring-2 focus:ring-accent/15 focus:outline-none lg:min-h-12 xl:min-h-14',
                                    'border-red-400' => $errors->has('full_name'),
                                    'border-[#d8ddda]' => ! $errors->has('full_name'),
                                ])
                                placeholder="Enter your full name"
                            >
                            @error('full_name')
                                <p id="full_name-error" class="mt-1.5 text-sm text-red-700">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="email" class="mb-2 block text-[0.95rem] font-semibold text-[#14251f]">
                                    Email Address <span class="text-red-600" aria-hidden="true">*</span>
                                </label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                    @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                                    @class([
                                        'min-h-14 w-full rounded-lg border bg-white px-4 text-[0.95rem] text-[#14251f] shadow-inner shadow-black/[0.02] transition placeholder:text-[#8c9692] focus:border-accent focus:ring-2 focus:ring-accent/15 focus:outline-none lg:min-h-12 xl:min-h-14',
                                        'border-red-400' => $errors->has('email'),
                                        'border-[#d8ddda]' => ! $errors->has('email'),
                                    ])
                                    placeholder="Enter your email address"
                                >
                                @error('email')
                                    <p id="email-error" class="mt-1.5 text-sm text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="subject" class="mb-2 block text-[0.95rem] font-semibold text-[#14251f]">
                                    Subject <span class="text-red-600" aria-hidden="true">*</span>
                                </label>
                                <div class="relative">
                                    <select
                                        id="subject"
                                        name="subject"
                                        required
                                        @error('subject') aria-invalid="true" aria-describedby="subject-error" @enderror
                                        @class([
                                            'min-h-14 w-full appearance-none rounded-lg border bg-white px-4 pr-11 text-[0.95rem] text-[#14251f] shadow-inner shadow-black/[0.02] transition focus:border-accent focus:ring-2 focus:ring-accent/15 focus:outline-none lg:min-h-12 xl:min-h-14',
                                            'border-red-400' => $errors->has('subject'),
                                            'border-[#d8ddda]' => ! $errors->has('subject'),
                                        ])
                                    >
                                        <option value="">Select a subject</option>
                                        @foreach ($subjects as $value => $label)
                                            <option value="{{ $value }}" @selected(old('subject') === $value)>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                    <svg class="pointer-events-none absolute top-1/2 right-4 size-5 -translate-y-1/2 text-[#14251f]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="m7 10 5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                @error('subject')
                                    <p id="subject-error" class="mt-1.5 text-sm text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="mb-2 block text-[0.95rem] font-semibold text-[#14251f]">
                                Message <span class="text-red-600" aria-hidden="true">*</span>
                            </label>
                            <div class="relative">
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    maxlength="500"
                                    required
                                    data-contact-message
                                    aria-describedby="message-count @error('message') message-error @enderror"
                                    @error('message') aria-invalid="true" @enderror
                                    @class([
                                        'min-h-36 w-full resize-y rounded-lg border bg-white px-4 pt-3 pb-8 text-[0.95rem] leading-relaxed text-[#14251f] shadow-inner shadow-black/[0.02] transition placeholder:text-[#8c9692] focus:border-accent focus:ring-2 focus:ring-accent/15 focus:outline-none lg:min-h-32 xl:min-h-36',
                                        'border-red-400' => $errors->has('message'),
                                        'border-[#d8ddda]' => ! $errors->has('message'),
                                    ])
                                    placeholder="Type your message here..."
                                >{{ old('message') }}</textarea>
                                <span id="message-count" data-message-count class="pointer-events-none absolute right-3 bottom-3 text-xs text-[#7a8581]" aria-live="polite">
                                    0/500
                                </span>
                            </div>
                            @error('message')
                                <p id="message-error" class="mt-1.5 text-sm text-red-700">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="inline-flex min-h-14 w-full items-center justify-center gap-5 rounded-full bg-accent px-8 text-base font-semibold text-white transition-colors hover:bg-forest focus-visible:outline-offset-4">
                            Send Message <span class="text-xl" aria-hidden="true">→</span>
                        </button>

                        <p class="text-center text-[0.82rem] text-[#58665f]">
                            We typically respond within 1–2 business days.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="border-y border-[#e7e9e5] bg-white" aria-label="Contact support options">
        <div class="mx-auto grid w-full max-w-[94rem] px-6 py-7 sm:px-10 md:grid-cols-3 lg:px-12 lg:py-7 xl:py-8">
            <article class="flex items-center gap-5 border-b border-[#e1e5e1] py-5 md:border-r md:border-b-0 md:px-5 md:py-0 lg:gap-4 lg:px-4 xl:gap-7 xl:px-8">
                <span class="flex size-18 shrink-0 items-center justify-center rounded-full bg-mist text-forest lg:size-16 xl:size-20">
                    <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M40 22c0 8-7.2 14-16 14-2.4 0-4.6-.4-6.6-1.2L8 39l2.9-8C9.1 28.5 8 25.6 8 22c0-8 7.2-14 16-14s16 6 16 14Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="font-display text-[1.45rem] leading-none font-semibold text-[#071d17] lg:text-[1.15rem] xl:text-[1.45rem]">Product Inquiries</h2>
                    <p class="mt-2 text-[0.9rem] leading-[1.4] text-[#52615b] lg:text-[0.78rem] xl:text-[0.9rem]">Learn more about our<br class="hidden lg:block"> products and ingredients.</p>
                </div>
            </article>

            <article class="flex items-center gap-5 border-b border-[#e1e5e1] py-5 md:border-r md:border-b-0 md:px-5 md:py-0 lg:gap-4 lg:px-4 xl:gap-7 xl:px-8">
                <span class="flex size-18 shrink-0 items-center justify-center rounded-full bg-mist text-forest lg:size-16 xl:size-20">
                    <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="m10 16 14-8 14 8v17L24 41l-14-8V16Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                        <path d="m10 16 14 8 14-8M24 24v17M17 12l14 8" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="font-display text-[1.45rem] leading-none font-semibold text-[#071d17] lg:text-[1.15rem] xl:text-[1.45rem]">Order Support</h2>
                    <p class="mt-2 text-[0.9rem] leading-[1.4] text-[#52615b] lg:text-[0.78rem] xl:text-[0.9rem]">Get help with your order,<br class="hidden lg:block"> shipping, or delivery.</p>
                </div>
            </article>

            <article class="flex items-center gap-5 py-5 md:px-5 md:py-0 lg:gap-4 lg:px-4 xl:gap-7 xl:px-8">
                <span class="flex size-18 shrink-0 items-center justify-center rounded-full bg-mist text-forest lg:size-16 xl:size-20">
                    <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M14 7h16l7 7v27H14V7Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                        <path d="M30 7v8h7M20 23h11M20 29h11M20 35h7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="font-display text-[1.45rem] leading-none font-semibold text-[#071d17] lg:text-[1.15rem] xl:text-[1.45rem]">General Questions</h2>
                    <p class="mt-2 text-[0.9rem] leading-[1.4] text-[#52615b] lg:text-[0.78rem] xl:text-[0.9rem]">We’re happy to assist<br class="hidden lg:block"> with any other inquiries.</p>
                </div>
            </article>
        </div>
    </section>

    @php
        $faqs = [
            [
                'question' => 'Where can I buy Krill Harvest products?',
                'answer' => 'Use the Shop Now link to view current online availability. Retail locations have not yet been confirmed, so please contact our team for the latest purchasing information.',
            ],
            [
                'question' => 'How should I store Krill Harvest Oron crayfish?',
                'answer' => 'Store the unopened pouch in a cool, dry place. Refrigerate after opening and always follow the storage directions printed on the package.',
            ],
            [
                'question' => 'Do you ship internationally?',
                'answer' => 'Shipping availability varies by destination. Send us your location and order requirements, and our team will confirm the options currently available.',
            ],
            [
                'question' => 'What sizes are available?',
                'answer' => 'The product currently featured on this website is the 300g pouch. Contact our team to confirm current packaging and availability before ordering.',
            ],
            [
                'question' => 'Are your products 100% natural?',
                'answer' => 'Krill Harvest Oron Crayfish is presented as 100% natural, sun dried, and made without additives or preservatives.',
            ],
        ];
    @endphp

    <section id="contact-faqs" class="bg-[#faf8f3]">
        <div class="mx-auto w-full max-w-[94rem] px-6 py-12 sm:px-10 lg:px-12 lg:py-8 xl:py-18">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-[clamp(0.72rem,0.78vw,0.92rem)] font-semibold tracking-[0.28em] text-accent uppercase">
                        Frequently Asked Questions
                    </p>
                    <h2 class="mt-3 font-display text-[clamp(3.2rem,6.5vw,4.5rem)] leading-[0.84] font-semibold tracking-[-0.045em] text-[#071d17] lg:mt-2 lg:text-[3rem] xl:mt-3 xl:text-[clamp(3.2rem,6.5vw,4.5rem)]">
                        Find Quick Answers
                    </h2>
                    <p class="mt-4 text-[clamp(0.95rem,1vw,1.12rem)] leading-relaxed text-[#45564f] lg:mt-2 lg:text-[0.85rem] xl:mt-4 xl:text-[clamp(0.95rem,1vw,1.12rem)]">
                        Here are some of the most common questions about Krill Harvest products and orders.
                    </p>
                </div>

                <a href="#contact-faqs" class="inline-flex items-center gap-3 self-start font-semibold text-accent transition-colors hover:text-forest lg:self-auto lg:pb-2">
                    View All FAQs <span class="text-xl" aria-hidden="true">→</span>
                </a>
            </div>

            <div class="mt-7 space-y-2.5 lg:mt-5 lg:space-y-1 xl:mt-7 xl:space-y-2.5">
                @foreach ($faqs as $faq)
                    <details name="contact-faq" class="group rounded-lg border border-[#e2e5e1] bg-white shadow-[0_4px_15px_rgba(18,55,44,0.035)]">
                        <summary class="flex min-h-14 cursor-pointer list-none items-center justify-between gap-5 px-5 py-4 text-[clamp(0.96rem,1vw,1.12rem)] font-medium text-[#13241e] marker:hidden sm:px-6 lg:min-h-12 lg:py-2.5 lg:text-[0.9rem] xl:min-h-14 xl:py-4 xl:text-[clamp(0.96rem,1vw,1.12rem)]">
                            <span>{{ $faq['question'] }}</span>
                            <svg class="size-5 shrink-0 transition-transform duration-200 group-open:rotate-180" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m7 10 5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </summary>
                        <div class="border-t border-[#edf0ec] px-5 py-4 text-[0.95rem] leading-relaxed text-[#4b5c55] sm:px-6">
                            {{ $faq['answer'] }}
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const contactMessage = document.querySelector('[data-contact-message]');
        const contactMessageCount = document.querySelector('[data-message-count]');

        if (contactMessage && contactMessageCount) {
            const updateContactMessageCount = () => {
                contactMessageCount.textContent = `${contactMessage.value.length}/500`;
            };

            contactMessage.addEventListener('input', updateContactMessageCount);
            updateContactMessageCount();
        }
    </script>
@endpush
