@props([
    'title',
    'description',
    'image' => null,
    'imageAlt' => '',
])

<section {{ $attributes->merge(['class' => 'civic-page-hero']) }}>
    <div class="civic-container grid items-center gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">
        <div class="max-w-2xl">
            <div class="civic-rule" aria-hidden="true"></div>
            <h1 class="civic-page-hero__title">{{ $title }}</h1>
            <p class="civic-page-hero__description">{{ $description }}</p>
            {{ $slot }}
        </div>
        @if ($image)
            <figure class="civic-page-hero__media">
                <img src="{{ asset(ltrim($image, '/')) }}" alt="{{ $imageAlt }}" width="1536" height="1024" loading="eager" decoding="async">
            </figure>
        @endif
    </div>
</section>
