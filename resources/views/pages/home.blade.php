@php
    $facts = config('civic.facts');
    $services = config('civic.services');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Better information for Tabaco City"
    description="An independent civic guide to city services, public records, emergency contacts, and official resources for Tabaco City, Albay."
    :image="$images['hero']"
>
    <section class="civic-hero">
        <img class="civic-hero__image" src="{{ asset(ltrim($images['hero'], '/')) }}" alt="Mayon Volcano beyond the working harbor and coastline of Tabaco City" width="1920" height="900" fetchpriority="high" decoding="async">
        <div class="civic-hero__veil" aria-hidden="true"></div>
        <div class="civic-container civic-hero__content">
            <div class="civic-hero__copy">
                <div class="civic-rule civic-rule--light" aria-hidden="true"></div>
                <h1 class="civic-hero__title">Better information<br>for <span>Tabaco City.</span></h1>
                <p class="civic-hero__description">Your independent guide to city services, public records, and local resources for a more informed, engaged, and empowered Tabaco City.</p>

                <div class="civic-search" role="search" aria-label="BetterTabaco directory search">
                    <x-civic.icon name="search" class="size-7 shrink-0" />
                    <label class="sr-only" for="directory-search">Search for services, offices, documents, or keywords</label>
                    <input id="directory-search" type="text" placeholder="Search for services, offices, documents, or keywords..." readonly aria-readonly="true" aria-describedby="directory-search-note">
                    <button type="button" disabled aria-disabled="true">Search</button>
                </div>
                <p id="directory-search-note" class="civic-search__note">Directory search is coming soon. For now, browse the service guide or follow an official source.</p>

                <div class="civic-hero__actions">
                    <x-civic.cta href="{{ route('services') }}" variant="primary" class="civic-cta--hero">Find a service</x-civic.cta>
                    <x-civic.cta href="{{ route('transparency') }}" variant="outline" class="civic-cta--hero-outline">Explore public records</x-civic.cta>
                </div>
            </div>
        </div>
        <div class="civic-container civic-hero__facts" aria-label="Key facts about Tabaco City">
            @foreach ($facts as $fact)
                <div class="civic-hero-fact">
                    <span class="civic-hero-fact__icon"><x-civic.icon :name="$fact['icon']" class="size-7" /></span>
                    <span>
                        <strong>{{ $fact['value'] }}</strong>
                        <span>{{ $fact['label'] }}</span>
                        <small>{{ $fact['note'] }}</small>
                    </span>
                </div>
            @endforeach
        </div>
    </section>

    <div class="civic-container civic-container--notice">
        <x-civic.independence />
    </div>

    <section class="civic-section civic-section--quick" aria-labelledby="quick-access-title">
        <div class="civic-container">
            <div class="civic-section-intro civic-section-intro--wide">
                <x-civic.section-heading
                    title="City information, within reach."
                    description="Essential services, government information, public records, and local resources gathered in one place for a more transparent and connected Tabaco City."
                />
            </div>
            <div class="civic-quick-grid">
                <a href="{{ route('services') }}" class="civic-quick-link">
                    <x-civic.icon name="document" class="size-8" />
                    <span><strong>City services</strong><small>Find requirements, procedures, and office information.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
                <a href="{{ route('government') }}" class="civic-quick-link">
                    <x-civic.icon name="bank" class="size-8" />
                    <span><strong>Government</strong><small>Learn about city offices, programs, and issuances.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
                <a href="{{ route('transparency') }}" class="civic-quick-link">
                    <x-civic.icon name="database" class="size-8" />
                    <span><strong>Transparency</strong><small>Access budgets, procurement, and public records.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
                <a href="{{ route('barangays') }}" class="civic-quick-link">
                    <x-civic.icon name="people" class="size-8" />
                    <span><strong>Barangays</strong><small>Explore verified information for all 47 barangays.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
                <a href="{{ route('city-data') }}" class="civic-quick-link">
                    <x-civic.icon name="database" class="size-8" />
                    <span><strong>City data</strong><small>View population, classification, and civic facts.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
                <a href="{{ route('about') }}" class="civic-quick-link">
                    <x-civic.icon name="pin" class="size-8" />
                    <span><strong>About Tabaco City</strong><small>Discover history, people, places, and culture.</small></span>
                    <x-civic.icon name="arrow-right" class="civic-quick-link__arrow size-5" />
                </a>
            </div>
        </div>
    </section>

    <section class="civic-feature civic-feature--festival" aria-labelledby="festival-title">
        <div class="civic-feature__image-wrap">
            <img src="{{ asset(ltrim($images['festival'], '/')) }}" alt="Community dancers celebrating Tabak Festival in Tabaco City" width="1536" height="1024" loading="lazy" decoding="async">
        </div>
        <div class="civic-feature__content">
            <div class="civic-rule civic-rule--light" aria-hidden="true"></div>
            <h2 id="festival-title">Tabak <span>Festival</span></h2>
            <p>More than a celebration, the Tabak Festival is an expression of Tabaknon identity, honoring community, craftsmanship, resilience, and living culture.</p>
            <x-civic.cta href="{{ route('about') }}#tabak-festival" variant="outline" class="civic-cta--light-border">Learn about Tabak Festival</x-civic.cta>
        </div>
    </section>

    <section class="civic-section civic-section--closing" aria-labelledby="closing-title">
        <div class="civic-container civic-closing">
            <div>
                <x-civic.section-heading title="A clearer, more connected Tabaco City." description="BetterTabaco is a starting point: understand the information, then go directly to the official source or office that can help." />
            </div>
            <x-civic.cta href="{{ route('contact') }}#contribute" variant="green">Help keep this guide useful</x-civic.cta>
        </div>
    </section>
</x-civic.layout>
