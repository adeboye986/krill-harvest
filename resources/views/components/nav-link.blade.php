@props([
    'active' => false,
    'href' => null,
    'mobile' => false,
])

@php
    $classes = $mobile
        ? 'flex min-h-12 items-center border-b border-line px-1 text-base font-medium transition-colors'
        : 'inline-flex min-h-10 items-center border-b text-[0.82rem] font-medium tracking-[0.01em] transition-colors xl:min-h-12 xl:text-[clamp(0.9rem,0.85vw,1rem)]';

    $stateClasses = $active
        ? 'border-accent text-forest'
        : 'border-transparent text-forest hover:text-accent';
@endphp

@if ($href)
    <a
        href="{{ $href }}"
        @if ($active) aria-current="page" @endif
        {{ $attributes->merge(['class' => $classes.' '.$stateClasses]) }}
    >
        {{ $slot }}
    </a>
@else
    <span
        aria-disabled="true"
        {{ $attributes->merge(['class' => $classes.' cursor-default border-transparent text-forest']) }}
    >
        {{ $slot }}
    </span>
@endif
