@php
    $records = config('civic.transparency');
    $facts = config('civic.facts');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Transparency and open information"
    description="Find official Tabaco City sources for budgets, procurement, projects, ordinances, forms, and public records."
    :image="$images['hero']"
>
    <x-civic.page-hero
        title="Transparency, made easier to follow."
        description="Explore Tabaco City’s finances, projects, ordinances, and public records through direct links to official sources. More open information makes for a more informed community."
        :image="$images['hero']"
        image-alt="Mayon Volcano and the working harbor of Tabaco City"
    >
        <div class="mt-8">
            <x-civic.cta href="{{ config('civic.sources.disclosure') }}" variant="green" :external="true">Open Full Disclosure</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="records-title">
        <div class="civic-container">
            <x-civic.section-heading title="Follow the public record." description="Each destination below opens an official Tabaco City page. BetterTabaco explains the doorway; the government source holds the document or update." />
            <div class="civic-record-grid" id="records-title">
                @foreach ($records as $record)
                    <x-civic.card
                        :title="$record['title']"
                        :description="$record['description']"
                        :href="$record['href']"
                        :icon="$record['icon']"
                        :external="true"
                        variant="source"
                    />
                @endforeach
            </div>
            <div class="civic-inline-sources">
                <a href="{{ config('civic.sources.disclosure') }}" target="_blank" rel="noreferrer noopener">Full Disclosure <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.forms') }}" target="_blank" rel="noreferrer noopener">Downloadable Forms <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener">Official city website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="glance-title">
        <div class="civic-container civic-glance">
            <div>
                <x-civic.section-heading title="Tabaco City at a glance." description="Key facts for a more informed and engaged community, with dates and sources kept visible." />
                <div class="civic-glance__links">
                    <a href="{{ config('civic.sources.psa_population') }}" target="_blank" rel="noreferrer noopener">PSA 2024 population source <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                    <a href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">Official city profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                </div>
            </div>
            <div class="civic-glance__facts" id="glance-title">
                @foreach ($facts as $fact)
                    <div class="civic-glance__fact">
                        <x-civic.icon :name="$fact['icon']" class="size-7 text-sea" />
                        <strong>{{ $fact['value'] }}</strong>
                        <span>{{ $fact['label'] }}</span>
                        <small>{{ $fact['note'] }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-civic.layout>
