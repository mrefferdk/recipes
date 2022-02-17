<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Effer\'s recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-theme-orange text-theme-brown border-b border-gray-20">
                    @if($recipe->image_path)
                    <div class="main-image w-full bg-cover h-40" style="background-image: url({{ asset('/storage/uploads/'.$recipe->image_path) }});"></div>
                    @endif
                    <h1 class="mt-10 text-black">{{$recipe->title}}</h1>
                    <div class="recipeMetaData">
                        Antal personer: {{$recipe->number}}.
                        @if($recipe->cooking_time)
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> Tilberedning: {{$recipe->cooking_time}} min.@endif
                        @if($recipe->work_time)Arbejdstid: {{$recipe->work_time}} min.@endif
                    </div>

                    @if($isEditMode)
                        <a class="no-underline" href="{{ route('recipes.edit', $recipe->id) }}">
                            <x-button>Rediger opskrift</x-button>
                        </a>
                    @endif


                    <div class="grid">
                        <div class="col-start-1 col-end-3">
                            <h3 class="mt-10 font-bold">Ingredienser</h3>

                            <table>
                                @foreach ($recipe->ingredients as $ingredient)
                                    <tr>
                                        <td class="pr-2 md:pr-7 py-1 font-bold">{{$ingredient->amount}} {{$ingredient->type}}</td>
                                        <td>{{$ingredient->name}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-start-3 col-end-12 px-2">
                            <h2 class="mt-10 font-bold">Sådan gør du</h2>
                            <p>
                                {!! $recipe->body !!}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
