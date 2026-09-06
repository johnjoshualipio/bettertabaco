@php
    $services = config('civic.services');
    $onlineServices = config('civic.online_services');
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Services that matter most"
    description="Find practical guidance for common Tabaco City services, then follow the official Citizen’s Charter for current requirements and processing details."
    :image="$images['craft']"
>
    <x-civic.page-hero
        title="Services that matter most."
        description="Find information on requirements, procedures, fees, and offices for common city services. BetterTabaco helps you get to the right information, faster."
        :image="$images['craft']"
        image-alt="A local artisan shaping metalwork in a Tabaco City workshop"
    >
        <div class="mt-8">
            <x-civic.cta href="{{ config('civic.sources.charter') }}" variant="green" :external="true">Open the Citizen’s Charter</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section civic-section--services" aria-labelledby="service-list-title">
        <div class="civic-container civic-services-layout">
            <div>
                <x-civic.section-heading title="Start with what you need." description="These categories are a practical guide. Requirements, fees, and processing times belong to the official source linked from each service." />
                <div class="civic-service-list" id="service-list-title">
                    @foreach ($services as $service)
                        <x-civic.card
                            :title="$service['title']"
                            :description="$service['description']"
                            :href="config('civic.sources.charter')"
                            :number="str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT)"
                            variant="service"
                            :external="true"
                        >
                            <span class="civic-card__source">View official requirements <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></span>
                        </x-civic.card>
                    @endforeach
                </div>
                <p class="civic-source-note">BetterTabaco does not accept applications or payments. For current requirements and transactions, use the official Citizen’s Charter or the responsible city office.</p>
            </div>
            <x-civic.hotline-panel />
        </div>
    </section>

    <section class="civic-section civic-section--tint" aria-labelledby="online-services-title">
        <div class="civic-container">
            <x-civic.section-heading title="Official online services." description="Go directly to official government portals for online applications, policies, and public information." />
            <div class="civic-source-grid" id="online-services-title">
                @foreach ($onlineServices as $service)
                    <x-civic.card
                        :title="$service['title']"
                        :description="$service['description']"
                        :href="$service['href']"
                        :icon="$service['icon']"
                        :external="true"
                        variant="source"
                    >
                        <span class="civic-source-label">{{ $service['label'] }}</span>
                    </x-civic.card>
                @endforeach
            </div>
            <div class="civic-trust-callout">
                <x-civic.icon name="shield" class="size-10 shrink-0" />
                <div>
                    <h2>A trusted guide for a better Tabaco City.</h2>
                    <p>We organize public information and link directly to official government portals. We are an independent civic portal, not an official government website.</p>
                </div>
            </div>
        </div>
    </section>
</x-civic.layout>
