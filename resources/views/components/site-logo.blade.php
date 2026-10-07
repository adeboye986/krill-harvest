<a
    href="{{ route('home') }}"
    {{ $attributes->merge(['class' => 'inline-flex items-center']) }}
>
    <span class="relative block h-16 aspect-[1484/1060] xl:h-[4.5rem]">
        <img
            src="{{ asset('images/brand/krill-harvest-logo-light.png') }}"
            alt="Krill Harvest"
            width="1484"
            height="1060"
            class="size-full object-contain"
        >
        <span class="site-logo__navy-wordmark absolute inset-0" aria-hidden="true"></span>
    </span>
</a>
