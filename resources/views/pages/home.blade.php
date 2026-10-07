@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative isolate overflow-hidden bg-[#17231a] text-white lg:h-[500px]">
        <img
            src="{{ asset('images/home/hero-kitchen.webp') }}"
            alt="Ground crayfish, tomatoes, and greens on a rustic kitchen table"
            width="1672"
            height="941"
            class="absolute inset-0 -z-20 size-full object-cover object-[57%_center]"
            fetchpriority="high"
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-r from-[#07110b]/95 via-[#07110b]/55 to-transparent lg:via-[#07110b]/15"></div>

        <div class="mx-auto grid min-h-[860px] w-full max-w-site grid-cols-1 px-5 sm:px-8 lg:min-h-0 lg:h-full lg:grid-cols-2 lg:px-12">
            <div class="flex flex-col items-start pt-12 pb-6 lg:justify-center lg:py-8">
                <p class="text-[0.72rem] font-semibold tracking-[0.38em] uppercase sm:text-sm">Premium Quality</p>

                <h1 class="mt-3 font-display text-[clamp(4.15rem,10vw,5.15rem)] leading-[0.72] font-semibold tracking-[-0.045em] uppercase sm:text-[5.25rem] lg:mt-4 lg:text-[clamp(4rem,6.5vw,5.15rem)]">
                    <span class="block">Oron</span>
                    <span class="block">Crayfish</span>
                </h1>

                <div class="mt-5 flex items-center gap-4 text-sm font-semibold tracking-[0.34em] uppercase sm:text-base">
                    <span class="h-0.5 w-11 bg-accent"></span>
                    <span>Ground Fresh</span>
                </div>

                <p class="mt-5 max-w-sm font-display text-[1.6rem] leading-[1.03] font-medium sm:text-[1.75rem]">
                    Authentic flavor. From our waters<br class="hidden sm:block"> to your table.
                </p>

                <div class="mt-5 grid w-full max-w-md grid-cols-3 gap-3 sm:gap-7">
                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-12 items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="M25 7C14.5 8.3 8.3 13.8 7.6 24.6 16.4 24.8 24.2 19.8 25 7Z" stroke="currentColor" stroke-width="1.6" />
                                <path d="M8 25c3.6-5.4 7.3-9 12.6-12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[0.78rem] leading-[1.05] sm:text-sm">100%<br>Natural</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-12 items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <circle cx="16" cy="16" r="6" stroke="currentColor" stroke-width="1.6" />
                                <path d="M16 2v5M16 25v5M2 16h5M25 16h5M6.1 6.1l3.5 3.5M22.4 22.4l3.5 3.5M25.9 6.1l-3.5 3.5M9.6 22.4l-3.5 3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[0.78rem] leading-[1.05] sm:text-sm">Sun Dried</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-12 items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="M26 6C16.7 7.2 11 12 10.2 21.6 18.2 21.7 25.1 17.4 26 6Z" stroke="currentColor" stroke-width="1.6" />
                                <path d="M10.5 22C7.7 19 5.8 16.2 5 11.7c5.4.7 9.1 3 11.3 7M8.5 26c3.1-5.4 7.1-9.4 12.6-13" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[0.78rem] leading-[1.05] sm:text-sm">No Additives<br>No Preservatives</span>
                    </div>
                </div>

                <x-button-link :href="route('products')" class="mt-5 min-w-48 gap-3 text-base">
                    Shop Now <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>

            <div class="relative flex min-h-[390px] items-end justify-center lg:min-h-0 lg:justify-end">
                <img
                    src="{{ asset('images/home/krill-harvest-pouch.webp') }}"
                    alt="Krill Harvest premium Oron ground crayfish pouch"
                    width="900"
                    height="1350"
                    class="absolute bottom-[-1.5rem] h-[450px] w-auto max-w-none drop-shadow-[0_18px_22px_rgba(0,0,0,0.35)] sm:h-[510px] lg:right-[8%] lg:bottom-0 lg:h-[540px]"
                >
            </div>
        </div>
    </section>

    <section class="bg-surface" aria-label="Why choose Krill Harvest">
        <div class="mx-auto grid w-full max-w-site grid-cols-1 px-5 py-6 sm:grid-cols-2 sm:px-8 lg:h-[115px] lg:grid-cols-4 lg:px-10 lg:py-5">
            <div class="flex items-center gap-4 border-b border-line py-4 sm:border-r sm:pr-5 lg:border-b-0 lg:py-0">
                <span class="flex size-14 shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-9" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M10 20h28l-3 15H13l-3-15Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="M7 20h34M17 17c1.6-4 4-6 7-6s5.4 2 7 6M18 26h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[0.92rem] leading-[1.15] font-semibold">Authentic<br>Nigerian Taste</h2>
                    <p class="mt-2 text-xs text-muted">Rich flavor in every dish</p>
                </div>
            </div>

            <div class="flex items-center gap-4 border-b border-line py-4 sm:pl-7 lg:border-r lg:border-b-0 lg:pr-5 lg:py-0">
                <span class="flex size-14 shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-9" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M36 10C22 11.8 14.1 19 13 35c12.7.1 22.4-7.7 23-25Z" stroke="currentColor" stroke-width="2" />
                        <path d="M13 36c5.5-8.7 10.7-14.3 18-20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M13 28c-3-3.8-5-7.7-5.5-12.3 5.7.8 9.7 3.1 12 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[0.92rem] leading-[1.15] font-semibold">Naturally<br>Sourced</h2>
                    <p class="mt-2 text-xs text-muted">From pristine waters</p>
                </div>
            </div>

            <div class="flex items-center gap-4 border-b border-line py-4 sm:border-r sm:pr-5 lg:border-b-0 lg:pl-7 lg:py-0">
                <span class="flex size-14 shrink-0 items-center justify-center rounded-full border-2 border-forest">
                    <svg class="size-9" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M24 6 38 12v10c0 9.2-5.4 15.3-14 20-8.6-4.7-14-10.8-14-20V12l14-6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="m18 24 4 4 8-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[0.92rem] leading-[1.15] font-semibold">Premium<br>Quality</h2>
                    <p class="mt-2 text-xs text-muted">Carefully processed</p>
                </div>
            </div>

            <div class="flex items-center gap-4 py-4 sm:pl-7 lg:py-0">
                <span class="flex size-14 shrink-0 items-center justify-center">
                    <svg class="size-14" viewBox="0 0 56 48" fill="none" aria-hidden="true">
                        <circle cx="28" cy="12" r="7" stroke="currentColor" stroke-width="2" />
                        <circle cx="11" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <circle cx="45" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <path d="M16 42v-4c0-8 4.7-13 12-13s12 5 12 13v4M2 42v-3c0-6.2 3.5-10 9-10 3 0 5.4 1.2 7 3.4M54 42v-3c0-6.2-3.5-10-9-10-3 0-5.4 1.2-7 3.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <div>
                    <h2 class="text-[0.92rem] leading-[1.15] font-semibold">Supporting<br>Local Communities</h2>
                    <p class="mt-2 text-xs text-muted">Sustaining livelihoods</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid bg-[#fbf8f2] lg:h-[305px] lg:grid-cols-[52.8%_47.2%]">
        <img
            src="{{ asset('images/home/nigerian-crayfish-stew.webp') }}"
            alt="Rich Nigerian crayfish stew with vegetables"
            width="1440"
            height="960"
            loading="lazy"
            class="h-[320px] size-full object-cover object-center sm:h-[430px] lg:h-full"
        >

        <div class="relative isolate flex items-center overflow-hidden px-6 py-12 sm:px-12 lg:px-9 lg:py-7 xl:px-12">
            <img src="{{ asset('images/home/crayfish-line-art.svg') }}" alt="" class="absolute -right-12 top-4 -z-10 h-[250px] w-auto opacity-[0.1]" aria-hidden="true">
            <div class="max-w-[390px]">
                <p class="flex items-center gap-3 text-[0.67rem] font-semibold tracking-[0.3em] text-accent uppercase">
                    <span class="h-0.5 w-9 bg-accent"></span>
                    A Taste of Home
                </p>
                <h2 class="mt-4 font-display text-[clamp(2.7rem,5vw,3.25rem)] leading-[0.84] font-semibold tracking-[-0.035em] text-black lg:text-[2.55rem]">
                    Bring Authentic<br>Nigerian Flavor to Life
                </h2>
                <p class="mt-4 text-sm leading-[1.35] text-[#35443e]">
                    Krill Harvest Oron Crayfish is carefully processed to retain its rich aroma and natural taste, making every meal special — from soups and stews to sauces and traditional dishes.
                </p>
                <x-button-link :href="route('recipes')" class="mt-4 min-w-48 gap-3">
                    Explore Recipes <span class="text-lg" aria-hidden="true">→</span>
                </x-button-link>
            </div>
        </div>
    </section>

    <section class="bg-[#eaf1ed]">
        <div class="mx-auto grid w-full max-w-site gap-9 px-5 py-12 sm:px-8 lg:h-[285px] lg:grid-cols-[34%_66%] lg:items-center lg:gap-5 lg:px-10 lg:py-6">
            <div>
                <p class="flex items-center gap-3 text-[0.67rem] font-semibold tracking-[0.3em] text-accent uppercase">
                    <span class="h-0.5 w-9 bg-accent"></span>
                    Tradition Meets Quality
                </p>
                <h2 class="mt-3 font-display text-[clamp(2.7rem,6vw,3.35rem)] leading-[0.84] font-semibold tracking-[-0.035em] text-black lg:text-[2.75rem]">
                    From Our Waters<br>to Your Table
                </h2>
                <p class="mt-4 max-w-sm text-sm leading-[1.35] text-muted">
                    Sustainably sourced, sun dried, and ground fresh to deliver the authentic taste of Oron crayfish. Pure. Natural. Always.
                </p>
                <x-button-link :href="route('our-story')" class="mt-4 min-w-40 gap-3">
                    Our Story <span class="text-lg" aria-hidden="true">→</span>
                </x-button-link>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:gap-3">
                <figure>
                    <img src="{{ asset('images/home/responsibly-sourced.webp') }}" alt="Nigerian fisherman handling a net from a wooden canoe" width="800" height="1000" loading="lazy" class="aspect-[1.02] w-full rounded-xl object-cover object-center">
                    <figcaption class="pt-2 text-center text-sm font-medium text-black">Responsibly Sourced</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/home/sun-dried.webp') }}" alt="Crayfish drying naturally on outdoor trays" width="800" height="1000" loading="lazy" class="aspect-[1.02] w-full rounded-xl object-cover object-center">
                    <figcaption class="pt-2 text-center text-sm font-medium text-black">Sun Dried</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/home/ground-fresh.webp') }}" alt="Freshly ground crayfish in a wooden bowl" width="800" height="1000" loading="lazy" class="aspect-[1.02] w-full rounded-xl object-cover object-center">
                    <figcaption class="pt-2 text-center text-sm font-medium text-black">Ground Fresh</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section id="sustainability" class="relative isolate flex min-h-[390px] items-start justify-center overflow-hidden px-5 pt-12 text-center sm:px-8 lg:h-[255px] lg:min-h-0 lg:pt-8">
        <img
            src="{{ asset('images/home/sustainable-river.webp') }}"
            alt="Nigerian river surrounded by lush forest at golden hour"
            width="2048"
            height="683"
            loading="lazy"
            class="absolute inset-0 -z-20 size-full object-cover object-center"
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-b from-[#fff4df]/65 via-[#fff4df]/30 to-transparent"></div>

        <div class="max-w-xl text-black">
            <p class="flex items-center justify-center gap-3 text-[0.65rem] font-medium tracking-[0.16em] uppercase">
                <span class="h-0.5 w-8 bg-accent"></span>
                <span>Good Food. <strong class="font-semibold text-accent">Brighter Tomorrows.</strong></span>
            </p>
            <h2 class="mt-3 font-display text-[clamp(2.65rem,5vw,3.15rem)] leading-none font-semibold tracking-[-0.035em]">
                Support Sustainable Seafood
            </h2>
            <p class="mx-auto mt-3 max-w-lg text-sm leading-[1.35]">
                By choosing Krill Harvest, you're supporting local fishermen<br class="hidden sm:block"> and helping to preserve our waters for future generations.
            </p>
            <x-button-link :href="route('contact')" class="mt-4 min-w-52 gap-3">
                Join the Movement <span class="text-lg" aria-hidden="true">→</span>
            </x-button-link>
        </div>
    </section>
@endsection
