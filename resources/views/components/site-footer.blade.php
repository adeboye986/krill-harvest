@php
    $footerNavigation = [
        ['label' => 'Home', 'href' => route('home')],
        ['label' => 'Our Story', 'href' => route('our-story')],
        ['label' => 'Products', 'href' => route('products')],
        ['label' => 'Recipes', 'href' => route('recipes')],
        ['label' => 'Sustainability', 'href' => route('home').'#sustainability'],
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
        'class' => 'relative isolate min-h-[clamp(34rem,33.6vw,45.5rem)] overflow-hidden bg-[#00372b] text-white',
        'aria-label' => 'Site footer',
    ]) }}
>
    <div class="absolute inset-0 -z-20 bg-[radial-gradient(circle_at_47%_42%,rgba(8,76,59,0.46),transparent_48%),linear-gradient(120deg,#013d30_0%,#002e24_48%,#00392c_100%)]"></div>

    <div class="absolute inset-y-0 right-0 -z-10 w-[38%] overflow-hidden" aria-hidden="true">
        <img
            src="{{ asset('images/home/crayfish-line-art.svg') }}"
            alt=""
            class="absolute -right-[18%] top-[-5%] h-[105%] w-auto max-w-none rotate-[-7deg] opacity-[0.075] mix-blend-luminosity"
        >
    </div>

    <div class="mx-auto flex min-h-[clamp(34rem,33.6vw,45.5rem)] w-full max-w-[135rem] flex-col px-6 pt-16 pb-10 sm:px-10 lg:px-[5.5vw] lg:pt-[clamp(5rem,7.5vw,10rem)] lg:pb-[clamp(4rem,4.8vw,6.75rem)]">
        <div class="grid lg:min-h-[clamp(17rem,15vw,20.25rem)] lg:grid-cols-[31%_46%_23%]">
            <div class="flex flex-col items-center border-b border-white/15 pb-12 text-center lg:items-start lg:border-r lg:border-b-0 lg:pr-[clamp(2rem,4vw,5rem)] lg:pb-0 lg:text-left">
                <div class="relative h-[7.6rem] w-[14.5rem] lg:h-36 lg:w-68" role="img" aria-label="Krill Harvest">
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

                <p class="mt-7 font-display text-[clamp(1.8rem,1.8vw,2.4rem)] leading-tight font-semibold tracking-[-0.02em]">
                    Good Food. Brighter Tomorrows.
                </p>
                <p class="mt-4 max-w-[34rem] text-[clamp(1rem,1.05vw,1.35rem)] leading-[1.45] text-[#b8c5b8]">
                    Premium Oron crayfish from the heart of Nigeria<br class="hidden xl:block"> to tables around the world.
                </p>
            </div>

            <div class="flex flex-col items-center justify-center border-b border-white/15 px-2 py-12 lg:border-r lg:border-b-0 lg:px-4 lg:py-0 xl:px-6 min-[1800px]:px-[clamp(2rem,4vw,5rem)]">
                <nav aria-label="Footer navigation">
                    <ul class="flex flex-wrap items-center justify-center gap-x-3 gap-y-4 text-[0.86rem] font-medium min-[1800px]:gap-x-5 min-[1800px]:text-[clamp(0.95rem,1vw,1.25rem)]">
                        @foreach ($footerNavigation as $item)
                            <li class="flex items-center gap-3 min-[1800px]:gap-5">
                                <a class="transition-colors hover:text-accent" href="{{ $item['href'] }}">
                                    {{ $item['label'] }}
                                </a>

                                @unless ($loop->last)
                                    <span class="h-6 w-px bg-accent" aria-hidden="true"></span>
                                @endunless
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <ul class="mt-14 flex flex-wrap items-center justify-center gap-5 sm:gap-8" aria-label="Social media links">
                    @foreach ($socialLinks as $social)
                        <li>
                            <a
                                href="{{ $social['href'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex size-[clamp(3.75rem,3.5vw,4.5rem)] items-center justify-center rounded-full border-2 border-white/90 text-white transition-colors hover:border-accent hover:text-accent"
                                aria-label="Krill Harvest on {{ $social['label'] }}"
                            >
                                @switch($social['label'])
                                    @case('Facebook')
                                        <svg class="size-8" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
                                            <path d="M18.2 29V17.2h4l.6-4.6h-4.6V9.7c0-1.3.4-2.2 2.3-2.2h2.5V3.4c-.4-.1-1.9-.2-3.6-.2-3.6 0-6 2.2-6 6.2v3.4h-4v4.6h4V29h4.8Z" />
                                        </svg>
                                        @break

                                    @case('Instagram')
                                        <svg class="size-8" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                            <rect x="6" y="6" width="20" height="20" rx="5" stroke="currentColor" stroke-width="2.4" />
                                            <circle cx="16" cy="16" r="5" stroke="currentColor" stroke-width="2.4" />
                                            <circle cx="23" cy="9.2" r="1.5" fill="currentColor" />
                                        </svg>
                                        @break

                                    @case('YouTube')
                                        <svg class="size-9" viewBox="0 0 36 32" fill="none" aria-hidden="true">
                                            <rect x="3" y="7" width="30" height="18" rx="5" fill="currentColor" />
                                            <path d="m15 12 8 4-8 4v-8Z" fill="#00372b" />
                                        </svg>
                                        @break

                                    @case('LinkedIn')
                                        <svg class="size-8" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
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

            <div class="flex items-center justify-center pt-12 lg:justify-start lg:pt-0 lg:pl-[clamp(2rem,4vw,5rem)]">
                <div class="relative rotate-[-5deg] text-center">
                    <p class="font-script text-[clamp(2.7rem,2.8vw,3.85rem)] leading-[0.88] font-medium tracking-[0.01em] text-white">
                        Same great<br>
                        taste. More<br>
                        great meals.
                    </p>
                    <svg class="mt-2 h-12 w-full overflow-visible text-accent" viewBox="0 0 260 48" fill="none" aria-hidden="true">
                        <path d="M16 38C75 8 150 9 244 3 173 14 101 27 16 38Z" fill="currentColor" opacity="0.92" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="mt-16 border-t border-white/15 pt-9 lg:mt-auto">
            <p class="text-center text-[clamp(0.9rem,0.95vw,1.15rem)] text-[#aebdad] lg:text-left">
                © {{ now()->year }} Krill Harvest LLC. All rights reserved.
            </p>
        </div>
    </div>
</footer>
