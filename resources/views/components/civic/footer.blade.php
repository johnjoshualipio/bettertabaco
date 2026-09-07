<footer class="civic-footer">
    <div class="civic-wave civic-wave--footer" aria-hidden="true">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 76c174-54 298 29 482 1 184-28 302-74 468-25 164 48 300-31 490 5v93H0V76Z" fill="#DCEFFA"/>
            <path d="M0 101c180-42 295 45 481 10 188-35 306-63 472-10 172 54 307-13 487 10v39H0v-49Z" fill="#B5D9EE"/>
            <path d="M0 125c191-35 302 20 476 6 195-15 323-41 478-7 178 39 313-6 486 7v19H0v-25Z" fill="#082848"/>
        </svg>
    </div>
    <div class="civic-container civic-footer__body">
        <div class="civic-footer__lead">
            <a href="{{ route('home') }}" class="civic-footer__brand" aria-label="BetterTabaco home">
                <img
                    class="civic-footer__logo brightness-0 invert"
                    src="{{ asset('images/logo-word.png') }}"
                    alt=""
                    width="311"
                    height="157"
                    loading="lazy"
                    decoding="async"
                >
            </a>
            <p>Empowering people in Tabaco City with easier access to city services, public records, and official government sources.</p>
            <div class="civic-footer__contact">
                <span><x-civic.icon name="pin" class="size-4" /> Tabaco City, Albay, Philippines</span>
                <a href="{{ route('contact') }}"><x-civic.icon name="phone" class="size-4" /> Emergency hotlines and contact</a>
            </div>
            <a class="civic-footer__official" href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener">Official city website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
        </div>

        <div>
            <h2 class="civic-footer__heading">Quick links</h2>
            <nav aria-label="Footer quick links" class="civic-footer__links">
                @foreach (config('civic.navigation') as $item)
                    <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                @endforeach
                <a href="{{ route('history') }}">History of Tabaco City</a>
                <a href="{{ route('tabak-festival') }}">Tabak Festival</a>
            </nav>
        </div>

        <div>
            <h2 class="civic-footer__heading">Official sources</h2>
            <nav aria-label="Official sources" class="civic-footer__links">
                <a href="{{ config('civic.sources.official') }}" target="_blank" rel="noreferrer noopener">Tabaco City website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.charter') }}" target="_blank" rel="noreferrer noopener">Citizen’s Charter <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.boss') }}" target="_blank" rel="noreferrer noopener">Business One Stop Shop <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.disclosure') }}" target="_blank" rel="noreferrer noopener">Full Disclosure <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.forms') }}" target="_blank" rel="noreferrer noopener">Downloadable Forms <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.psa_population') }}" target="_blank" rel="noreferrer noopener">PSA population data <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.cityhood') }}" target="_blank" rel="noreferrer noopener">Republic Act No. 9020 <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
                <a href="{{ config('civic.sources.bettergov') }}" target="_blank" rel="noreferrer noopener">BetterGov.ph <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
            </nav>
        </div>

        <div class="civic-footer__support">
            <h2 class="sr-only">Support BetterTabaco</h2>
            <div class="civic-footer__support-cost-row">
                <p class="civic-footer__support-label">Cost to the people of Tabaco City:</p>
                <p class="civic-footer__support-cost"><strong>₱0</strong></p>
            </div>
            <div class="civic-footer__support-links">
                <a href="mailto:volunteer@bettertabaco.org" class="civic-footer__support-link"><x-civic.icon name="mail" class="size-4" /> Volunteer with us</a>
                <a href="https://github.com/johnjoshualipio/bettertabaco" class="civic-footer__support-link" target="_blank" rel="noreferrer noopener"><x-civic.icon name="arrow-up-right" class="size-4" /> Contribute code with us</a>
            </div>
            <a href="{{ config('civic.sources.bettergov') }}" class="civic-footer__bettergov" target="_blank" rel="noreferrer noopener" aria-label="Visit BetterGov.ph">
                <img src="{{ asset('images/bettergov-footer.svg') }}" alt="BetterGov.ph" width="1080" height="1080" loading="lazy" decoding="async">
            </a>
        </div>
    </div>

    <div class="civic-container civic-footer__bottom">
        <p>BetterTabaco is independent and is not the official website of the Tabaco City Government.</p>
    </div>
</footer>
