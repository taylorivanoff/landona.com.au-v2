<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 pin-t fixed w-full">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo
                                class="block h-10 w-auto fill-current hover:text-blue-900 transition ease-in-out duration-150"/>
                    </a>
                    <h1 class="font-bold tracking-tight  ml-3">
                        Landona Conveyancing
                    </h1>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex flex items-center">
                    <x-nav-link href="{{ route('home') }}">
                        Home
                    </x-nav-link>
                    <x-nav-link href="{{ route('home') }}#services">
                        Services
                    </x-nav-link>
                    <x-nav-link href="{{ route('home') }}#google-reviews">
                        Reviews
                    </x-nav-link>
                    <x-nav-link href="{{ route('home') }}#testimonials">
                        Testimonials
                    </x-nav-link>
                    <x-nav-link href="{{ route('home') }}/#contact-us">
                        Contact Us
                    </x-nav-link>
                    <x-nav-link href="{{ route('faq') }}">
                        FAQ
                    </x-nav-link>
{{--                    <x-nav-link href="{{ route('blog') }}">--}}
{{--                        Blog--}}
{{--                    </x-nav-link>--}}
                    <x-nav-link href="{{ route('resources') }}">
                        Resources
                    </x-nav-link>
                    <x-nav-link href="{{ route('about-us') }}">
                        About Us
                    </x-nav-link>
                    <x-cta-button href="tel:89014705">
                        Talk to Our Experts
                    </x-cta-button>
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
                            <!-- Authentication -->
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

            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#testimonials">
                Testimonials
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#services">
                Services
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#contact">
                Contact
            </x-responsive-nav-link>
        </div>

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
                        <div class="font-medium  text-gray-500">{{ Auth::user()->email }}</div>
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
