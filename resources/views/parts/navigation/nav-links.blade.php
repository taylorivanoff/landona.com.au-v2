@auth
    <x-nav-link href="{{ route('dashboard') }}">Dashboard</x-nav-link>
@else

    <x-dropdown>
        <x-slot:trigger>
            Services
        </x-slot>
        <x-slot:content>
            <x-nav-link href="">Buying</x-nav-link>
            <x-nav-link href="">Selling</x-nav-link>
            <x-nav-link href="">Contract Review</x-nav-link>
            <x-nav-link href="">Transfer</x-nav-link>
            <x-nav-link href="">Company Title</x-nav-link>
        </x-slot>
    </x-dropdown>


<x-dropdown>
        <x-slot:trigger>
            About Us
        </x-slot>
        <x-slot:content>
            <x-nav-link href="{{ route('about') }}">Our Team</x-nav-link>
        </x-slot>
    </x-dropdown>

    <x-nav-link href="{{ route('home') }}#contact-us">Contact</x-nav-link>

    <x-nav-link href="tel:89014705">
         8901 4705
    <svg class="ml-2" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
    </x-nav-link>
@endauth


