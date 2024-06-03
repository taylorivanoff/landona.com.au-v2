<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZXLK437JYZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-ZXLK437JYZ');
    </script>
</head>
<body>
<div class="font-sans antialiased leading-relaxed">
    @include('layouts.navigation')
    @isset ($header)
        <header class="bg-white shadow py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </header>
    @endisset
    <main class="px-8 flex flex-col">
        {{ $slot }}
    </main>
    <footer class="flex flex-col py-16 lg:py-32 px-8 lg:px-8 lg:mx-16 space-y-4">
        <div>
            <x-nav-link class="underline" href="{{ route('home') }}">
                Home
            </x-nav-link>
            <x-nav-link class="underline" href="{{ route('faq') }}">
                FAQ
            </x-nav-link>
            <x-nav-link class="underline" href="{{ route('resources') }}">
                Resources
            </x-nav-link>
            <x-nav-link class="underline" href="{{ route('about-us') }}">
                About Us
            </x-nav-link>
            <x-nav-link class="underline" href="tel:89014705">
                Call Us
            </x-nav-link>
        </div>
        <p>&copy;{{ now()->year }} Landona Conveyancing Pty. Ltd.</p>
        <p><a href="https://verify.licence.nsw.gov.au/details/Conveyancer%20Licence/69484" target="_blank" class="underline">Conveyancer License Number: 05006589</a></p>
    </footer>
</div>
</body>
</html>
