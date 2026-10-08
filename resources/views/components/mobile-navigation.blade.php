@props([
    'cartQuantity' => 0,
    'navigation' => [],
])

<details class="group lg:hidden">
    <summary
        class="flex size-12 cursor-pointer list-none items-center justify-center text-forest [&::-webkit-details-marker]:hidden"
        aria-label="Toggle navigation"
    >
        <svg class="size-6 group-open:hidden" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
        </svg>
        <svg class="hidden size-6 group-open:block" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
        </svg>
    </summary>

    <div class="fixed inset-x-0 top-20 z-50 max-h-[calc(100svh-5rem)] overflow-y-auto border-t border-line bg-surface shadow-lg">
        <nav class="mx-auto flex w-full max-w-site flex-col px-5 py-4 sm:px-8" aria-label="Mobile navigation">
            @foreach ($navigation as $item)
                <x-nav-link
                    :href="$item['route'] ? route($item['route']) : ($item['href'] ?? null)"
                    :active="$item['route'] && request()->routeIs($item['route'])"
                    mobile
                >
                    {{ $item['label'] }}
                </x-nav-link>
            @endforeach

            <div class="flex items-center gap-5 pt-6">
                {{-- Search and cart are temporarily hidden until their functionality is implemented.
                <button type="button" class="inline-flex size-12 items-center justify-center border border-line" aria-label="Search">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.7" />
                        <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                    </svg>
                </button>

                <a href="{{ route('products') }}" class="relative inline-flex size-12 items-center justify-center border border-line" aria-label="Shopping cart with {{ $cartQuantity }} items">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3.5 5h2l1.6 9.1a2 2 0 0 0 2 1.7h7.8a2 2 0 0 0 2-1.6L20 8H6.1" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="9.5" cy="19" r="1" fill="currentColor" />
                        <circle cx="17" cy="19" r="1" fill="currentColor" />
                    </svg>
                    <span class="absolute -top-1 -right-1 inline-flex size-5 items-center justify-center rounded-full bg-accent text-[0.65rem] font-semibold text-white">
                        {{ $cartQuantity }}
                    </span>
                </a>
                --}}

                <x-button-link :href="route('products')" class="grow">Shop Now</x-button-link>
            </div>
        </nav>
    </div>
</details>
