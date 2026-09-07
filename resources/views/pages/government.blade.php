@php
    $offices = config('civic.offices');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Government offices and information"
    description="Find a starting point for Tabaco City offices and follow the official directory for complete office details."
    :image="$images['history']"
>
    <x-civic.page-hero
        title="Find the right city office."
        description="Government information is easier to use when the starting point is clear. Use these verified office categories, then confirm current details in the official directory."
        :image="$images['history']"
        image-alt="Historic church and civic street in Tabaco City"
    >
        <div class="mt-8 flex flex-wrap gap-3">
            <x-civic.cta href="{{ config('civic.sources.offices') }}" variant="green" :external="true">Open the office directory</x-civic.cta>
            <x-civic.cta href="{{ config('civic.sources.officials') }}" variant="outline" :external="true">View city officials</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="government-list-title">
        <div class="civic-container civic-government-layout">
            <div>
                <x-civic.section-heading title="Where to begin." description="These office categories reflect the services and emergency information published by official Tabaco City sources." />
                <div class="civic-office-list" id="government-list-title">
                    @foreach ($offices as $office)
                        <x-civic.card
                            :title="$office['title']"
                            :description="$office['description']"
                            :href="config('civic.sources.offices')"
                            :icon="$office['icon']"
                            :external="true"
                            variant="service"
                        >
                            <span class="civic-card__source">Confirm office details <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></span>
                        </x-civic.card>
                    @endforeach
                </div>
            </div>
            <aside class="civic-aside-note">
                <div class="civic-rule" aria-hidden="true"></div>
                <h2>The official directory is the source of truth.</h2>
                <p>Office heads, locations, contact details, and organizational information can change. BetterTabaco keeps this page at the category level and sends you to the City Government’s directory for the complete record.</p>
                <x-civic.cta href="{{ config('civic.sources.offices') }}" variant="green" :external="true">Check official office details</x-civic.cta>
            </aside>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="government-records-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="Government information, with context." description="The official city website also publishes city officials, ordinances, forms, reports, and announcements." />
            </div>
            <div class="civic-link-stack" id="government-records-title">
                <a href="{{ config('civic.sources.officials') }}" target="_blank" rel="noreferrer noopener"><span>Directory of City Officials</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.forms') }}" target="_blank" rel="noreferrer noopener"><span>Downloadable Forms</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener"><span>Official city announcements</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section" aria-labelledby="city-government-context-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="A city government with a public charter." description="Republic Act No. 9020 describes the offices, powers, and responsibilities that make up the City of Tabaco as a component city." />
            </div>
            <div id="city-government-context-title" class="space-y-6 text-[0.92rem] leading-7 text-ink-soft">
                <p>The charter names core city offices such as the mayor, vice mayor, Sangguniang Panlungsod, treasurer, assessor, accountant, budget, planning, engineering, health, civil registrar, social welfare, agriculture, environment, and general services.</p>
                <p>That legal structure is useful context, but it is not a substitute for the current directory. Office names, heads, locations, and contact details should always be checked against the official city source.</p>
                <a class="civic-text-link" href="{{ config('civic.sources.cityhood') }}" target="_blank" rel="noreferrer noopener">Read Republic Act No. 9020 on Lawphil <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>
</x-civic.layout>
