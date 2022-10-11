<nav x-data="{ open: false }" class="bg-theme-orange-200 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-1">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('recipes') }}">
                        <x-logo/>
                    </a>

                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8">
                        <a href="{{ route('recipes') }}">Alle opskrifter</a>
                    </div>
                    @if (Auth()->user())
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8">
                        <a href="{{ route('scrape') }}">Scraper</a>
                    </div>
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8">
                        <a href="{{ route('recipes.create') }}">Opret ny</a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if (Auth()->user())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-button>Log ud</x-button>
                </form>
                @else
                    <div class="flex-col pr-6">
                        <form method="GET" action="{{ route('register') }}">
                            @csrf
                            <x-button>Opret bruger</x-button>
                        </form>
                    </div>
                <div class="flex-col">
                    <form method="GET" action="{{ route('login') }}">
                        @csrf
                        <x-button>Log ind</x-button>
                    </form>
                </div>


                @endif
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
