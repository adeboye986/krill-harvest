@props(['href'])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'inline-flex min-h-12 items-center justify-center rounded-full bg-accent px-7 text-sm font-semibold text-white transition-colors hover:bg-forest',
    ]) }}
>
    {{ $slot }}
</a>
