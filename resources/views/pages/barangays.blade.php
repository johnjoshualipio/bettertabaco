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
            <p class="civic-source-note">Names, urban-rural counts, and the San Miguel Island grouping are taken from the <a href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">official city profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>. The BetterTabaco list is an orientation aid, not a replacement for official barangay records.</p>
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

    <section class="civic-section civic-section--tint" aria-labelledby="barangay-context-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="A directory that should grow carefully." description="A barangay name is only the first layer of useful public information." />
            </div>
            <div id="barangay-context-title" class="space-y-6 text-[0.92rem] leading-7 text-ink-soft">
                <p>Future profiles can add public facilities, services, geography, population, and official contact channels when each item has a clear source and verification date.</p>
                <p>For now, use the city profile for the full political subdivision context and the official city website for current notices or public transactions.</p>
                <div class="flex flex-wrap gap-4">
                    <a class="civic-text-link" href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">Open the official profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                    <a class="civic-text-link" href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener">Open the city website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                </div>
            </div>
        </div>
    </section>
</x-civic.layout>
