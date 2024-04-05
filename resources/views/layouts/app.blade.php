<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ secure_asset('favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Google tag (gtag.js) -->
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

    <!-- Page Heading -->
    @isset ($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Page Footer -->
    <footer class="bg-white text-gray-500">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 py-10 tracking-tight">
            <div class="max-w-6xl mx-auto">
                <div class="text-xs align-middle inline-block">©{{ now()->year }} Landona Conveyancing Pty. Ltd. License
                    No.: 05006589
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
