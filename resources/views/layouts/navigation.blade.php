<nav class="bg-white border-b border-gray-100 fixed w-full z-10" x-data="{ open: false }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 justify-between items-center">
            <div class="flex items-center">
                <a class="flex items-center hover:text-blue-900 transition duration-150" href="{{ route('home') }}">
                    <x-application-logo class="block h-10 w-auto"/>
                    <h1 class="block lg:hidden font-bold tracking-tight ml-3">Landona Conveyancing</h1>
                </a>
            </div>

            <div class="hidden xl:flex space-x-8 items-center ml-8 mr-auto shrink-0">
                @include('parts/navigation/nav-links')
            </div>

            @auth
            <div class="hidden xl:flex space-x-8 items-center mr-8 ml-auto shrink-0">
                @can('viewAdminDashboard', Auth::user())
                    <x-nav-link href="{{ route('admin.matters.index') }}">Matters</x-nav-link>
                    <x-nav-link href="{{ route('admin.events.index') }}">Events</x-nav-link>
                @endcan
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="inline-flex items-center px-1 pt-1 hover:text-gray-600 focus:outline-none focus:text-blue-900 focus:border-blue-900 transition duration-150 ease-in-out">
                        Logout
                    </button>
                </form>
            </div>
            @endauth

            <div class="xl:hidden ml-auto mt-2">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="xl:hidden">
        <div class="px-2 pt-2 pb-3 space-y-4 sm:px-3">
            @include('parts/navigation/nav-links')
        </div>
    </div>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('menu', () => ({
            open: false,
        }))
    })
</script>
