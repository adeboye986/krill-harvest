@props(['cartQuantity' => 0])

@php
    $navigation = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Our Story', 'route' => 'our-story'],
        ['label' => 'Products', 'route' => 'products'],
        ['label' => 'Recipes', 'route' => 'recipes'],
        ['label' => 'Sustainability', 'route' => null, 'href' => route('home').'#sustainability'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header {{ $attributes->merge(['class' => 'relative z-40 border-b border-line/70 bg-surface']) }}>
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-8 xl:px-20">
        <div class="flex h-20 items-center justify-between lg:hidden">
            <x-site-logo />
            <x-mobile-navigation :navigation="$navigation" :cart-quantity="$cartQuantity" />
        </div>

        <div class="hidden h-24 grid-cols-[1fr_auto_1fr] items-center gap-4 lg:grid xl:gap-9">
            <x-site-logo class="justify-self-start" />

            <nav class="flex items-center gap-4 xl:gap-9" aria-label="Primary navigation">
                @foreach ($navigation as $item)
                    <x-nav-link
                        :href="$item['route'] ? route($item['route']) : ($item['href'] ?? null)"
                        :active="$item['route'] && request()->routeIs($item['route'])"
                    >
                        {{ $item['label'] }}
                    </x-nav-link>
                @endforeach
            </nav>

            <div class="flex items-center justify-self-end gap-2 xl:gap-6">
                <button type="button" class="inline-flex size-10 items-center justify-center text-forest transition-colors hover:text-accent xl:size-12" aria-label="Search">
                    <svg class="size-5 xl:size-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.7" />
                        <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                    </svg>
                </button>

                <a href="{{ route('products') }}" class="relative inline-flex size-10 items-center justify-center text-forest transition-colors hover:text-accent xl:size-12" aria-label="Shopping cart with {{ $cartQuantity }} items">
                    <svg class="size-5 xl:size-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3.5 5h2l1.6 9.1a2 2 0 0 0 2 1.7h7.8a2 2 0 0 0 2-1.6L20 8H6.1" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="9.5" cy="19" r="1" fill="currentColor" />
                        <circle cx="17" cy="19" r="1" fill="currentColor" />
                    </svg>
                    <span class="absolute top-0 right-0 inline-flex size-4 items-center justify-center rounded-full bg-accent text-[0.6rem] font-semibold text-white xl:size-5 xl:text-[0.68rem]">
                        {{ $cartQuantity }}
                    </span>
                </a>

                <x-button-link :href="route('products')" class="min-h-12 px-7 text-sm whitespace-nowrap xl:min-h-14 xl:px-9 xl:text-base">Shop Now</x-button-link>
            </div>
        </div>
    </div>
</header>
