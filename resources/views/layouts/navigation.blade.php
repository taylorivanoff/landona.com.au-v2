<nav class="bg-white border-b border-gray-100 pin-t fixed w-full z-50">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a class="flex flex-row items-center hover:text-blue-900 transition ease-in-out duration-150" href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto"/>
                        <h1 class="font-bold tracking-tight hidden lg:flex ml-3">Landona Conveyancing</h1>
                    </a>
                </div>

                <div class="hidden space-x-8 -my-px ml-10 lg:flex items-center shrink-0">
                    <x-nav-link href="{{ route('home') }}">Home</x-nav-link>
                    <x-nav-link href="{{ route('home') }}#comprehensive-property-&-land-services">Services</x-nav-link>
                    <x-nav-link href="{{ route('home') }}#google-reviews">Reviews</x-nav-link>
                    <x-nav-link href="{{ route('home') }}#settlements">Settlements</x-nav-link>
                    <x-nav-link href="{{ route('home') }}#contact-us">Contact Us</x-nav-link>
                    <x-nav-link href="{{ route('home') }}#from-contract-to-settlement-pexa">PEXA</x-nav-link>
                    <x-nav-link href="{{ route('faq') }}">Q&A</x-nav-link>
                    <x-nav-link href="{{ route('resources') }}">Resources</x-nav-link>
                    <x-nav-link href="{{ route('about-us') }}">About Us</x-nav-link>
                    <x-content-button href="tel:89014705">Talk to Our Experts ➜</x-content-button>
                </div>
            </div>

            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center  font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth

    </div>
</nav>
