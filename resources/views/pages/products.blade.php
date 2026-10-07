@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <section class="relative isolate overflow-hidden bg-[#f8f3e9] text-forest" data-hero>
        <img
            src="{{ asset('images/products/hero-kitchen.webp') }}"
            alt="A bright kitchen counter with a bowl of ground crayfish"
            width="1983"
            height="793"
            class="absolute inset-0 -z-20 size-full object-cover object-[54%_center]"
            fetchpriority="high"
            data-parallax
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-r from-[#fffdf8]/94 via-[#fffdf8]/54 to-transparent lg:via-[#fffdf8]/20"></div>

        <div class="mx-auto grid w-full max-w-[100rem] grid-cols-1 px-5 sm:px-8 lg:min-h-[clamp(34rem,42vw,46rem)] lg:grid-cols-[43%_57%] lg:px-12 xl:px-20">
            <div class="flex flex-col items-start pt-14 pb-10 lg:justify-center lg:py-7 xl:py-14">
                <p class="text-[clamp(0.78rem,0.9vw,1.05rem)] font-semibold tracking-[0.32em] text-accent uppercase" data-hero-eyebrow>Our Products</p>

                <h1 class="mt-3 font-display text-[clamp(4rem,11vw,6rem)] leading-[0.78] font-semibold tracking-[-0.05em] text-[#061b15] sm:text-[6.2rem] lg:text-[clamp(4.5rem,5.7vw,6.6rem)]">
                    <span class="block" data-heading-mask><span class="block" data-heading-line>Premium</span></span>
                    <span class="block" data-heading-mask><span class="block" data-heading-line>Oron Crayfish</span></span>
                </h1>

                <p class="mt-5 font-display text-[clamp(1.35rem,2vw,1.75rem)] leading-tight font-bold text-[#131713] lg:mt-4 lg:text-[1.2rem] xl:mt-5 xl:text-[clamp(1.4rem,1.5vw,1.8rem)]" data-hero-copy>
                    Wild-caught. Sun dried. Naturally delicious.
                </p>

                <p class="mt-4 max-w-[42rem] text-[0.98rem] leading-[1.55] text-[#26352f] lg:mt-3 lg:text-[0.9rem] lg:leading-[1.48] xl:mt-4 xl:text-[clamp(1rem,1.05vw,1.18rem)] xl:leading-[1.55]" data-hero-copy>
                    Krill Harvest brings you premium Oron crayfish, sourced from the pristine waters of the Niger Delta and carefully processed to preserve its rich aroma, bold flavor, and authentic taste. A true taste of Nigeria, wherever you are.
                </p>

                <x-button-link :href="route('products')" class="mt-6 min-h-14 min-w-48 gap-4 px-9 text-[1.05rem] lg:mt-5 xl:mt-6" data-hero-cta>
                    Shop Now <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>

                <div class="mt-7 grid w-full max-w-[35rem] grid-cols-3 gap-3 sm:gap-7 lg:mt-5 xl:mt-7" data-hero-features>
                    <div class="flex flex-col items-center gap-2 text-center" data-hero-feature>
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-forest">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <path d="M32 8C19 9.6 11.4 16.5 10.5 30c11 .2 20.7-6.1 21.5-22Z" stroke="currentColor" stroke-width="1.8" />
                                <path d="M11 31c4.6-6.9 9.2-11.3 15.8-15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.83rem,0.9vw,1rem)] leading-[1.05] font-medium">100%<br>Natural</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center" data-hero-feature>
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-forest">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <circle cx="20" cy="20" r="7" stroke="currentColor" stroke-width="1.8" />
                                <path d="M20 3v6M20 31v6M3 20h6M31 20h6M8 8l4.2 4.2M27.8 27.8 32 32M32 8l-4.2 4.2M12.2 27.8 8 32" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.83rem,0.9vw,1rem)] leading-[1.05] font-medium">Sun Dried</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center" data-hero-feature>
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-forest">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <path d="M33 7C21.3 8.5 14.2 14.5 13.2 26.5 23.3 26.6 31.9 21.2 33 7Z" stroke="currentColor" stroke-width="1.8" />
                                <path d="M13.5 27c-3.5-3.7-5.8-7.2-6.8-12.9 6.8.9 11.4 3.8 14.1 8.8M11 32.5c3.9-6.8 8.9-11.8 15.8-16.3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.83rem,0.9vw,1rem)] leading-[1.05] font-medium">No Additives<br>No Preservatives</span>
                    </div>
                </div>
            </div>

            <div class="relative grid min-h-[300px] grid-cols-2 items-end gap-1 pt-4 sm:min-h-[480px] lg:min-h-0 lg:block lg:pt-0" aria-label="Front and provisional back views of the Krill Harvest product pouch" data-pointer-depth>
                <img
                    src="{{ asset('images/home/krill-harvest-pouch.webp') }}"
                    alt="Front of the Krill Harvest premium Oron ground crayfish pouch"
                    width="900"
                    height="1350"
                    class="relative z-10 mb-0 h-auto w-full self-end drop-shadow-[0_18px_22px_rgba(0,0,0,0.25)] lg:absolute lg:top-5 lg:bottom-auto lg:left-[2%] lg:w-[56%] xl:top-auto xl:bottom-3"
                    data-hero-pouch="front"
                    data-float
                >
                <img
                    src="{{ asset('images/products/pouch-back.webp') }}"
                    alt="Provisional back label for the Krill Harvest premium Oron ground crayfish pouch"
                    width="1024"
                    height="1536"
                    class="mb-0 h-auto w-full self-end drop-shadow-[0_18px_22px_rgba(0,0,0,0.22)] lg:absolute lg:top-5 lg:right-0 lg:bottom-auto lg:w-[56%] xl:top-auto xl:bottom-3"
                    data-hero-pouch="back"
                    data-float
                >
            </div>
        </div>
    </section>

    <section class="bg-surface" aria-label="Why choose Krill Harvest">
        <div class="mx-auto grid w-full max-w-[100rem] grid-cols-1 px-5 py-7 sm:grid-cols-2 sm:px-8 lg:min-h-[7.5rem] lg:grid-cols-4 lg:px-12 lg:py-4 xl:min-h-36 xl:px-16 xl:py-7" data-stagger>
            <div class="flex items-center gap-5 border-b border-line py-5 sm:border-r sm:pr-5 lg:border-b-0 lg:py-0" data-stagger-item>
                <span class="flex size-[clamp(3.75rem,4vw,4.5rem)] shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-[clamp(2.35rem,2.5vw,2.75rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M10 20h28l-3 15H13l-3-15Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="M7 20h34M17 17c1.6-4 4-6 7-6s5.4 2 7 6M18 26h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[clamp(1rem,1vw,1.15rem)] leading-[1.15] font-semibold">Authentic<br>Nigerian Taste</h2>
                    <p class="mt-2 text-[clamp(0.78rem,0.8vw,0.95rem)] text-muted">Rich flavor in every dish</p>
                </div>
            </div>

            <div class="flex items-center gap-5 border-b border-line py-5 sm:pl-7 lg:border-r lg:border-b-0 lg:pr-5 lg:py-0" data-stagger-item>
                <span class="flex size-[clamp(3.75rem,4vw,4.5rem)] shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-[clamp(2.35rem,2.5vw,2.75rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M36 10C22 11.8 14.1 19 13 35c12.7.1 22.4-7.7 23-25Z" stroke="currentColor" stroke-width="2" />
                        <path d="M13 36c5.5-8.7 10.7-14.3 18-20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M13 28c-3-3.8-5-7.7-5.5-12.3 5.7.8 9.7 3.1 12 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[clamp(1rem,1vw,1.15rem)] leading-[1.15] font-semibold">Naturally<br>Sourced</h2>
                    <p class="mt-2 text-[clamp(0.78rem,0.8vw,0.95rem)] text-muted">From pristine waters</p>
                </div>
            </div>

            <div class="flex items-center gap-5 border-b border-line py-5 sm:border-r sm:pr-5 lg:border-b-0 lg:pl-7 lg:py-0" data-stagger-item>
                <span class="flex size-[clamp(3.75rem,4vw,4.5rem)] shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-[clamp(2.35rem,2.5vw,2.75rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M24 6 38 12v10c0 9.2-5.4 15.3-14 20-8.6-4.7-14-10.8-14-20V12l14-6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="m18 24 4 4 8-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[clamp(1rem,1vw,1.15rem)] leading-[1.15] font-semibold">Premium<br>Quality</h2>
                    <p class="mt-2 text-[clamp(0.78rem,0.8vw,0.95rem)] text-muted">Carefully processed</p>
                </div>
            </div>

            <div class="flex items-center gap-5 py-5 sm:pl-7 lg:py-0" data-stagger-item>
                <span class="flex size-[clamp(3.75rem,4vw,4.5rem)] shrink-0 items-center justify-center">
                    <svg class="size-[clamp(3.75rem,4vw,4.5rem)]" viewBox="0 0 56 48" fill="none" aria-hidden="true">
                        <circle cx="28" cy="12" r="7" stroke="currentColor" stroke-width="2" />
                        <circle cx="11" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <circle cx="45" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <path d="M16 42v-4c0-8 4.7-13 12-13s12 5 12 13v4M2 42v-3c0-6.2 3.5-10 9-10 3 0 5.4 1.2 7 3.4M54 42v-3c0-6.2-3.5-10-9-10-3 0-5.4 1.2-7 3.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[clamp(1rem,1vw,1.15rem)] leading-[1.15] font-semibold">Supporting<br>Local Communities</h2>
                    <p class="mt-2 text-[clamp(0.78rem,0.8vw,0.95rem)] text-muted">Sustaining livelihoods</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid bg-[#fbf8f2] lg:min-h-[23rem] lg:grid-cols-[54%_46%] lg:items-stretch xl:min-h-[35rem]">
        <figure class="relative isolate min-h-[380px] overflow-hidden bg-forest text-white sm:min-h-[480px] lg:min-h-[23rem] xl:min-h-[35rem]" data-image-mask="left">
            <img
                src="{{ asset('images/home/nigerian-crayfish-stew.webp') }}"
                alt="A rich Nigerian crayfish stew with vegetables in a dark bowl"
                width="1440"
                height="960"
                loading="lazy"
                class="absolute inset-0 size-full object-cover object-center"
            >
        </figure>

        <div class="flex items-center px-6 py-14 sm:px-12 lg:px-[clamp(2.5rem,4vw,5rem)] lg:py-3 xl:py-12">
            <div class="w-full max-w-[43rem]" data-reveal="right" data-reveal-delay="0.14">
                <p class="flex items-center gap-4 text-[clamp(0.7rem,0.8vw,0.95rem)] font-semibold tracking-[0.25em] text-accent uppercase">
                    Perfect for Your Favorite Dishes
                </p>
                <h2 class="mt-4 font-display text-[clamp(3rem,7vw,4.2rem)] leading-[0.87] font-semibold tracking-[-0.04em] text-black lg:text-[2.8rem] xl:text-[clamp(3.2rem,4vw,4.7rem)]">
                    Add Authentic Flavor<br>
                    to Every Meal
                </h2>
                <p class="mt-5 text-[0.98rem] leading-[1.55] text-[#35443e] lg:mt-3 lg:text-[0.9rem] xl:mt-5 xl:text-[clamp(1rem,1.05vw,1.18rem)]">
                    Krill Harvest Oron Crayfish enhances the taste and aroma of your favorite Nigerian dishes — from soups and stews to sauces and traditional meals.
                </p>

                <div class="mt-7 grid grid-cols-3 border-line text-center lg:mt-4 xl:mt-7" data-stagger data-stagger-distance="14" data-stagger-interval="0.07" data-stagger-delay="0.28">
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 border-r border-b border-line px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M8 22h32l-3 14H11L8 22Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path d="M5 22h38M14 19c2-4 5-6 10-6s8 2 10 6M16 28h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">Soups</span>
                    </div>
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 border-r border-b border-line px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M10 18h28v19H10V18Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path d="M16 18c0-4 3.6-7 8-7s8 3 8 7M6 23h4M38 23h4M19 9h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">Stews</span>
                    </div>
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 border-b border-line px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M21 7h6v6l3 4v19c0 3-2 5-6 5s-6-2-6-5V17l3-4V7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path d="M20 23c3 2 5 2 8 0M22 7V4h5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">Sauces</span>
                    </div>
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 border-r border-line px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M8 27h32l-4 10H12L8 27Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path d="M11 27c2-7 7-11 13-11s11 4 13 11M17 18c0-3 1.5-5 4-7M24 16c0-4 2-6 5-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">Rice Dishes</span>
                    </div>
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 border-r border-line px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <path d="M36 9C23 10.7 16 17.3 15 31c11.3.1 20.3-6.8 21-22Z" stroke="currentColor" stroke-width="2" />
                            <path d="M15 32c4.8-7.4 9.7-12.4 16.2-17M15 27c-4-2.8-6.5-6.4-7.4-11.4 6.8.9 11.3 3.7 14 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">Efo Riro</span>
                    </div>
                    <div class="flex min-h-24 flex-col items-center justify-center gap-2 px-2 py-3 lg:min-h-20 xl:min-h-24" data-stagger-item>
                        <svg class="size-10" viewBox="0 0 48 48" fill="currentColor" aria-hidden="true">
                            <circle cx="12" cy="24" r="3.5" />
                            <circle cx="24" cy="24" r="3.5" />
                            <circle cx="36" cy="24" r="3.5" />
                        </svg>
                        <span class="text-sm font-medium lg:text-base">And More</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative isolate flex min-h-[440px] items-center overflow-hidden text-white lg:min-h-[17rem] xl:min-h-[clamp(23rem,25vw,30rem)]">
        <img
            src="{{ asset('images/products/sourcing-river.webp') }}"
            alt="A Nigerian fisherman handling a net from a wooden canoe on a lush river"
            width="1983"
            height="793"
            loading="lazy"
            class="absolute inset-0 -z-20 size-full object-cover object-center"
            data-parallax
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-r from-[#09281f]/88 via-[#09281f]/38 to-transparent"></div>

        <div class="mx-auto w-full max-w-[100rem] px-5 py-16 sm:px-8 lg:px-16 lg:py-6 xl:px-20 xl:py-10">
            <div class="max-w-[37rem]" data-stagger data-stagger-distance="18">
                <h2 class="font-display text-[clamp(3.2rem,7.5vw,4.7rem)] leading-[0.88] font-semibold tracking-[-0.04em] lg:text-[3rem] xl:text-[clamp(3.5rem,4vw,4.8rem)]" data-stagger-item>
                    Sustainably Sourced<br>
                    for a Brighter Tomorrow
                </h2>
                <p class="mt-6 text-[0.98rem] leading-[1.55] text-white/95 lg:mt-4 lg:text-[0.9rem] xl:mt-6 xl:text-[clamp(1rem,1.05vw,1.2rem)]" data-stagger-item>
                    We work with local fishermen and communities to ensure responsible sourcing, helping to preserve our waters and support livelihoods for future generations.
                </p>
                <x-button-link :href="route('our-story')" class="mt-7 min-h-14 min-w-56 gap-4 text-[1.05rem] lg:mt-5 xl:mt-7" data-stagger-item>
                    Our Commitment <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>
        </div>

    </section>

    <section class="bg-[#fbf8f1]">
        <div class="mx-auto flex w-full max-w-[100rem] flex-col gap-8 px-5 py-12 sm:px-8 lg:min-h-48 lg:flex-row lg:items-center lg:justify-between lg:px-16 lg:py-10 xl:px-20" data-stagger data-stagger-distance="16" data-stagger-interval="0.08">
            <div class="flex flex-col items-start gap-5 sm:flex-row sm:items-center lg:gap-7">
                <span class="flex size-20 shrink-0 items-center justify-center rounded-full border-2 border-accent text-accent lg:size-24" data-stagger-item>
                    <svg class="size-11 lg:size-14" viewBox="0 0 56 56" fill="none" aria-hidden="true">
                        <path d="M8 12c8-2 14-.7 20 4v31c-6-4.7-12-6-20-4V12Zm40 0c-8-2-14-.7-20 4v31c6-4.7 12-6 20-4V12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="M28 16v31" stroke="currentColor" stroke-width="2" />
                    </svg>
                </span>
                <div>
                    <p class="text-[clamp(0.72rem,0.8vw,0.95rem)] font-semibold tracking-[0.25em] text-accent uppercase" data-stagger-item>Recipes &amp; Inspiration</p>
                    <h2 class="mt-2 font-display text-[clamp(2.55rem,5.8vw,3.5rem)] leading-[0.9] font-semibold tracking-[-0.035em] text-black lg:text-[2.25rem] xl:text-[clamp(3rem,3.4vw,4rem)]" data-stagger-item>
                        Delicious Meals, Made Simple
                    </h2>
                    <p class="mt-2 text-[0.95rem] leading-[1.5] text-[#35443e] lg:text-[clamp(1rem,1vw,1.15rem)]" data-stagger-item>
                        Discover tasty recipes and cooking tips using Krill Harvest Oron Crayfish.
                    </p>
                </div>
            </div>

            <x-button-link :href="route('recipes')" class="min-h-14 min-w-64 shrink-0 gap-4 text-[1.05rem] lg:min-h-16 lg:min-w-72" data-stagger-item>
                Explore Recipes <span class="text-xl" aria-hidden="true">→</span>
            </x-button-link>
        </div>
    </section>
@endsection
