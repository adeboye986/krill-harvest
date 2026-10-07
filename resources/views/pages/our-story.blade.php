@extends('layouts.app')

@section('title', 'Our Story')

@section('content')
    <section class="relative isolate overflow-hidden bg-[#10271f] text-white">
        <img
            src="{{ asset('images/story/hero-river.webp') }}"
            alt="A traditional canoe on calm Nigerian waters at sunset"
            width="1891"
            height="831"
            class="absolute inset-0 -z-20 size-full object-cover object-[61%_center]"
            fetchpriority="high"
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-r from-[#06120d]/95 via-[#06120d]/69 to-[#06120d]/8 lg:via-[#06120d]/48"></div>

        <div class="mx-auto grid w-full max-w-[100rem] grid-cols-1 px-5 sm:px-8 lg:min-h-[clamp(31rem,40vw,42rem)] lg:grid-cols-[52%_48%] lg:px-16 xl:px-20">
            <div class="flex flex-col items-start pt-14 pb-10 sm:pt-16 lg:justify-center lg:py-16">
                <p class="text-[clamp(0.78rem,0.9vw,1.05rem)] font-semibold tracking-[0.32em] text-accent uppercase">Our Story</p>

                <h1 class="mt-4 max-w-[47rem] font-display text-[clamp(3.75rem,10.8vw,5.7rem)] leading-[0.84] font-semibold tracking-[-0.045em] sm:text-[5.9rem] lg:text-[clamp(4.3rem,5.7vw,6.6rem)]">
                    A Rich Tradition<br>
                    from Our Waters<br>
                    to Your Table
                </h1>

                <p class="mt-6 max-w-[42rem] font-display text-[clamp(1.2rem,1.55vw,1.65rem)] leading-[1.23] text-white/95 lg:mt-7">
                    Krill Harvest brings you premium Oron crayfish,<br class="hidden xl:block">
                    wild-caught from the pristine waters of the Niger Delta,<br class="hidden xl:block">
                    carefully processed to preserve its natural flavor and rich<br class="hidden xl:block">
                    aroma — so you can enjoy the authentic taste of Nigeria,<br class="hidden xl:block">
                    wherever you are.
                </p>

                <x-button-link :href="route('products')" class="mt-7 min-h-14 min-w-52 gap-4 px-9 text-[1.05rem] lg:mt-8">
                    Our Products <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>

            <div class="flex min-h-[440px] items-end justify-center lg:min-h-0 lg:justify-end lg:pt-7">
                <img
                    src="{{ asset('images/home/krill-harvest-pouch.webp') }}"
                    alt="Krill Harvest premium Oron ground crayfish pouch"
                    width="900"
                    height="1350"
                    class="h-auto max-h-[525px] w-auto max-w-full drop-shadow-[0_20px_25px_rgba(0,0,0,0.35)] sm:max-h-[590px] lg:max-h-[clamp(28rem,38vw,40rem)] lg:max-w-[96%]"
                >
            </div>
        </div>
    </section>

    <section class="bg-[#fbf8f1]">
        <div class="mx-auto grid w-full max-w-[100rem] gap-10 px-5 py-14 sm:px-8 lg:grid-cols-[minmax(0,47fr)_minmax(0,53fr)] lg:items-center lg:gap-14 lg:px-12 lg:py-10 xl:gap-20 xl:px-20 xl:py-14">
            <div>
                <p class="flex items-center gap-4 text-[clamp(0.75rem,0.8vw,0.95rem)] font-semibold tracking-[0.3em] text-accent uppercase">
                    Rooted in Oron
                </p>
                <h2 class="mt-4 font-display text-[clamp(3.1rem,6.6vw,4.3rem)] leading-[0.88] font-semibold tracking-[-0.04em] text-black lg:text-[clamp(3.2rem,4.3vw,5rem)]">
                    More Than a Product,<br>
                    It’s Our Heritage
                </h2>
                <div class="mt-6 max-w-[43rem] space-y-5 text-[0.98rem] leading-[1.52] text-[#35443e] lg:text-[clamp(1rem,1.05vw,1.2rem)]">
                    <p>
                        Our journey began in Oron, a coastal community in Akwa Ibom State, Nigeria, where crayfish has been a way of life for generations. For many families, crayfish is more than a food ingredient — it’s culture, livelihood, and a connection to the waters that sustain us.
                    </p>
                    <p>
                        At Krill Harvest, we are proud to carry this heritage forward by sharing the exceptional quality and authentic taste of Oron crayfish with homes around the world.
                    </p>
                </div>
            </div>

            <figure class="relative isolate overflow-hidden rounded-xl bg-forest text-white">
                <img
                    src="{{ asset('images/story/heritage-fisherman.webp') }}"
                    alt="A Nigerian fisherman standing in a wooden canoe and gathering his net at sunset"
                    width="1536"
                    height="1024"
                    loading="lazy"
                    class="aspect-[1.62] w-full object-cover object-center"
                >
                <figcaption class="absolute right-[4%] bottom-[4%] flex items-center gap-3 rounded-md bg-black/20 px-3 py-2 text-[clamp(0.68rem,0.8vw,0.9rem)] leading-[1.15] font-semibold backdrop-blur-[2px]">
                    <svg class="size-6 shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 21s7-6.15 7-12A7 7 0 1 0 5 9c0 5.85 7 12 7 12Z" fill="currentColor" />
                        <circle cx="12" cy="9" r="2.5" fill="#15372d" />
                    </svg>
                    <span>Oron, Akwa Ibom State<br>Nigeria</span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="border-y border-line/70 bg-[#f6f3eb]" aria-label="Our values">
        <div class="mx-auto grid w-full max-w-[100rem] grid-cols-1 px-5 py-8 sm:grid-cols-2 sm:px-8 lg:grid-cols-4 lg:px-12 lg:py-6 xl:px-20">
            <article class="flex flex-col items-center border-b border-line px-5 py-7 text-center sm:border-r lg:border-b-0 lg:py-0">
                <span class="flex size-[clamp(3.5rem,4vw,4.5rem)] items-center justify-center rounded-full bg-mist">
                    <svg class="size-[clamp(2.25rem,2.6vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M36 10C22 11.8 14.1 19 13 35c12.7.1 22.4-7.7 23-25Z" stroke="currentColor" stroke-width="2" />
                        <path d="M13 36c5.5-8.7 10.7-14.3 18-20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="mt-4 font-display text-[clamp(1.2rem,1.3vw,1.5rem)] leading-none font-semibold text-black">Authentic Origin</h3>
                <p class="mt-2 text-[clamp(0.88rem,0.9vw,1rem)] leading-[1.35] text-[#35443e]">Sourced from the pristine<br class="hidden xl:block"> waters of the Niger Delta.</p>
            </article>

            <article class="flex flex-col items-center border-b border-line px-5 py-7 text-center sm:border-r-0 lg:border-r lg:border-b-0 lg:py-0">
                <span class="flex size-[clamp(3.5rem,4vw,4.5rem)] items-center justify-center rounded-full bg-mist">
                    <svg class="size-[clamp(2.25rem,2.6vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <circle cx="24" cy="24" r="8" stroke="currentColor" stroke-width="2" />
                        <path d="M24 5v7M24 36v7M5 24h7M36 24h7M10.6 10.6l5 5M32.4 32.4l5 5M37.4 10.6l-5 5M15.6 32.4l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="mt-4 font-display text-[clamp(1.2rem,1.3vw,1.5rem)] leading-none font-semibold text-black">Naturally Processed</h3>
                <p class="mt-2 text-[clamp(0.88rem,0.9vw,1rem)] leading-[1.35] text-[#35443e]">Sun dried to preserve<br class="hidden xl:block"> its rich aroma and flavor.</p>
            </article>

            <article class="flex flex-col items-center border-b border-line px-5 py-7 text-center sm:border-r lg:border-b-0 lg:py-0">
                <span class="flex size-[clamp(3.5rem,4vw,4.5rem)] items-center justify-center rounded-full bg-mist">
                    <svg class="size-[clamp(2.25rem,2.6vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                        <path d="M24 6 38 12v10c0 9.2-5.4 15.3-14 20-8.6-4.7-14-10.8-14-20V12l14-6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="m18 24 4 4 8-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3 class="mt-4 font-display text-[clamp(1.2rem,1.3vw,1.5rem)] leading-none font-semibold text-black">Pure &amp; Natural</h3>
                <p class="mt-2 text-[clamp(0.88rem,0.9vw,1rem)] leading-[1.35] text-[#35443e]">No additives.<br>No preservatives.</p>
            </article>

            <article class="flex flex-col items-center px-5 py-7 text-center lg:py-0">
                <span class="flex size-[clamp(3.5rem,4vw,4.5rem)] items-center justify-center rounded-full bg-mist">
                    <svg class="size-[clamp(2.45rem,2.8vw,3.1rem)]" viewBox="0 0 56 48" fill="none" aria-hidden="true">
                        <circle cx="28" cy="12" r="7" stroke="currentColor" stroke-width="2" />
                        <circle cx="11" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <circle cx="45" cy="20" r="5" stroke="currentColor" stroke-width="2" />
                        <path d="M16 42v-4c0-8 4.7-13 12-13s12 5 12 13v4M2 42v-3c0-6.2 3.5-10 9-10 3 0 5.4 1.2 7 3.4M54 42v-3c0-6.2-3.5-10-9-10-3 0-5.4 1.2-7 3.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="mt-4 font-display text-[clamp(1.2rem,1.3vw,1.5rem)] leading-[0.95] font-semibold text-black">Supporting<br>Local Communities</h3>
                <p class="mt-2 text-[clamp(0.88rem,0.9vw,1rem)] leading-[1.35] text-[#35443e]">Creating opportunities<br class="hidden xl:block"> and sustaining livelihoods.</p>
            </article>
        </div>
    </section>

    <section class="relative isolate overflow-hidden bg-[#fbf8f1]">
        <img src="{{ asset('images/home/crayfish-line-art.svg') }}" alt="" class="absolute -right-14 top-5 -z-10 h-[clamp(15rem,24vw,25rem)] w-auto opacity-[0.09]" aria-hidden="true">

        <div class="mx-auto grid w-full max-w-[100rem] gap-10 px-5 py-14 sm:px-8 lg:grid-cols-2 lg:items-center lg:gap-14 lg:px-12 lg:py-8 xl:gap-20 xl:px-20 xl:py-10">
            <figure class="relative isolate overflow-hidden rounded-xl bg-forest text-white">
                <img
                    src="{{ asset('images/story/quality-ground-crayfish.webp') }}"
                    alt="A rustic wooden bowl overflowing with ground Oron crayfish"
                    width="1672"
                    height="941"
                    loading="lazy"
                    class="aspect-[1.72] w-full object-cover object-center"
                >
            </figure>

            <div class="max-w-[44rem]">
                <p class="flex items-center gap-4 text-[clamp(0.75rem,0.8vw,0.95rem)] font-semibold tracking-[0.3em] text-accent uppercase">
                    Our Commitment
                </p>
                <h2 class="mt-4 font-display text-[clamp(3.1rem,6.6vw,4.3rem)] leading-[0.88] font-semibold tracking-[-0.04em] text-black lg:text-[clamp(3.2rem,4.3vw,5rem)]">
                    Quality You Can Trust
                </h2>
                <p class="mt-6 text-[0.98rem] leading-[1.52] text-[#35443e] lg:text-[clamp(1rem,1.05vw,1.2rem)]">
                    From sourcing to processing and packaging, we are committed to maintaining the highest standards of quality and food safety. Each pack of Krill Harvest Oron crayfish is carefully prepared to deliver the rich, authentic flavor that makes Nigerian cuisine extra special.
                </p>
                <x-button-link :href="route('products')" class="mt-7 min-h-14 min-w-48 gap-4 text-[1.05rem]">
                    Shop Now <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>
        </div>
    </section>

    <section class="relative isolate flex min-h-[440px] items-center justify-center overflow-hidden px-5 py-16 text-center text-white sm:px-8 lg:min-h-[clamp(27rem,29vw,34rem)] lg:py-20">
        <img
            src="{{ asset('images/story/mangrove-cta.webp') }}"
            alt="Calm river water winding through deep green Nigerian mangroves"
            width="2048"
            height="768"
            loading="lazy"
            class="absolute inset-0 -z-20 size-full object-cover object-center"
        >
        <div class="absolute inset-0 -z-10 bg-[#052419]/58"></div>
        <div class="absolute inset-0 -z-10 bg-linear-to-b from-black/10 via-transparent to-black/30"></div>

        <div class="mx-auto max-w-5xl">
            <p class="flex items-center justify-center gap-4 text-[clamp(0.7rem,0.8vw,0.95rem)] font-semibold tracking-[0.16em] text-accent uppercase">
                A Taste of Nigeria. A Brighter Tomorrow.
            </p>
            <h2 class="mt-5 font-display text-[clamp(3rem,7.2vw,4.5rem)] leading-[0.92] font-semibold tracking-[-0.035em] lg:text-[clamp(4rem,5vw,6rem)]">
                Good Food Brings People Together
            </h2>
            <p class="mx-auto mt-5 max-w-3xl text-[0.95rem] leading-[1.5] text-white/95 lg:text-[clamp(1.05rem,1.05vw,1.2rem)]">
                With every pack you enjoy, you’re supporting local fishermen,<br class="hidden sm:block">
                preserving a rich heritage, and keeping a tradition alive.
            </p>
            <x-button-link :href="route('contact')" class="mt-7 min-h-14 min-w-64 gap-4 text-[1.05rem]">
                Be Part of the Story <span class="text-xl" aria-hidden="true">→</span>
            </x-button-link>
        </div>

    </section>
@endsection
