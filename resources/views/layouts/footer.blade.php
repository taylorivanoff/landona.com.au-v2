<footer class="flex flex-row justify-between w-5/6 mx-auto my-16 bg-gray-200">
    <div class="flex flex-col space-y-2 float-left">
        <x-nav-link class="underline" href="{{ route('home') }}">
            Home
        </x-nav-link>
        <x-nav-link class="underline" href="{{ route('faq') }}">
            Q&A
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
    <div class="flex flex-col-reverse space-x-4 space-y-4 text-right">
        <x-p>&copy;{{ now()->year }} Landona Conveyancing Pty. Ltd.</x-p>
        <x-p>License #: <a href="https://verify.licence.nsw.gov.au/details/Conveyancer%20Licence/69484" target="_blank"
                           class="underline">05006589</a></x-p>
    </div>
</footer>
