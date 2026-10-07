@php
    $footerNavigation = [
        ['label' => 'Home', 'href' => route('home')],
        ['label' => 'Our Story', 'href' => route('our-story')],
        ['label' => 'Products', 'href' => route('products')],
        ['label' => 'Recipes', 'href' => route('recipes')],
        ['label' => 'Contact', 'href' => route('contact')],
    ];

    $socialLinks = [
        ['label' => 'Facebook', 'href' => 'https://www.facebook.com/'],
        ['label' => 'Instagram', 'href' => 'https://www.instagram.com/'],
        ['label' => 'YouTube', 'href' => 'https://www.youtube.com/'],
        ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/'],
    ];
@endphp

<footer
    {{ $attributes->merge([
        'class' => 'relative isolate overflow-hidden bg-[#00372b] text-white',
        'aria-label' => 'Site footer',
    ]) }}
>
    <div class="absolute inset-0 -z-20 bg-[radial-gradient(circle_at_58%_45%,rgba(8,76,59,0.34),transparent_52%),linear-gradient(120deg,#013d30_0%,#002f25_52%,#00382c_100%)]"></div>

    <div class="absolute inset-y-0 right-[15%] -z-10 hidden w-[30%] overflow-hidden opacity-50 lg:block" aria-hidden="true">
        <img
            src="{{ asset('images/home/crayfish-line-art.svg') }}"
            alt=""
            class="absolute -right-[12%] top-[-35%] h-[175%] w-auto max-w-none rotate-[-8deg] opacity-[0.055] mix-blend-luminosity"
        >
    </div>

    <div class="mx-auto grid w-full max-w-[100rem] gap-9 px-6 py-9 sm:px-10 lg:grid-cols-[48%_52%] lg:items-start lg:gap-10 lg:px-12 lg:py-8 xl:px-20">
        <div>
            <div class="flex items-center">
                <div class="relative h-[4.7rem] w-[8.9rem] shrink-0 sm:h-20 sm:w-[9.5rem]" role="img" aria-label="Krill Harvest">
                    <img
                        src="{{ asset('images/brand/krill-harvest-logo.svg') }}"
                        alt=""
                        aria-hidden="true"
                        class="absolute inset-0 size-full brightness-0 invert"
                    >
                    <img
                        src="{{ asset('images/brand/krill-harvest-logo.svg') }}"
                        alt=""
                        aria-hidden="true"
                        class="absolute inset-0 size-full [clip-path:inset(0_0_55%_0)]"
                    >
                    <img
                        src="{{ asset('images/brand/krill-harvest-logo.svg') }}"
                        alt=""
                        aria-hidden="true"
                        class="absolute inset-0 size-full [clip-path:inset(67%_0_0_0)]"
                    >
                </div>

                <span class="mx-5 h-16 w-px shrink-0 bg-white/25 sm:mx-6" aria-hidden="true"></span>

                <div class="min-w-0">
                    <p class="text-[clamp(0.95rem,1.15vw,1.15rem)] leading-tight font-semibold">
                        Good Food. Brighter Tomorrows.
                    </p>
                    <p class="mt-3 max-w-[29rem] text-[0.72rem] leading-[1.45] text-[#bdc9c3] sm:text-[0.78rem]">
                        Premium Oron crayfish from the heart of Nigeria to tables around the world.
                    </p>
                </div>
            </div>

            <p class="mt-6 text-[0.72rem] text-[#bdc9c3] sm:text-[0.78rem]">
                © {{ now()->year }} Krill Harvest LLC. All rights reserved.
            </p>
        </div>

        <div class="lg:pt-2">
            <nav aria-label="Footer navigation">
                <ul class="flex flex-wrap items-center gap-x-3 gap-y-3 text-[0.78rem] font-medium sm:gap-x-4 sm:text-[0.84rem] lg:justify-end">
                    @foreach ($footerNavigation as $item)
                        <li class="flex items-center gap-3 sm:gap-4">
                            <a class="transition-colors hover:text-accent" href="{{ $item['href'] }}">
                                {{ $item['label'] }}
                            </a>

                            @unless ($loop->last)
                                <span class="h-4 w-px bg-white/60" aria-hidden="true"></span>
                            @endunless
                        </li>
                    @endforeach
                </ul>
            </nav>

            <ul class="mt-5 flex items-center gap-4 lg:justify-end" aria-label="Social media links">
                @foreach ($socialLinks as $social)
                    <li>
                        <a
                            href="{{ $social['href'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex size-7 items-center justify-center text-white transition-colors hover:text-accent"
                            aria-label="Krill Harvest on {{ $social['label'] }}"
                        >
                            @switch($social['label'])
                                @case('Facebook')
                                    <svg class="size-6" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
                                        <path d="M18.2 29V17.2h4l.6-4.6h-4.6V9.7c0-1.3.4-2.2 2.3-2.2h2.5V3.4c-.4-.1-1.9-.2-3.6-.2-3.6 0-6 2.2-6 6.2v3.4h-4v4.6h4V29h4.8Z" />
                                    </svg>
                                    @break

                                @case('Instagram')
                                    <svg class="size-6" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                        <rect x="6" y="6" width="20" height="20" rx="5" stroke="currentColor" stroke-width="2.4" />
                                        <circle cx="16" cy="16" r="5" stroke="currentColor" stroke-width="2.4" />
                                        <circle cx="23" cy="9.2" r="1.5" fill="currentColor" />
                                    </svg>
                                    @break

                                @case('YouTube')
                                    <svg class="size-7" viewBox="0 0 36 32" fill="none" aria-hidden="true">
                                        <rect x="3" y="7" width="30" height="18" rx="5" fill="currentColor" />
                                        <path d="m15 12 8 4-8 4v-8Z" fill="#00372b" />
                                    </svg>
                                    @break

                                @case('LinkedIn')
                                    <svg class="size-6" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
                                        <path d="M8.1 11.7H3.8V26h4.3V11.7ZM6 5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM25.7 17.8c0-4.3-2.3-6.4-5.4-6.4-2.5 0-3.6 1.4-4.2 2.3v-2h-4.3V26h4.3v-7.1c0-1.9.4-3.8 2.8-3.8s2.5 2.2 2.5 3.9v7h4.3v-8.2Z" />
                                    </svg>
                                    @break
                            @endswitch

                            <span class="sr-only">{{ $social['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
