<nav x-data="{ open: false }" class="bg-theme-orange-200 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-1">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('recipes') }}">
                        <img class="bg-cover h-16" src="{{ asset('/images/logo.png') }}"/>
                    </a>

                        <div class="max-w-7xl mx-auto pl-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('edit-toggle', ['redirectUrl=' . htmlspecialchars(url()->full())]) }}"
                    class="inline-flex items-center px-4 py-2 font-semibold text-xs uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25 transition ease-in-out">
                        <x-button>
                            @php $isEditMode = \App\Services\AdminService::isEditMode(); @endphp
                            @if($isEditMode)
                                Stop redigering
                            @else
                                Redigér
                            @endif
                        </x-button>
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-button>Log ud</x-button>
                </form>
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
