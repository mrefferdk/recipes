<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Effer\'s recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-theme-orange text-theme-brown border-b border-gray-200">
                    @auth
                    <div class="float-right">
                        <a href="{{ route('recipes.create') }}">
                            <x-button>Ny opskrift</x-button>
                        </a>
                    </div>
                    @endauth
                    <h1 class="text-theme-black">Opskrifter</h1>
                    <ul class="grid grid-flow-row-dense grid-cols-3 grid-rows-3 gap-3">
                        @foreach ($recipes as $recipe)
                            <a href="{{ url('/recipes/' . $recipe->id) }}" class="text-gray-900 no-underline shadow-sm bg-white my-1.5">
                                <li>
                                    <div class="main-image w-full bg-cover h-40" style="background-image: url(@if($recipe->image_path){{ asset('/storage/uploads/'.$recipe->image_path) }}@else {{ asset('/images/23462.png') }} @endif);"></div>
                                    <div class="px-4 py-2">
                                        {{$recipe->title}}
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
