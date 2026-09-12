@php
    $navigation = config('civic.navigation');
@endphp

<header class="civic-navbar">
    <div class="civic-container civic-navbar__inner">
        <a href="{{ route('home') }}" class="civic-brand" aria-label="BetterTabaco home">
            <img
                class="civic-brand__logo"
                src="{{ asset('images/logo-word.png') }}"
                alt=""
                width="311"
                height="157"
                decoding="async"
            >
        </a>

        <nav aria-label="Primary navigation" class="civic-navbar__links">
            @foreach ($navigation as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="civic-nav-link {{ request()->routeIs($item['route']) ? 'civic-nav-link--active' : '' }}"
                    @if (request()->routeIs($item['route'])) aria-current="page" @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="civic-navbar__actions">
            <x-civic.cta href="{{ config('civic.official_site') }}" variant="green" :external="true" class="civic-cta--official" aria-label="Explore the official Tabaco City website">
                Explore
            </x-civic.cta>

            <details class="civic-mobile-menu">
                <summary class="civic-mobile-menu__toggle">
                    <span class="sr-only">Open navigation</span>
                    <span aria-hidden="true" class="civic-mobile-menu__bars"><span></span><span></span></span>
                </summary>
                <nav aria-label="Mobile navigation" class="civic-mobile-menu__panel">
                    @foreach ($navigation as $item)
                        <a
                            href="{{ route($item['route']) }}"
                            class="civic-mobile-menu__link {{ request()->routeIs($item['route']) ? 'civic-mobile-menu__link--active' : '' }}"
                            @if (request()->routeIs($item['route'])) aria-current="page" @endif
                        >
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                    <a href="{{ config('civic.official_site') }}" class="civic-mobile-menu__link" target="_blank" rel="noreferrer noopener">Explore official city website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                </nav>
            </details>
        </div>
    </div>
</header>
