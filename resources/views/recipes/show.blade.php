<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Effer\'s recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-20">
                    <div class="float-right">
                    @if(!$showEditOptions)

                        <a href="{{ route('recipes.show', [$recipe->id, 'showEditOptions']) }}">
                            <x-button>Vis redigeringsmuligheder</x-button>
                        </a>
                    @else
                        <a href="{{ route('recipes.show', $recipe->id) }}">
                            <x-button>Gem redigeringsmuligheder</x-button>
                        </a>
                    @endif
                        </div>
                    <h1>{{$recipe->title}}</h1>


                    @if($showEditOptions)
                        <a href="{{ route('recipes.edit', $recipe->id) }}">
                            <x-button>Rediger opskrift</x-button>
                        </a>
                    @endif


                    <div class="grid">
                        <div class="col-start-1 col-end-3">
                            <h3 class="mt-10">Ingredienser</h3>

                            @if($showEditOptions)
                            <a href="{{ route('ingredients.create', 'recipeId=' . $recipe->id) }}">
                                <x-button>Tilføj ingrediens</x-button>
                            </a>
                            @endif
                            <table>
                                @foreach ($recipe->ingredients as $ingredient)
                                    <tr>
                                        <td class="pr-10 py-1 font-bold">{{$ingredient->amount}} {{$ingredient->type}}</td>
                                        <td>{{$ingredient->name}}</td>
                                        @if($showEditOptions)
                                            <td>
                                                <form action="{{route('ingredients.edit', $ingredient->id)}}" method="GET">
                                                    <x-button type="submit">Rediger</x-button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('ingredients.delete', $ingredient->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$ingredient->id}}"/>
                                                    <x-button type="submit">Fjern</x-button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-start-3 col-end-12 px-2">
                            <h2 class="mt-10">Sådan gør du</h2>
                            <p>
                                {{$recipe->body}}
                            </p>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
