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
                    <form method="POST" action="/ingredients/{{$ingredient->id}}">
                        @csrf
                        @method('PUT')
                        <h1>Edit ingredient: {{$ingredient->name}}</h1>
                        <div>Name: <input type="text" name="name" placeholder="Write a name here" value="{{$ingredient->name}}"/></div>
                        <div>Amount: <input type="text" name="amount" value="{{$ingredient->amount}}"/></div>
                        <div>Type (g, kg, l etc): <input type="text" name="type" value="{{$ingredient->type}}"/></div>
                        <input type="hidden" name="order" value="1"/>
                        <input type="text" name="recipe_id" value="{{$ingredient->recipe_id}}"/>
                        <div><button type="submit">Save</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
