@props([
    'title',
    'description' => null,
    'href' => null,
    'icon' => null,
    'number' => null,
    'external' => false,
    'variant' => 'default',
])

@php
    $element = $href ? 'a' : 'article';
    $cardClass = match ($variant) {
        'source' => 'civic-card civic-card--source',
        'service' => 'civic-card civic-card--service',
        'feature' => 'civic-card civic-card--feature',
        default => 'civic-card',
    };
@endphp

<{{ $element }}
    @if ($href) href="{{ $href }}" @endif
    {{ $attributes->merge(['class' => $cardClass]) }}
    @if ($external) target="_blank" rel="noreferrer noopener" @endif
>
    <div class="flex items-start justify-between gap-4">
        <div class="flex min-w-0 items-start gap-4">
            @if ($number)
                <span class="civic-card__number" aria-hidden="true">{{ $number }}</span>
            @elseif ($icon)
                <span class="civic-card__icon"><x-civic.icon :name="$icon" class="size-6" /></span>
            @endif
            <div class="min-w-0">
                <h3 class="civic-card__title">{{ $title }}</h3>
                @if ($description)
                    <p class="civic-card__description">{{ $description }}</p>
                @endif
                {{ $slot }}
            </div>
        </div>
        @if ($href)
            <x-civic.icon :name="$external ? 'arrow-up-right' : 'arrow-right'" class="civic-card__arrow size-5" />
        @endif
    </div>
</{{ $element }}>
