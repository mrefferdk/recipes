<nav x-data="{ open: false }" class="bg-theme-orange-200 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <!-- Responsive Navigation Menu -->
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
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8 hidden md:block">
                        <a class="" href="{{ route('recipes') }}">Alle opskrifter</a>
                    </div>
                    @if (Auth()->user())
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8 hidden md:block">
                        <a href="{{ route('scrape') }}">Scrape opskrift</a>
                    </div>
                    <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8 hidden md:block">
                        <a href="{{ route('recipes.create') }}">Ny opskrift</a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center justify-end gap-3">

                @if (Auth()->user())
                <form method="POST" action="{{ route('logout') }}" class="hidden md:block">
                    @csrf
                    <x-button>Log ud</x-button>
                </form>
                @else
                    <div class="flex-col pr-6 hidden md:block">
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
                <div class="flex-col md:hidden" id="mobile-menu-btn">
                    <x-button>Menu</x-button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden fixed bg-white w-full text-right border-1 py-4 px-1" id="mobile-menu">
            <ul class="mr-4 font-bold">
            @if (Auth()->user())
                <li class="border-b border-gray-300">
                    <a class="block p-2 no-underline text-theme-brown hover:text-theme-brown" href="{{ route('scrape') }}">
                        Scrape opskrift
                    </a>
                </li>
                <li class="border-b border-gray-300">
                    <a class="block p-2 no-underline text-theme-brown hover:text-theme-brown" href="{{ route('recipes.create') }}">Opret ny ops</a>
                </li>
                <li class="border-b border-gray-300">
                    <a class="block p-2 no-underline text-theme-brown hover:text-theme-brown" href="{{ route('logout') }}">Log ud</a>
                </li>
            @else
                <li class="border-b border-gray-300">
                    <a class="block p-2 no-underline text-theme-brown hover:text-theme-brown" href="{{ route('register') }}">Opret bruger</a>
                </li>
                <li class="border-b border-gray-300">
                    <a class="block p-2 no-underline text-theme-brown hover:text-theme-brown" href="{{ route('login') }}">Log ind</a>
                </li>
            @endif
            </ul>
    </div>
</nav>
<script>
    $('#mobile-menu-btn').click(function() {
        $('#mobile-menu').toggleClass('hidden');
    })
</script>
