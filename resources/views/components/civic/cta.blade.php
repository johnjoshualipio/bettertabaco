@props([
    'href',
    'variant' => 'primary',
    'external' => false,
])

@php
    $variantClass = match ($variant) {
        'outline' => 'civic-cta--outline',
        'green' => 'civic-cta--green',
        'light' => 'civic-cta--light',
        default => 'civic-cta--primary',
    };
@endphp

<a
    {{ $attributes->merge(['class' => "civic-cta {$variantClass}"]) }}
    href="{{ $href }}"
    @if ($external) target="_blank" rel="noreferrer noopener" @endif
>
    <span>{{ $slot }}</span>
    <x-civic.icon :name="$external ? 'arrow-up-right' : 'arrow-right'" class="size-5" />
</a>
