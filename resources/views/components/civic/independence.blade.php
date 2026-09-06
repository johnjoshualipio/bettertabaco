<aside {{ $attributes->merge(['class' => 'civic-independence']) }}>
    <span class="civic-independence__mark" aria-hidden="true"><x-civic.icon name="information-circle" class="size-4" /></span>
    <div>
        <p class="civic-independence__title">An independent civic project</p>
        <p class="civic-independence__copy">BetterTabaco is community-maintained and is not an official website of the Tabaco City Government.</p>
        <a href="{{ config('civic.sources.psa_population') }}" class="civic-independence__source" target="_blank" rel="noreferrer noopener">Population source: PSA 2024 <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
    </div>
    <a href="{{ config('civic.official_site') }}" class="civic-independence__link" target="_blank" rel="noreferrer noopener">Visit the official city website <x-civic.icon name="arrow-up-right" class="civic-icon--inline size-4" /></a>
</aside>
