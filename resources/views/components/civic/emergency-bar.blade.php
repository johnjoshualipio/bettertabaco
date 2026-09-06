<div class="civic-emergency-bar">
    <div class="civic-container civic-emergency-bar__inner">
        <p class="civic-emergency-bar__label">
            <x-civic.icon name="phone" class="size-4 shrink-0" />
            <span>Emergency hotlines</span>
        </p>
        <nav aria-label="Emergency hotlines" class="civic-emergency-bar__links">
            @foreach (config('civic.hotlines') as $hotline)
                <a href="tel:{{ $hotline['tel'] }}" class="civic-emergency-bar__link">
                    <span class="civic-emergency-bar__name">{{ $hotline['name'] }}</span>
                    <span class="civic-emergency-bar__number">{{ $hotline['summary'] }}</span>
                </a>
            @endforeach
        </nav>
        <p class="civic-emergency-bar__tagline">Ciudad Nin Tunay Na Pagkamoot</p>
    </div>
</div>
