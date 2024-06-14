<x-nav-link href="{{ route('home') }}#property-and-land-services"></x-nav-link>

<x-dropdown>
    <x-slot:trigger>
        Services
    </x-slot>
    <x-slot:content>
        <x-nav-link href="{{ route('home') }}#residential">Residential</x-nav-link>

        <x-nav-link href="{{ route('home') }}#strata">Strata</x-nav-link>

        <x-nav-link href="{{ route('home') }}#off-the-plan">Off the Plan</x-nav-link>

        <x-nav-link href="{{ route('home') }}#transfers">Company Titles and Transfers</x-nav-link>
    </x-slot>
</x-dropdown>

<x-nav-link href="{{ route('home') }}#settlements">Settlements</x-nav-link>

<x-nav-link href="{{ route('home') }}#google-reviews">Reviews</x-nav-link>

<x-nav-link href="{{ route('home') }}#pexa">PEXA</x-nav-link>

<x-nav-link href="{{ route('home') }}#contact-us">Contact Us</x-nav-link>

<x-nav-link href="{{ route('home') }}#questions-and-answers">Q & A</x-nav-link>

<x-nav-link href="{{ route('resources') }}">Resources</x-nav-link>

<x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>

<x-content-button href="tel:89014705">Talk to Our Experts ➜</x-content-button>

<x-alternate-content-button href="{{ route('enquiries.create') }}">Enquire Online ➜</x-alternate-content-button>

@auth
<x-nav-link href="{{ route('dashboard') }}">Dashboard</x-nav-link>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
            class="inline-flex items-center px-1 pt-1 hover:text-gray-600 focus:outline-none focus:text-blue-900 focus:border-blue-900 transition duration-150 ease-in-out">
        Logout
    </button>
</form>
@else
    <x-nav-link href="{{ route('login') }}">Sign in</x-nav-link>
@endauth


@if (Auth::check() && Gate::allows('viewAdminDashboard'))
    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
@endif
