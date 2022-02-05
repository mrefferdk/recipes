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
                    <div>
                        <form method="POST" action="{{url('/recipes')}}">
                            @csrf
                            <h1>{{__('Ny opskrift')}}</h1>
                            <div class="mt-4">
                                <x-label for="title" :value="__('Overskrift')" />
                                <x-input id="title" class="block mt-1 w-1/2" type="text" name="title" required value="123"/>
                            </div>
                            <div class="mt-4">
                                <div class="inline-block">
                                    <x-label for="cookingTime" :value="__('Tilberedningstid')" />
                                    <x-input id="cookingTime" :placeholder="__('minutter')" class="block mt-1 w-1/2" type="text" name="cooking_time" required  value="123"/>
                                </div>
                                <div class="inline-block">
                                    <x-label for="cookingTime" :value="__('Arbejdstid')" />
                                    <x-input id="cookingTime" :placeholder="__('minutter')" class="block mt-1 w-1/2" type="text" name="work_time" required  value="123"/>
                                </div>

                            </div>
                            <div class="mt-4">
                                <x-label for="body" :value="__('Beskrivelse')" />
                                <textarea id="body" name="body" onkeyup="autoheight(this)" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"></textarea>
                            </div>
                            <div class="mt-4">
                                <x-label for="number" :value="__('Antal personer')" />
                                <select name="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @for ($i = 0; $i < 10; $i++)
                                        <option value="{{$i}}" {{ 4 == $i ? 'selected' : '' }}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <h2 class="mt-4">{{_('Ingredienser')}}</h2>
                            <x-button id="addIngredientRow" type="button">Tilføj flere</x-button>
                            <div id="ingredientsContainer">
                            </div>

                            <input type="hidden" name="order" value="1"/>

                            <div><button type="submit" class="rounded-md shadow-sm mt-4 px-5 py-2 bg-blue-600 text-blue-50 hover:bg-blue-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Save</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ingredientRow" class="hidden">
        <div class="mt-4">
            <x-input :placeholder="__('Navn')" class="inline-block mt-1 w-1/6" type="text" name="ingredients[INGREDIENT_COUNT][name]"/>
            <x-input :placeholder="__('Mængde')" class="inline-block mt-1 w-1/7" type="text" name="ingredients[INGREDIENT_COUNT][amount]"/>
            <x-input :placeholder="__('Type (g, kg, l etc)')" class="inline-block mt-1 w-1/7" type="text" name="ingredients[INGREDIENT_COUNT][type]"/>
        </div>
    </div>

    <script>
        function autoheight(x) {
            x.style.height = "5px";
            x.style.height = (15+x.scrollHeight)+"px";
        }

        let ingredientCounter = 0; // Yes it shouldn't be global.. fix later

        function replacePlaceholderCounter(str, value) {
            return str.replace(/INGREDIENT_COUNT/g, value);
        }

        function addIngredientRow() {
            const template = document.getElementById('ingredientRow').children[0].cloneNode(true).toString();
            console.log(replacePlaceholderCounter(template, 1));
            const node = document.createElement("div") = template;
            console.log(node);
            document.getElementById('ingredientsContainer').appendChild(node);
        }

        function addIngredientRows(number) {
            for (let c = 0; c < number; c++) {
                addIngredientRow();
            }
        }

        autoheight(document.getElementById('body'));
        addIngredientRows(8);

        document.getElementById('addIngredientRow').onclick = addIngredientRow;



    </script>
</x-app-layout>
