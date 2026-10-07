@props([
    'align' => 'left',
    'eyebrow' => null,
])

<div {{ $attributes->class($align === 'center' ? 'text-center' : 'text-left') }}>
    @if ($eyebrow)
        <p class="text-xs font-semibold tracking-[0.18em] text-accent uppercase">{{ $eyebrow }}</p>
    @endif

    <h2 class="font-display text-[clamp(2.5rem,5vw,5rem)] leading-[0.95] font-medium tracking-[-0.025em] text-forest">
        {{ $slot }}
    </h2>

    @isset($description)
        <div class="text-base leading-7 text-muted">
            {{ $description }}
        </div>
    @endisset
</div>
