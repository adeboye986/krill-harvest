@extends('layouts.app')

@section('title', 'Recipes')

@section('content')
    <section class="relative isolate overflow-hidden bg-[#11261d] text-white">
        <img
            src="{{ asset('images/recipes/hero-kitchen.webp') }}"
            alt="Ground crayfish, tomatoes, onions, and greens in a dark kitchen"
            width="1920"
            height="819"
            class="absolute inset-0 -z-20 size-full object-cover object-[58%_center]"
            fetchpriority="high"
        >
        <div class="absolute inset-0 -z-10 bg-linear-to-r from-[#06110c]/96 via-[#06110c]/59 to-transparent lg:via-[#06110c]/36"></div>

        <div class="mx-auto grid w-full max-w-[100rem] grid-cols-1 px-5 sm:px-8 lg:min-h-[30rem] lg:grid-cols-[48%_52%] lg:px-12 xl:min-h-[clamp(34rem,40vw,44rem)] xl:px-20">
            <div class="flex flex-col items-start pt-14 pb-10 lg:justify-center lg:py-10 xl:py-14">
                <p class="text-[clamp(0.78rem,0.9vw,1.05rem)] font-semibold tracking-[0.32em] text-accent uppercase">Recipes</p>

                <h1 class="mt-3 font-display text-[clamp(4rem,11vw,6rem)] leading-[0.78] font-semibold tracking-[-0.045em] sm:text-[6.2rem] lg:text-[3.7rem] xl:text-[clamp(4.5rem,5.7vw,6.6rem)]">
                    Real<br>
                    Nigerian Flavor<br>
                    Starts Here
                </h1>

                <p class="mt-5 max-w-[39rem] font-display text-[clamp(1.3rem,1.8vw,1.65rem)] leading-[1.18] text-white/95 lg:text-[1.08rem] xl:text-[clamp(1.25rem,1.45vw,1.7rem)]">
                    Discover delicious, easy-to-follow recipes<br class="hidden xl:block">
                    made with Krill Harvest Oron Crayfish.<br class="hidden xl:block">
                    From traditional favorites to modern dishes,<br class="hidden xl:block">
                    bring the authentic taste of Nigeria to your table.
                </p>

                <x-button-link :href="route('recipes').'#featured-recipes'" class="mt-6 min-h-14 min-w-56 gap-4 px-9 text-[1.05rem]">
                    Explore Recipes <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>

                <div class="mt-6 grid w-full max-w-[37rem] grid-cols-3 gap-3 sm:gap-7">
                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <path d="M10 18a7 7 0 0 1 6.8-7A8 8 0 0 1 31 16.1 6 6 0 0 1 30 28H10a5 5 0 0 1 0-10Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                <path d="M13 28v5h14v-5M20 11v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.78rem,0.85vw,0.98rem)] leading-[1.05]">Authentic<br>Nigerian Recipes</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <path d="M12 7v10M8 7v6c0 3 1.3 4 4 4s4-1 4-4V7M12 17v16M28 7c-3 0-5 3.3-5 8v5h5v13M28 7v26" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.78rem,0.85vw,0.98rem)] leading-[1.05]">Easy to Follow</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 text-center">
                        <span class="flex size-[clamp(3.5rem,3.6vw,4.25rem)] items-center justify-center rounded-full border-2 border-white">
                            <svg class="size-[clamp(2rem,2.1vw,2.5rem)]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                <path d="M20 33S7 25.8 7 15.5C7 10.8 10.2 8 14.1 8c2.7 0 4.8 1.4 5.9 3.5C21.1 9.4 23.2 8 25.9 8c3.9 0 7.1 2.8 7.1 7.5C33 25.8 20 33 20 33Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="text-[clamp(0.78rem,0.85vw,0.98rem)] leading-[1.05]">Good Food<br>Brings People Together</span>
                    </div>
                </div>
            </div>

            <div class="relative flex min-h-[430px] items-end justify-center lg:min-h-0 lg:items-start lg:justify-center lg:pt-6">
                <img
                    src="{{ asset('images/home/krill-harvest-pouch.webp') }}"
                    alt="Krill Harvest premium Oron ground crayfish pouch"
                    width="900"
                    height="1350"
                    class="relative z-10 h-auto max-h-[500px] w-auto max-w-full drop-shadow-[0_20px_26px_rgba(0,0,0,0.35)] sm:max-h-[580px] lg:max-h-[clamp(32rem,38vw,40rem)]"
                >

            </div>
        </div>
    </section>

    <section class="bg-[#fbf8f1]">
        <div class="mx-auto w-full max-w-[100rem] px-5 py-12 sm:px-8 lg:px-12 lg:py-6 xl:px-16 xl:py-16">
            <div class="grid gap-9 lg:grid-cols-[35%_65%] lg:items-center lg:gap-10">
                <div>
                    <p class="flex items-center gap-4 text-[clamp(0.72rem,0.8vw,0.95rem)] font-semibold tracking-[0.28em] text-accent uppercase">
                        Browse Recipes
                    </p>
                    <h2 class="mt-3 font-display text-[clamp(3rem,7vw,4rem)] leading-[0.86] font-semibold tracking-[-0.04em] text-black lg:text-[2.6rem] xl:text-[clamp(3.1rem,3.8vw,4.5rem)]">
                        Find a Recipe for<br>
                        Every Occasion
                    </h2>
                    <p class="mt-4 text-[0.95rem] leading-[1.5] text-[#35443e] lg:text-[clamp(1rem,1vw,1.15rem)]">
                        Traditional dishes. Modern twists. Always delicious.
                    </p>
                </div>

                <div class="overflow-x-auto pb-2">
                    <div class="grid min-w-[43rem] grid-cols-6 gap-4 text-center lg:min-w-0 lg:gap-3 xl:gap-5" role="group" aria-label="Recipe categories">
                        <button type="button" class="group flex flex-col items-center gap-3 text-accent" aria-pressed="true">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-accent text-white">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M9 20h30v17H9V20Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path d="M6 24H3M42 24h3M16 20c1.5-5 4-7 8-7s6.5 2 8 7M20 10h8M13 28h22" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium whitespace-nowrap">All Recipes</span>
                        </button>

                        <button type="button" class="group flex flex-col items-center gap-3 text-forest" aria-pressed="false">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-mist">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M8 23h32l-3 13H11L8 23Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path d="M5 23h38M15 20c2-4 5-6 9-6s7 2 9 6M17 29h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium">Soups</span>
                        </button>

                        <button type="button" class="group flex flex-col items-center gap-3 text-forest" aria-pressed="false">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-mist">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M9 25h30l-4 11H13L9 25Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path d="M6 25h36M16 14c-2 3 2 4 0 7M24 11c-2 4 2 5 0 9M32 14c-2 3 2 4 0 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium">Stews</span>
                        </button>

                        <button type="button" class="group flex flex-col items-center gap-3 text-forest" aria-pressed="false">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-mist">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M8 28h32l-4 9H12l-4-9Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path d="M11 28c2-7 7-11 13-11s11 4 13 11M17 19c0-3 1.5-5 4-7M25 17c0-4 2-6 5-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium whitespace-nowrap">Rice Dishes</span>
                        </button>

                        <button type="button" class="group flex flex-col items-center gap-3 text-forest" aria-pressed="false">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-mist">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M36 9C23 10.7 16 17.3 15 31c11.3.1 20.3-6.8 21-22Z" stroke="currentColor" stroke-width="2" />
                                    <path d="M15 32c4.8-7.4 9.7-12.4 16.2-17M15 27c-4-2.8-6.5-6.4-7.4-11.4 6.8.9 11.3 3.7 14 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium">Sides</span>
                        </button>

                        <button type="button" class="group flex flex-col items-center gap-3 text-forest" aria-pressed="false">
                            <span class="flex size-[clamp(4rem,5vw,5rem)] items-center justify-center rounded-full bg-mist">
                                <svg class="size-[clamp(2.3rem,2.8vw,2.8rem)]" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                    <path d="M10 18a7 7 0 0 1 6.8-7A8 8 0 0 1 31 16.1 6 6 0 0 1 30 28H10a5 5 0 0 1 0-10Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path d="M13 28v6h14v-6M20 11v9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="text-[clamp(0.85rem,0.9vw,1rem)] font-medium whitespace-nowrap">Quick &amp; Easy</span>
                        </button>
                    </div>
                </div>
            </div>

            <div id="featured-recipes" class="mt-12 scroll-mt-8 lg:mt-7 xl:mt-14">
                <p class="flex items-center gap-4 text-[clamp(0.72rem,0.8vw,0.95rem)] font-semibold tracking-[0.28em] text-accent uppercase">
                    Featured Recipes
                </p>

                @php
                    $featuredRecipes = [
                        [
                            'image' => 'images/recipes/egusi-soup.webp',
                            'alt' => 'Nigerian Egusi soup with leafy greens and crayfish',
                            'title' => 'Egusi Soup with Crayfish',
                            'description' => 'A classic Nigerian soup made richer with the authentic taste of Krill Harvest Oron crayfish.',
                            'time' => '45 mins',
                            'servings' => '4 servings',
                        ],
                        [
                            'image' => 'images/recipes/jollof-rice.webp',
                            'alt' => 'Nigerian Jollof rice with grilled chicken and fried plantain',
                            'title' => 'Nigerian Jollof Rice',
                            'description' => 'A party favorite, elevated with the bold flavor of Oron crayfish.',
                            'time' => '40 mins',
                            'servings' => '4 servings',
                        ],
                        [
                            'image' => 'images/recipes/okra-soup.webp',
                            'alt' => 'Nigerian okra soup with greens and crayfish',
                            'title' => 'Okra Soup with Crayfish',
                            'description' => 'Simple, nutritious, and full of authentic Nigerian flavor.',
                            'time' => '35 mins',
                            'servings' => '4 servings',
                        ],
                    ];
                @endphp

                <div class="mt-5 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($featuredRecipes as $recipe)
                        <article class="flex h-full flex-col overflow-hidden rounded-xl border border-[#e7e2d8] bg-[#fffdf8] shadow-[0_8px_24px_rgba(24,55,44,0.05)]">
                            <img
                                src="{{ asset($recipe['image']) }}"
                                alt="{{ $recipe['alt'] }}"
                                width="1672"
                                height="941"
                                loading="lazy"
                                class="aspect-[1.86] w-full object-cover object-center"
                            >
                            <div class="flex flex-1 flex-col px-5 pt-4 pb-5 lg:px-4 lg:pt-3 lg:pb-4 xl:px-6 xl:pt-4 xl:pb-5">
                                <h3 class="font-display text-[clamp(1.45rem,1.55vw,1.8rem)] leading-none font-semibold text-black lg:text-[1.2rem] xl:text-[clamp(1.45rem,1.55vw,1.8rem)]">{{ $recipe['title'] }}</h3>
                                <p class="mt-2 min-h-14 text-[0.92rem] leading-[1.45] text-[#35443e] lg:min-h-12 lg:text-[0.8rem] lg:leading-[1.35] xl:min-h-14 xl:text-[clamp(0.94rem,0.9vw,1.05rem)] xl:leading-[1.45]">{{ $recipe['description'] }}</p>

                                <div class="mt-4 flex flex-wrap items-center gap-x-4 gap-y-2 text-[0.86rem] text-[#26352f] lg:mt-3 lg:text-[0.8rem] xl:mt-4 xl:text-[0.95rem]">
                                    <span class="inline-flex items-center gap-2">
                                        <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.7" />
                                            <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                                        </svg>
                                        {{ $recipe['time'] }}
                                    </span>
                                    <span aria-hidden="true">•</span>
                                    <span class="inline-flex items-center gap-2">
                                        <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <circle cx="12" cy="7.5" r="3" stroke="currentColor" stroke-width="1.7" />
                                            <path d="M6.5 20v-2.5c0-3.4 2.2-5.5 5.5-5.5s5.5 2.1 5.5 5.5V20h-11Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                                        </svg>
                                        {{ $recipe['servings'] }}
                                    </span>
                                </div>

                                <a href="{{ route('recipes') }}#featured-recipes" class="mt-4 inline-flex items-center gap-3 font-semibold text-accent transition-colors hover:text-forest lg:mt-3 xl:mt-4">
                                    View Recipe <span class="text-xl" aria-hidden="true">→</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="recipe-community" class="bg-[#fbf8f1] px-5 pb-8 sm:px-8 lg:px-12 xl:px-16">
        <div class="mx-auto grid w-full max-w-[94rem] overflow-hidden rounded-xl bg-[#0b4535] text-white lg:min-h-[9.5rem] lg:grid-cols-[34%_43%_23%] lg:items-center xl:min-h-[11.5rem]">
            <figure class="relative min-h-[250px] overflow-hidden sm:min-h-[300px] lg:min-h-full">
                <img
                    src="{{ asset('images/recipes/recipe-book.webp') }}"
                    alt="An open recipe book displaying a Nigerian dish"
                    width="1774"
                    height="887"
                    loading="lazy"
                    class="absolute inset-0 size-full object-contain object-left-bottom lg:scale-110"
                >
            </figure>

            <div class="px-6 py-10 sm:px-10 lg:px-6 lg:py-3 xl:px-10 xl:py-7">
                <p class="flex items-center gap-4 text-[clamp(0.7rem,0.75vw,0.9rem)] font-semibold tracking-[0.24em] text-accent uppercase">
                    Cook. Share. Inspire.
                </p>
                <h2 class="mt-3 font-display text-[clamp(2.8rem,6vw,3.8rem)] leading-[0.9] font-semibold tracking-[-0.035em] lg:mt-2 lg:text-[2rem] xl:mt-3 xl:text-[clamp(2.7rem,3.3vw,4rem)]">
                    Join Our Recipe Community
                </h2>
                <p class="mt-3 text-[0.95rem] leading-[1.5] text-white/90 lg:mt-2 lg:text-[0.82rem] lg:leading-[1.4] xl:mt-3 xl:text-[clamp(0.95rem,0.95vw,1.1rem)] xl:leading-[1.5]">
                    Share your own dishes, discover new ideas, and be part of a growing community that celebrates Nigerian cuisine.
                </p>
            </div>

            <div class="flex items-center justify-start px-6 pb-10 sm:px-10 lg:justify-center lg:px-6 lg:pb-0">
                <x-button-link :href="route('contact')" class="min-h-14 min-w-56 gap-4 px-8 text-[1.05rem]">
                    Share Your Recipe <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>
        </div>
    </section>

    <section class="grid bg-[#fbf8f1] lg:min-h-[20rem] lg:grid-cols-[57%_43%] lg:items-stretch xl:min-h-[30rem]">
        <figure class="relative isolate min-h-[380px] overflow-hidden bg-forest text-white sm:min-h-[480px] lg:min-h-[20rem] xl:min-h-[30rem]">
            <img
                src="{{ asset('images/story/quality-ground-crayfish.webp') }}"
                alt="Ground Oron crayfish piled in a rustic wooden bowl"
                width="1672"
                height="941"
                loading="lazy"
                class="absolute inset-0 size-full object-cover object-center"
            >
        </figure>

        <div class="relative isolate flex items-center overflow-hidden px-6 py-14 sm:px-12 lg:px-[clamp(2.5rem,4vw,5rem)] lg:py-5 xl:py-12">
            <img src="{{ asset('images/home/crayfish-line-art.svg') }}" alt="" class="absolute -right-14 top-8 -z-10 h-[clamp(15rem,23vw,24rem)] w-auto opacity-[0.09]" aria-hidden="true">
            <div class="max-w-[39rem]">
                <p class="flex items-center gap-4 text-[clamp(0.72rem,0.8vw,0.95rem)] font-semibold tracking-[0.27em] text-accent uppercase">
                    A Taste of Nigeria
                </p>
                <h2 class="mt-4 font-display text-[clamp(3rem,7vw,4.2rem)] leading-[0.87] font-semibold tracking-[-0.04em] text-black lg:text-[2.7rem] xl:text-[clamp(3rem,4vw,4.7rem)]">
                    From Our Waters<br>
                    to Your Table
                </h2>
                <p class="mt-5 text-[0.98rem] leading-[1.55] text-[#35443e] lg:mt-3 lg:text-[0.9rem] xl:mt-5 xl:text-[clamp(1rem,1.05vw,1.18rem)]">
                    Krill Harvest Oron Crayfish adds rich flavor and depth to your favorite dishes, making every meal a little more special.
                </p>
                <x-button-link :href="route('products')" class="mt-6 min-h-14 min-w-48 gap-4 text-[1.05rem]">
                    Shop Now <span class="text-xl" aria-hidden="true">→</span>
                </x-button-link>
            </div>
        </div>
    </section>
@endsection
