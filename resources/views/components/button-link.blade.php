@props(['href'])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'inline-flex min-h-[3.25rem] items-center justify-center rounded-full bg-accent px-8 text-[0.95rem] font-semibold text-white transition-colors hover:bg-forest',
    ]) }}
>
    {{ $slot }}
</a>
