<?php

it('renders every public page with the shared civic shell', function () {
    foreach (['home', 'services', 'government', 'transparency', 'barangays', 'city-data', 'about', 'history', 'tabak-festival', 'contact'] as $route) {
        $response = $this->get(route($route));

        $response
            ->assertOk()
            ->assertSee('BetterTabaco', false)
            ->assertSee('Emergency hotlines', false)
            ->assertSee('is not the official website of the Tabaco City Government.', false)
            ->assertSee('Cost to the people of Tabaco City:', false)
            ->assertSee('₱0', false)
            ->assertSee('https://tabacocity.com.ph/', false)
            ->assertSee('target="_blank" rel="noreferrer noopener"', false);
    }
});

it('renders the home page with an honest directory state and source-backed facts', function () {
    $response = $this->get(route('home'));

    $response
        ->assertSee('Better information', false)
        ->assertSee('Tabaco City.', false)
        ->assertSee('Directory search is coming soon.', false)
        ->assertSee('Find a service', false)
        ->assertSee('Explore public records', false)
        ->assertSee('140,779', false)
        ->assertSee('2024 POPCEN · PSA', false)
        ->assertSee('47', false)
        ->assertSee('hero-mayon-coast-v2.png', false)
        ->assertSee('https://rsso05.psa.gov.ph/content/highlights-result-2024-census-population-popcen-province-albay', false);
});

it('renders supported services and verified hotline links', function () {
    $response = $this->get(route('services'));

    $response
        ->assertSee('Services that matter most.', false)
        ->assertSee('Business permits', false)
        ->assertSee('Civil registry records', false)
        ->assertSee('Building permits', false)
        ->assertSee('Real property tax', false)
        ->assertSee('Community tax certificate', false)
        ->assertSee('Health services', false)
        ->assertSee('Social welfare', false)
        ->assertSee('Employment services', false)
        ->assertSee('https://tabacocity.com.ph/citizens-charter/', false)
        ->assertSee('tel:+630525581602', false)
        ->assertSee('tel:+630524874432', false)
        ->assertSee('tel:+630527327527', false)
        ->assertSee('Last verified September 6, 2026.', false);
});

it('renders the transparency destinations and public data links', function () {
    $response = $this->get(route('transparency'));

    $response
        ->assertSee('Transparency, made easier to follow.', false)
        ->assertSee('Budget and finance', false)
        ->assertSee('Procurement', false)
        ->assertSee('Projects', false)
        ->assertSee('Ordinances', false)
        ->assertSee('Public documents', false)
        ->assertSee('https://tabacocity.com.ph/business/bids-and-awards/', false)
        ->assertSee('https://tabacocity.com.ph/announcements/ordinances/', false)
        ->assertSee('https://tabacocity.com.ph/online-reports/full-disclosure/', false)
        ->assertSee('https://tabacocity.com.ph/online-reports/downloadable-forms/', false)
        ->assertSee('Tabaco City at a glance.', false);
});

it('renders the verified barangay directory without invented profiles', function () {
    $response = $this->get(route('barangays'));

    foreach (config('civic.barangays') as $barangay) {
        $response->assertSee($barangay, false);
    }

    $response
        ->assertSee('One city, 47 barangays.', false)
        ->assertSee('21', false)
        ->assertSee('urban barangays', false)
        ->assertSee('26', false)
        ->assertSee('rural barangays', false)
        ->assertSee('Profiles, officials, photos, and search are not maintained here yet.', false)
        ->assertDontSee('View Profile', false);
});

it('renders dated city data and the about page source-backed stories', function () {
    $dataResponse = $this->get(route('city-data'));
    $aboutResponse = $this->get(route('about'));

    $dataResponse
        ->assertSee('140,779', false)
        ->assertSee('2024 POPCEN · latest population used here', false)
        ->assertSee('140,961', false)
        ->assertSee('47', false)
        ->assertSee('3rd class', false)
        ->assertSee('https://psa.gov.ph/classification/psgc/cities', false);

    $aboutResponse
        ->assertSee('About Tabaco City', false)
        ->assertSee('History', false)
        ->assertSee('Craftsmanship', false)
        ->assertSee('Coastal identity', false)
        ->assertSee('San Miguel Island', false)
        ->assertSee('Tabak Festival', false)
        ->assertSee('https://tabacocity.com.ph/tourism/', false);
});

it('renders source-backed history and Tabak Festival pages', function () {
    $historyResponse = $this->get(route('history'));
    $festivalResponse = $this->get(route('tabak-festival'));

    $historyResponse
        ->assertSee('A documented timeline.', false)
        ->assertSee('Bagiong Oguis', false)
        ->assertSee('Republic Act No. 9020', false)
        ->assertSee('https://lawphil.net/statutes/repacts/ra2001/ra_9020_2001.html', false);

    $festivalResponse
        ->assertSee('A celebration with a documented beginning.', false)
        ->assertSee('Padyak and Sibidan races', false)
        ->assertSee('Tabaco City official tourism page', false)
        ->assertSee('https://tabacocity.com.ph/tourism/', false);
});

it('does not expose starter copy, old kicker labels, or a fake search action', function () {
    $response = $this->get(route('home'));
    $body = $response->getContent();

    expect($body)
        ->not->toContain('Welcome to BetterTabaco.org')
        ->not->toContain('Laravel')
        ->not->toContain('01 / SERVICES')
        ->not->toContain('OUR HOME')
        ->not->toContain('ONLINE ACCESS')
        ->not->toContain('<form')
        ->not->toContain('action="/search"');
});
