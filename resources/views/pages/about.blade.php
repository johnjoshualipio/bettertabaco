@php
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="About Tabaco City"
    description="Learn about Tabaco City’s history, culture, craftsmanship, coastal communities, and Tabak Festival through official background sources."
    :image="$images['history']"
>
    <x-civic.page-hero
        title="A city shaped by coast, craft, and community."
        description="Tabaco City carries a rich history, a working coastline, enduring local industries, and a culture shaped by Tabaknon people and communities."
        :image="$images['history']"
        image-alt="Historic heritage church and civic street in Tabaco City"
    >
        <div class="mt-8 flex flex-wrap gap-3">
            <x-civic.cta href="{{ config('civic.sources.about') }}" variant="green" :external="true">Read the official background</x-civic.cta>
            <x-civic.cta href="{{ config('civic.sources.tourism') }}" variant="outline" :external="true">Explore official tourism</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="about-the-city-title">
        <div class="civic-container">
            <x-civic.section-heading title="The places and practices that make Tabaco City." description="These short introductions point to documented parts of the city story. Follow the official sources for fuller historical and cultural context." />
            <div class="civic-story-grid" id="about-the-city-title">
                <article class="civic-story-card civic-story-card--wide">
                    <img src="{{ asset(ltrim($images['history'], '/')) }}" alt="Historic church and civic street in Tabaco City" width="1536" height="1024" loading="lazy" decoding="async">
                    <div><h2>History</h2><p>Tabaco City’s official history traces the community from its early settlement and church history through the events that shaped the city and Albay.</p><a href="{{ config('civic.sources.about') }}" target="_blank" rel="noreferrer noopener">Read the official history <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a></div>
                </article>
                <article class="civic-story-card">
                    <img src="{{ asset(ltrim($images['craft'], '/')) }}" alt="Artisan shaping metalwork in a Tabaco City workshop" width="1536" height="1024" loading="lazy" decoding="async">
                    <div><h2>Craftsmanship</h2><p>Woodcraft, cutlery and metalcraft, rattan, ceramics, weaving, and ship repair remain part of the city’s documented local industries.</p><a href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">See the official profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a></div>
                </article>
                <article class="civic-story-card">
                    <img src="{{ asset(ltrim($images['island'], '/')) }}" alt="San Miguel Island surrounded by clear coastal water" width="1536" height="1024" loading="lazy" decoding="async">
                    <div><h2>Coastal identity</h2><p>Fishing communities on the mainland and San Miguel Island connect Tabaco City’s daily life to the sea.</p><a href="{{ config('civic.sources.profile') }}" target="_blank" rel="noreferrer noopener">Learn about the city’s profile <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a></div>
                </article>
            </div>
        </div>
    </section>

    <section id="tabak-festival" class="civic-feature civic-feature--festival civic-feature--about scroll-mt-24" aria-labelledby="about-festival-title">
        <div class="civic-feature__image-wrap">
            <img src="{{ asset(ltrim($images['festival'], '/')) }}" alt="Community dancers celebrating the Tabak Festival" width="1536" height="1024" loading="lazy" decoding="async">
        </div>
        <div class="civic-feature__content">
            <div class="civic-rule civic-rule--light" aria-hidden="true"></div>
            <h2 id="about-festival-title">Tabak <span>Festival</span></h2>
            <p>The Tabak Festival began in 2002 and celebrates Tabaknon identity through street dancing, cultural performances, trade fairs, and coastal traditions such as the Sibidan race.</p>
            <x-civic.cta href="{{ config('civic.sources.tourism') }}" variant="outline" class="civic-cta--light-border" :external="true">Visit the official tourism page</x-civic.cta>
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="how-it-works-title">
        <div class="civic-container civic-how-it-works">
            <div>
                <x-civic.section-heading title="How BetterTabaco works." description="A civic portal is useful when it makes the next step clear and stays honest about who owns the information." />
            </div>
            <div class="civic-how-it-works__steps" id="how-it-works-title">
                <div><span>1</span><h2>Find information</h2><p>Start with plain-language guidance for services, offices, records, and city facts.</p></div>
                <div><span>2</span><h2>Follow official links</h2><p>Go directly to the city government, PSA, or other official source that owns the record.</p></div>
                <div><span>3</span><h2>Stay informed</h2><p>Use public information to ask better questions and take part in a stronger Tabaco City community.</p></div>
            </div>
        </div>
    </section>
</x-civic.layout>
