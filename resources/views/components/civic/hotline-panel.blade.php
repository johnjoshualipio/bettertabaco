<aside {{ $attributes->merge(['class' => 'civic-hotline-panel']) }} aria-labelledby="hotline-panel-title">
    <div class="civic-rule" aria-hidden="true"></div>
    <h2 id="hotline-panel-title" class="civic-hotline-panel__title">Here for a safer Tabaco City.</h2>
    <div class="civic-hotline-panel__list">
        @foreach (config('civic.hotlines') as $hotline)
            <a class="civic-hotline-panel__item" href="tel:{{ $hotline['tel'] }}">
                <span class="civic-hotline-panel__icon" aria-hidden="true"><x-civic.icon name="phone" class="size-4" /></span>
                <span class="min-w-0">
                    <span class="civic-hotline-panel__name">{{ $hotline['name'] }}</span>
                    <span class="civic-hotline-panel__number">{{ $hotline['display'] }}</span>
                </span>
            </a>
        @endforeach
    </div>
    <div class="civic-hotline-panel__source">
        <p>Last verified {{ config('civic.verified_on') }}.</p>
        <a href="{{ config('civic.sources.contact') }}" target="_blank" rel="noreferrer noopener">Verify against the official source <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
    </div>
</aside>
