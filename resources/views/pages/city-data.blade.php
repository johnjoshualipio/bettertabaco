@php
    $facts = config('civic.facts');
    $profileFacts = config('civic.city_profile_facts');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="City data for Tabaco City"
    description="View source-attributed population, barangay, urban-rural, and city-classification facts for Tabaco City."
    :image="$images['hero']"
>
    <x-civic.page-hero
        title="The city, in clear numbers."
        description="A small set of source-attributed facts for residents, researchers, and anyone who wants a clearer picture of Tabaco City. Dates stay attached to the numbers."
        :image="$images['hero']"
        image-alt="Mayon Volcano and Tabaco City’s coastal harbor"
    />

    <section class="civic-section civic-section--tint" aria-labelledby="city-facts-title">
        <div class="civic-container">
            <x-civic.section-heading title="Tabaco City at a glance." description="Current population and classification data come from Philippine Statistics Authority sources; barangay counts come from the official city profile." />
            <div class="civic-stat-grid" id="city-facts-title">
                @foreach ($facts as $fact)
                    <article class="civic-stat">
                        <x-civic.icon :name="$fact['icon']" class="size-8 text-sea" />
                        <strong>{{ $fact['value'] }}</strong>
                        <h2>{{ $fact['label'] }}</h2>
                        <p>{{ $fact['note'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section" aria-labelledby="data-notes-title">
        <div class="civic-container civic-data-notes">
            <div>
                <x-civic.section-heading title="What the dates mean." description="Population values should be read with their census year. A newer count does not replace the record of an earlier census; it gives the city a more current reference point." />
            </div>
            <div class="civic-data-notes__list" id="data-notes-title">
                <div><strong>140,779</strong><span>2024 POPCEN · latest population used here</span></div>
                <div><strong>140,961</strong><span>2020 Census · historical comparison</span></div>
                <div><strong>47</strong><span>barangays · official city profile</span></div>
                <div><strong>21 / 26</strong><span>urban / rural barangays · official city profile</span></div>
                <div><strong>3rd class</strong><span>city classification · PSA PSGC listing</span></div>
            </div>
            <div class="civic-data-sources">
                <a href="{{ config('civic.sources.psa_population') }}" target="_blank" rel="noreferrer noopener">PSA 2024 Albay Census <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.psa_classification') }}" target="_blank" rel="noreferrer noopener">PSA PSGC city data <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">Tabaco City official profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="city-profile-facts-title">
        <div class="civic-container">
            <x-civic.section-heading title="The city behind the numbers." description="Population counts are only one way to understand Tabaco. The city charter and official profile add legal, geographic, and community context." />
            <div class="civic-stat-grid" id="city-profile-facts-title">
                @foreach ($profileFacts as $fact)
                    <article class="civic-stat">
                        <x-civic.icon :name="$fact['icon']" class="size-8 text-sea" />
                        <strong>{{ $fact['value'] }}</strong>
                        <h2>{{ $fact['label'] }}</h2>
                        <p>{{ $fact['note'] }}</p>
                        <a class="civic-text-link mt-auto pt-4" href="{{ config('civic.sources.' . $fact['source']) }}" target="_blank" rel="noreferrer noopener">Open source <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-civic.layout>
