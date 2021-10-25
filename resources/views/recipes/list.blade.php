<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Effer\'s recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($isEditMode)
                    <div class="float-right">
                        <a href="{{ route('recipes.create') }}">
                            <x-button>Ny opskrift</x-button>
                        </a>
                    </div>
                    @endif
                    <h1>Opskrifter</h1>
                    <ul>
                        @foreach ($recipes as $recipe)
                            <li><a href="{{ url('/recipes/' . $recipe->id) }}">{{$recipe->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
