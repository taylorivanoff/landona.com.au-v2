<x-nav-link href="{{ route('home') }}#property-and-land-services">Services</x-nav-link>

<x-nav-link href="{{ route('home') }}#settlements">Settlements</x-nav-link>

<x-nav-link href="{{ route('home') }}#google-reviews">Reviews</x-nav-link>

<x-nav-link href="{{ route('home') }}#pexa">PEXA</x-nav-link>

<x-nav-link href="{{ route('home') }}#contact-us">Contact Us</x-nav-link>

<x-nav-link href="{{ route('home') }}#questions-and-answers">Q & A</x-nav-link>

<x-nav-link href="{{ route('resources') }}">Resources</x-nav-link>

<x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>

<x-content-button href="tel:89014705">Talk to Our Experts ➜</x-content-button>

<x-alternate-content-button href="{{ route('enquiries.create') }}">Enquire Online ➜</x-alternate-content-button>

{{--<x-dropdown>--}}
{{--    <x-slot:trigger>--}}
{{--        Portal--}}
{{--    </x-slot>--}}
{{--    <x-slot:content>--}}
{{--        <x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>--}}
{{--        <x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>--}}
{{--        <x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>--}}
{{--    </x-slot>--}}
{{--</x-dropdown>--}}

@if (Auth::check() && Gate::allows('viewAdminDashboard'))
    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
@endif
