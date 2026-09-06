@props(['name' => 'arrow', 'class' => 'size-6'])

<svg {{ $attributes->merge(['class' => $class]) }} viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    @switch($name)
        @case('archive')
            <path d="M4 7.5h16v12H4v-12ZM3 4.5h18v3H3v-3ZM8 12h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('arrow')
            <path d="M4 12h15M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('arrow-right')
            <path d="m13.5 4.5 7.5 7.5-7.5 7.5M21 12H3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('arrow-up-right')
            <path d="M14 5h5v5M19 5l-8.5 8.5M5 9.5V19h9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break        @case('bank')
            <path d="m3 9 9-5 9 5M5 10.5h14M6.5 10.5v7M10 10.5v7M14 10.5v7M17.5 10.5v7M4 20h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('briefcase')
            <path d="M4 8.5h16v11H4v-11ZM8 8.5V6h8v2.5M4 13h16M10 13v2h4v-2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('building')
            <path d="M5 20V5h10v15M15 10h4v10M8 8h4M8 11.5h4M8 15h4M2.5 20h19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('database')
            <ellipse cx="12" cy="5.5" rx="7.5" ry="3" stroke="currentColor" stroke-width="1.8"/>
            <path d="M4.5 5.5v6c0 1.7 3.4 3 7.5 3s7.5-1.3 7.5-3v-6M4.5 11.5v6c0 1.7 3.4 3 7.5 3s7.5-1.3 7.5-3v-6" stroke="currentColor" stroke-width="1.8"/>
            @break
        @case('document')
            <path d="M6 3.5h8l4 4V20.5H6V3.5Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M14 3.5v4h4M9 12h6M9 15.5h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('globe')
            <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.8"/><path d="M3.7 12h16.6M12 3.5c2.2 2.3 3.3 5.1 3.3 8.5s-1.1 6.2-3.3 8.5c-2.2-2.3-3.3-5.1-3.3-8.5S9.8 5.8 12 3.5Z" stroke="currentColor" stroke-width="1.5"/>
            @break
        @case('health')
            <path d="M12 20.5s-7.5-4.4-7.5-10.1A4.1 4.1 0 0 1 12 7.9a4.1 4.1 0 0 1 7.5 2.5c0 5.7-7.5 10.1-7.5 10.1Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M12 9.5v5M9.5 12h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('home')
            <path d="m4 11 8-7 8 7v8.5H4V11Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 19.5v-5h6v5" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            @break
        @case('mail')
            <path d="M3.5 6.5h17v11h-17v-11Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('people')
            <circle cx="12" cy="8" r="3" stroke="currentColor" stroke-width="1.8"/><path d="M5 19.5a7 7 0 0 1 14 0M4 12a2.5 2.5 0 0 0 0 5M20 12a2.5 2.5 0 0 1 0 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('phone')
            <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.14.417l-.97 1.293c-.265.353-.707.54-1.14.429a12.035 12.035 0 0 1-7.143-7.143c-.111-.433.076-.875.429-1.14l1.293-.97c.363-.238.527-.7.417-1.14L7.88 3.1A1.125 1.125 0 0 0 6.789 2.25H5.25A2.25 2.25 0 0 0 3 4.5v2.25Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break        @case('pin')
            <path d="M19 10.5c0 5-7 10-7 10s-7-5-7-10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="10.5" r="2.2" stroke="currentColor" stroke-width="1.8"/>
            @break
        @case('receipt')
            <path d="M6 3.5h12v17l-2-1.5-2 1.5-2-1.5-2 1.5-2-1.5-2 1.5v-17Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 8h6M9 12h6M9 16h3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('scroll')
            <path d="M7 4h11v15H7a3 3 0 1 1 0-6h11M7 13a3 3 0 1 0 0 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 8h5M10 11h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('search')
            <circle cx="10.5" cy="10.5" r="6" stroke="currentColor" stroke-width="1.8"/><path d="m15 15 5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break
        @case('shield')
            <path d="M12 3.5 19 6v5.2c0 4.5-2.8 7.8-7 9.3-4.2-1.5-7-4.8-7-9.3V6l7-2.5Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m9.2 12 1.9 1.9 3.8-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            @break
        @case('information-circle')
            <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.8"/>
            <path d="M12 10.5v5M12 7.5h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            @break        @default
            <path d="M4 12h15M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    @endswitch
</svg>
