@php
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="History of Tabaco City"
    description="A source-backed history of Tabaco City, from its recorded beginnings and cityhood to the legends and craft traditions that continue to shape local identity."
    :image="$images['history']"
>
    <x-civic.page-hero
        title="A history with more than one voice."
        description="Read the documented record of Tabaco City alongside the stories and traditions that communities continue to tell. BetterTabaco labels the difference so local history stays both useful and honest."
        :image="$images['history']"
        image-alt="Historic church and civic street in Tabaco City"
    >
        <div class="mt-8 flex flex-wrap gap-3">
            <x-civic.cta href="{{ config('civic.sources.about') }}" variant="green" :external="true">Read the official history</x-civic.cta>
            <x-civic.cta href="{{ route('tabak-festival') }}" variant="outline">Explore Tabak Festival</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="history-timeline-title">
        <div class="civic-container">
            <x-civic.section-heading
                title="A documented timeline."
                description="These milestones are drawn from the City Government's official history page and Republic Act No. 9020, the charter that converted Tabaco into a component city."
            />
            <div class="civic-timeline" id="history-timeline-title">
                <article class="civic-timeline__item">
                    <span class="civic-timeline__year">1587</span>
                    <div>
                        <h2>Recorded history begins</h2>
                        <p>The official city history places the beginning of Tabaco's recorded history in 1587, when Franciscan missionaries began converting inhabitants of Cagsawa to Catholicism.</p>
                    </div>
                </article>
                <article class="civic-timeline__item">
                    <span class="civic-timeline__year">1616</span>
                    <div>
                        <h2>A permanent ministry and parish church</h2>
                        <p>The city's account identifies Rev. Fr. Pedro de Alcareso as Tabaco's first permanent minister and describes the stone church dedicated to St. John the Baptist.</p>
                    </div>
                </article>
                <article class="civic-timeline__item">
                    <span class="civic-timeline__year">1811</span>
                    <div>
                        <h2>Bagiong Oguis</h2>
                        <p>The official history records a powerful typhoon that devastated the town and gave it the nickname Bagiong Oguis, or “white typhoon.”</p>
                    </div>
                </article>
                <article class="civic-timeline__item">
                    <span class="civic-timeline__year">2001</span>
                    <div>
                        <h2>Tabaco becomes a component city</h2>
                        <p>Republic Act No. 9020, approved on March 5, 2001, converted the Municipality of Tabaco into the City of Tabaco and set out its charter and territorial jurisdiction.</p>
                    </div>
                </article>
            </div>
            <p class="civic-source-note">Sources: <a href="{{ config('civic.sources.about') }}" target="_blank" rel="noreferrer noopener">Tabaco City official history <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a> and <a href="{{ config('civic.sources.cityhood') }}" target="_blank" rel="noreferrer noopener">Republic Act No. 9020 on Lawphil <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>.</p>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="name-story-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="The name of Tabaco: record and legend." description="A local story can matter without being presented as proven etymology." />
            </div>
            <div id="name-story-title" class="space-y-6 text-[0.92rem] leading-7 text-ink-soft">
                <p>The City Government's history page shares a popular legend in which the words “Tabak ko!”—“my bolo”—were misunderstood by Spanish visitors and became the city's name.</p>
                <p>That account is presented here as oral tradition and local folklore. It is part of how Tabaco explains its identity, but it is not treated as a conclusive historical proof of the name's origin.</p>
                <a class="civic-text-link" href="{{ config('civic.sources.about') }}" target="_blank" rel="noreferrer noopener">Read the source and its other versions of the story <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section" aria-labelledby="place-and-practice-title">
        <div class="civic-container">
            <x-civic.section-heading
                title="Place, craft, and working life."
                description="Official city background materials describe Tabaco through both its geography and the skills of its people."
            />
            <div class="civic-source-grid" id="place-and-practice-title">
                <x-civic.card title="Blacksmithing and cutlery" description="The city's business profile identifies blacksmiths and the handmade tabak and gunting cutlery tradition among Tabaco's skilled industries." :href="config('civic.sources.business_profile')" :external="true" variant="source">
                    <span class="civic-source-label">Official business profile</span>
                </x-civic.card>
                <x-civic.card title="Coast and island" description="Tabaco's official profile describes a city of 47 barangays, including five rural barangays on San Miguel Island and a wider coastal setting." :href="config('civic.sources.profile')" :external="true" variant="source">
                    <span class="civic-source-label">Official city profile</span>
                </x-civic.card>
                <x-civic.card title="A city shaped by work" description="The official business profile also names agriculture, fishery, manufacturing, shipbuilding, and tourism among the city's economic and skills context." :href="config('civic.sources.business_profile')" :external="true" variant="source">
                    <span class="civic-source-label">Official business profile</span>
                </x-civic.card>
            </div>
        </div>
    </section>
</x-civic.layout>
