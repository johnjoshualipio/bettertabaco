@php
    $barangays = config('civic.barangays');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Barangays of Tabaco City"
    description="Browse the verified list of all 47 barangays of Tabaco City, including the official urban and rural breakdown."
    :image="$images['island']"
>
    <x-civic.page-hero
        title="One city, 47 barangays."
        description="Explore the communities that make up Tabaco City. This page lists verified names and official context while the BetterTabaco directory is being built."
        :image="$images['island']"
        image-alt="Green San Miguel Island surrounded by clear coastal water near Tabaco City"
    >
        <div class="mt-8">
            <x-civic.cta href="{{ config('civic.sources.profile') }}" variant="green" :external="true">Verify against the city profile</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="barangay-list-title">
        <div class="civic-container">
            <div class="civic-data-band">
                <div><strong>47</strong><span>total barangays</span></div>
                <div><strong>21</strong><span>urban barangays</span></div>
                <div><strong>26</strong><span>rural barangays</span></div>
                <div><strong>5</strong><span>rural barangays on San Miguel Island</span></div>
            </div>
            <div class="civic-split-heading">
                <x-civic.section-heading title="Barangay directory." description="Names are listed from the official Tabaco City profile. Profiles, officials, photos, and search are not maintained here yet." />
                <a href="{{ config('civic.sources.profile') }}" class="civic-text-link" target="_blank" rel="noreferrer noopener">Open the official profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
            <div class="civic-barangay-grid" id="barangay-list-title">
                @foreach ($barangays as $barangay)
                    <div class="civic-barangay-item"><span>{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span><strong>{{ $barangay }}</strong></div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-feature civic-feature--island">
        <div class="civic-feature__content">
            <div class="civic-rule civic-rule--light" aria-hidden="true"></div>
            <h2>San Miguel Island is part of the city story.</h2>
            <p>The official profile names Agñas, Hacienda, Sagurong, Rawis, and Visita among the rural barangays found on San Miguel Island. BetterTabaco will add more verified context as source material becomes available.</p>
            <x-civic.cta href="{{ route('city-data') }}" variant="outline" class="civic-cta--light-border">See city data</x-civic.cta>
        </div>
        <div class="civic-feature__image-wrap">
            <img src="{{ asset(ltrim($images['island'], '/')) }}" alt="San Miguel Island coastal landscape" width="1536" height="1024" loading="lazy" decoding="async">
        </div>
    </section>
</x-civic.layout>
