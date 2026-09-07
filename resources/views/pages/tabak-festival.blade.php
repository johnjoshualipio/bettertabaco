@php
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Tabak Festival"
    description="Learn how Tabaco City's Tabak Festival brings together street dancing, local craft, coastal traditions, and community culture through official city sources."
    :image="$images['festival']"
>
    <x-civic.page-hero
        title="A festival made of movement, craft, and community."
        description="The Tabak Festival is one of Tabaco City's clearest expressions of Tabaknon identity. This page keeps its history, activities, and source links together without turning a living tradition into a fixed slogan."
        :image="$images['festival']"
        image-alt="Community dancers celebrating the Tabak Festival in Tabaco City"
    >
        <div class="mt-8 flex flex-wrap gap-3">
            <x-civic.cta href="{{ config('civic.sources.tourism') }}" variant="green" :external="true">Visit official tourism</x-civic.cta>
            <x-civic.cta href="{{ route('history') }}" variant="outline">Read Tabaco's history</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="festival-overview-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="A celebration with a documented beginning." description="The official tourism page says the Tabak Festival began in 2002, the year after Tabaco became a city under Republic Act No. 9020." />
            </div>
            <div id="festival-overview-title" class="space-y-6 text-[0.92rem] leading-7 text-ink-soft">
                <p>According to the City Government, the festival is an annual celebration of everything Tabaknon. Its program has included street dancing, the Mutya ng Tabak and Tabakla pageants, cultural performances, a trade fair and exhibit, Karawat Bicolnon, Baile de Amor, and community races.</p>
                <p>The official tourism account describes the Padyak Race as a tribute to the city's everyday padyak drivers and the Sibidan Race as a tradition connected to Tabaco's coastal culture.</p>
                <a class="civic-text-link" href="{{ config('civic.sources.tourism') }}" target="_blank" rel="noreferrer noopener">Read the official festival overview <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="festival-elements-title">
        <div class="civic-container">
            <x-civic.section-heading title="What the festival brings together." description="These elements come from the city's official tourism description; schedules and specific activities can change between editions." />
            <div class="civic-source-grid" id="festival-elements-title">
                <x-civic.card title="Street dancing and performance" description="A public showcase of rhythm, movement, musicianship, and the creative work of Tabaco's communities." variant="source">
                    <span class="civic-source-label">Official tourism description</span>
                </x-civic.card>
                <x-civic.card title="Padyak and Sibidan races" description="Two community-centered events that connect the festival to everyday work, transport, and the city's coastal life." variant="source">
                    <span class="civic-source-label">Official tourism description</span>
                </x-civic.card>
                <x-civic.card title="Trade fair and exhibit" description="A space for local products, crafts, and cultural work to meet residents, visitors, and prospective partners." variant="source">
                    <span class="civic-source-label">Official tourism description</span>
                </x-civic.card>
            </div>
        </div>
    </section>

    <section class="civic-section" aria-labelledby="festival-context-title">
        <div class="civic-container civic-glance">
            <div>
                <x-civic.section-heading title="Why the name matters." description="Tabak is more than a festival label in the city's own cultural account." />
                <p id="festival-context-title" class="mt-6 max-w-xl text-[0.92rem] leading-7 text-ink-soft">The official history page connects the word tabak with the bolo and describes the bolo's place in Tabaco's craft identity. The city's business profile separately identifies handmade tabak and gunting cutlery as a local industry. Together, these sources explain why the festival's name is closely tied to workmanship, place, and local memory.</p>
            </div>
            <div class="civic-aside-note civic-aside-note--green">
                <div class="civic-rule" aria-hidden="true"></div>
                <h2>Planning a visit?</h2>
                <p>Use the official tourism page for current dates, programs, activities, and visitor information. BetterTabaco does not publish an unofficial schedule.</p>
                <x-civic.cta href="{{ config('civic.sources.tourism') }}" variant="green" :external="true">Open official tourism information</x-civic.cta>
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="festival-sources-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="References for this page." description="Open the original public sources for the festival, history, craft, and tourism office context." />
            </div>
            <div class="civic-link-stack" id="festival-sources-title">
                <a href="{{ config('civic.sources.tourism') }}" target="_blank" rel="noreferrer noopener"><span>Tabaco City official tourism page</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.about') }}" target="_blank" rel="noreferrer noopener"><span>Tabaco City official history</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.business_profile') }}" target="_blank" rel="noreferrer noopener"><span>Tabaco City official business profile</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.tourism_office_charter') }}" target="_blank" rel="noreferrer noopener"><span>City Tourism, Culture and the Arts Office charter</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>
</x-civic.layout>
