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

                    <h1>{{$recipe->title}}</h1>

                    <a href="{{ url('/recipes/' . $recipe->id . '/edit') }}" class="ml-4 text-sm text-gray-700 underline"><x-button>Edit recipe</x-button></a>

                        <h2 class="mt-10">Ingredienser</h2>

                    <a href="{{ url('/ingredients/create?recipeId=' . $recipe->id) }}" class="ml-4 text-sm text-gray-700 underline">
                        <x-button>Add ingredient</x-button>
                    </a>
                        <table>
                            @foreach ($recipe->ingredients as $ingredient)
                                <tr>
                                    <td class="pr-2">{{$ingredient->amount}} {{$ingredient->type}}</td>
                                    <td>{{$ingredient->name}}</td>
                                    <td>
                                        <form action="/ingredients/{{$ingredient->id}}/edit" method="GET">
                                            <x-button type="submit">Edit</x-button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/ingredients/{{$ingredient->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$ingredient->id}}"/>
                                            <x-button type="submit">Delete</x-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <h2 class="mt-10">Sådan gør du</h2>
                        <p>
                            {{$recipe->body}}
                        </p>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
