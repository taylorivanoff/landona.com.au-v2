<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BDS0LE2JFE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BDS0LE2JFE');
    </script>
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')

    @isset ($header)
        <header class="bg-white shadow py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </header>
    @endisset
    <main class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    @include('layouts.footer')
</body>
</html>
