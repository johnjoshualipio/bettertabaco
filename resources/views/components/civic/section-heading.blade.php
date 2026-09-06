@props([
    'title',
    'description' => null,
    'level' => 'h2',
    'align' => 'left',
])

@php
    $alignmentClass = $align === 'center' ? 'mx-auto text-center' : '';
@endphp

<div {{ $attributes->merge(['class' => "civic-heading {$alignmentClass}"]) }}>
    <div class="civic-rule" aria-hidden="true"></div>
    <{{ $level }} class="civic-heading__title">{{ $title }}</{{ $level }}>
    @if ($description)
        <p class="civic-heading__description">{{ $description }}</p>
    @endif
</div>
