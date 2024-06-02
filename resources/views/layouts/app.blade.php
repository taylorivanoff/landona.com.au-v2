<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script async src=https://www.googletagmanager.com/gtag/js?id=G-ZXLK437JYZ></script>
    <script> window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-ZXLK437JYZ');
    </script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen">
    @include('layouts.navigation')
    @isset ($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset
    <main class="pt-32">
        {{ $slot }}
    </main>
    <footer class="bg-white text-gray-500">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 py-10 tracking-tight">
            <div class="max-w-6xl mx-auto">
                <div class="text-xs align-middle inline-block"><p>©{{ now()->year }} Landona Conveyancing Pty. Ltd. <a
                            href="https://verify.licence.nsw.gov.au/details/Conveyancer%20Licence/69484" target="_blank" class="underline">Conveyancer License Number: 05006589</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
