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

                    <h1>Create new ingredient</h1>

                    <form method="POST" action="{{url('/ingredients/')}}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="ingredient-name" :value="__('Navn')" />
                            <x-input id="ingredient-name" class="block mt-1 w-1/2" type="text" name="name" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="ingredient-name" :value="__('Total tid (i minutter)')" />
                            <x-input id="ingredient-name" class="block mt-1 w-1/2" type="text" name="minutes" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="ingredient-amount" :value="__('Mængde')" />
                            <x-input id="ingredient-amount" class="block mt-1 w-1/7" type="text" name="amount" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="ingredient-type" :value="__('Type (g, kg, l etc)')" />
                            <x-input id="ingredient-type" class="block mt-1 w-1/7" type="text" name="type" required />
                        </div>

                        <input type="hidden" name="order" value="1"/>
                        <input type="hidden" name="recipe_id" value="{{$recipeId}}"/>

                        <div class="mt-4">
                            <x-button class="" type="submit">Save</x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
