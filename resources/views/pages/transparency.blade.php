@php
    $records = config('civic.transparency');
    $references = config('civic.transparency_references');
    $facts = config('civic.facts');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Public records and transparency"
    description="Browse a static guide to Tabaco City public records, then follow references to the original government sources."
    :image="$images['hero']"
>
    <x-civic.page-hero
        title="Public records, made easier to follow."
        description="This static guide summarizes Tabaco City budgets, procurement, projects, ordinances, and public documents. Use the references below to open original government sources and current records."
        :image="$images['hero']"
        image-alt="Mayon Volcano and the working harbor of Tabaco City"
    >
        <div class="mt-8">
            <x-civic.cta href="#records-title" variant="green">Browse public records</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="records-heading">
        <div class="civic-container">
            <x-civic.section-heading id="records-heading" title="Public records at a glance." description="These summaries are maintained here as static information. The References section links to original government pages for current notices and documents." />
            <div class="civic-record-grid" id="records-title">
                @foreach ($records as $record)
                    <x-civic.card
                        :title="$record['title']"
                        :description="$record['description']"
                        :icon="$record['icon']"
                        variant="source"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="glance-title">
        <div class="civic-container civic-glance">
            <div>
                <x-civic.section-heading title="Tabaco City at a glance." description="Key facts for a more informed and engaged community, with dates and sources kept visible." />
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

    <section class="civic-section" aria-labelledby="record-reading-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="How to use a public record." description="A link is only the beginning. The source, date, document type, and original context are what make a record useful." />
            </div>
            <div class="civic-link-stack" id="record-reading-title">
                <div><strong>1. Start with the original source</strong><span class="text-right text-sm font-normal text-ink-soft">Open the government page or document, not just a summary.</span></div>
                <div><strong>2. Keep the date attached</strong><span class="text-right text-sm font-normal text-ink-soft">Budgets, projects, ordinances, and contact details can change.</span></div>
                <div><strong>3. Read the document type</strong><span class="text-right text-sm font-normal text-ink-soft">A notice, award, ordinance, audit report, and form answer different questions.</span></div>
                <div><strong>4. Ask for the next source</strong><span class="text-right text-sm font-normal text-ink-soft">When a page points elsewhere, follow the chain to the record that supports the claim.</span></div>
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="transparency-sources-title">
        <div class="civic-container">
            <x-civic.section-heading title="References." description="The guide above is static. Use these external links for original government records and current information." />
            <div class="civic-inline-sources" id="transparency-sources-title">
                @foreach ($references as $reference)
                    <a href="{{ config('civic.sources.' . $reference['source']) }}" target="_blank" rel="noreferrer noopener">
                        {{ $reference['title'] }} <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" />
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-civic.layout>
