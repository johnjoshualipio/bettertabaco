@props([
    'title' => 'Better information for Tabaco City',
    'description' => 'An independent civic guide to services, public information, and official resources for Tabaco City, Albay.',
    'image' => null,
])

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description }}">
        <meta name="theme-color" content="#0A294B">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title }} | BetterTabaco">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:type" content="website">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        @if ($image)
            <meta property="og:image" content="{{ asset(ltrim($image, '/')) }}">
        @endif
        <title>{{ $title }} | BetterTabaco</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-paper text-ink antialiased">
        <a class="skip-link" href="#main-content">Skip to content</a>
        <div class="min-h-screen overflow-x-clip">
            <x-civic.emergency-bar />
            <x-civic.navbar />
            <main id="main-content">{{ $slot }}</main>
            <x-civic.footer />
        </div>
    </body>
</html>
