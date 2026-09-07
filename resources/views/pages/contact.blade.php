@php
    $images = config('civic.images');
@endphp

<x-civic.layout
    title="Contact and emergency hotlines"
    description="Find verified Tabaco City hotlines, the official Contact Us page, and ways to help improve the independent BetterTabaco guide."
    :image="$images['island']"
>
    <x-civic.page-hero
        title="Keep the right numbers close."
        description="Call the appropriate office directly. On a mobile device, tap a number to place a call. For official contact details and updates, continue to the City Government’s contact page."
        :image="$images['island']"
        image-alt="A small green island and local boat in the coastal waters near Tabaco City"
    >
        <div class="mt-8">
            <x-civic.cta href="{{ config('civic.sources.contact') }}" variant="green" :external="true">Open official Contact Us</x-civic.cta>
        </div>
    </x-civic.page-hero>

    <section class="civic-section" aria-labelledby="contact-hotlines-title">
        <div class="civic-container civic-contact-layout">
            <div>
                <x-civic.section-heading title="Verified city hotlines." description="Numbers below are transcribed from the official Tabaco City website and were last checked on September 6, 2026." />
                <div class="civic-contact-list" id="contact-hotlines-title">
                    @foreach (config('civic.hotlines') as $hotline)
                        <a href="tel:{{ $hotline['tel'] }}" class="civic-contact-row"><span><strong>{{ $hotline['name'] }}</strong><small>{{ $hotline['display'] }}</small></span><span class="civic-contact-row__icon" aria-hidden="true"><x-civic.icon name="phone" class="size-4" /></span></a>
                    @endforeach
                </div>
                <p class="civic-source-note">Verify numbers and current office information against the <a href="{{ config('civic.sources.contact') }}" target="_blank" rel="noreferrer noopener">official Contact Us page <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a> before relying on them.</p>
            </div>
            <aside class="civic-aside-note civic-aside-note--green">
                <div class="civic-rule" aria-hidden="true"></div>
                <h2>For official transactions, go to the source.</h2>
                <p>BetterTabaco does not receive applications, payments, complaints, or emergency reports. Use the official city website for current channels and instructions.</p>
                <x-civic.cta href="{{ config('civic.sources.contact') }}" variant="green" :external="true">Visit official Contact Us</x-civic.cta>
            </aside>
        </div>
    </section>

    <section id="contribute" class="civic-section civic-section--tint scroll-mt-24" aria-labelledby="contribute-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="Help keep the guide accurate." description="If you spot an outdated link or have an official source we should include, a correction helps future readers." />
            </div>
            <div class="civic-link-stack" id="contribute-title">
                <a href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener"><span>Check the official city website first</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.contact') }}" target="_blank" rel="noreferrer noopener"><span>Use official contact channels</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.bettergov') }}" target="_blank" rel="noreferrer noopener"><span>Explore BetterGov.ph</span><x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </div>
        </div>
    </section>

    <section class="civic-section" aria-labelledby="contact-next-step-title">
        <div class="civic-container civic-split-copy">
            <div>
                <x-civic.section-heading title="A simple next-step guide." description="The fastest way to get help is to match the question to the office that owns the answer." />
            </div>
            <div class="civic-link-stack" id="contact-next-step-title">
                <div><strong>Emergency or immediate danger</strong><span class="text-right text-sm font-normal text-ink-soft">Call the appropriate verified hotline above.</span></div>
                <div><strong>City transaction or application</strong><span class="text-right text-sm font-normal text-ink-soft">Use the official city website, Citizen's Charter, or responsible office.</span></div>
                <div><strong>Outdated information on this guide</strong><span class="text-right text-sm font-normal text-ink-soft">Check the official source, then send a correction through the project channels.</span></div>
            </div>
        </div>
    </section>
</x-civic.layout>
