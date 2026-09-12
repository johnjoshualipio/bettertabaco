<?php

it('renders the BetterTabaco homepage with civic navigation and source attribution', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Better information', false)
        ->assertSee('Tabaco City.', false)
        ->assertSee('An independent civic project', false)
        ->assertSee('City information, within reach.', false)
        ->assertSee('Emergency hotlines', false)
        ->assertSee('https://tabacocity.com.ph/', false)
        ->assertSee('https://citcha.tabacocity.com.ph/', false)
        ->assertSee('https://www.boss.tabacocity.com.ph/', false)
        ->assertSee('tel:+630525581602', false)
        ->assertSee('tel:+630524874432', false)
        ->assertSee('Cost to the people of Tabaco City:', false)
        ->assertSee('₱0', false)
        ->assertDontSee('Welcome to BetterTabaco.org', false)
        ->assertDontSee('Laravel', false);
});
