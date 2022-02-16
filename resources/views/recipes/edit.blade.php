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
                    <form method="POST" action="{{$action}}" enctype="multipart/form-data">
                        @csrf
                        @if ($method == 'PUT')
                        @method('PUT')
                        @endif
                        <h1>{{$title}}</h1>
                        <input type="hidden" id="recipe_id" value="{{$recipe->id}}"/>
                        <div class="mt-4 w-96">
                            <x-label for="image" :value="__('Billede')" />
                            <input type="file" name="image" class="form-control w-1/6 px-2 py-1.5 text-base font-normal rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="chooseFile">
                        </div>

                        <div class="mt-4">
                            <x-label for="title" :value="__('Overskrift')" />
                            <x-input id="title" class="block mt-1 w-1/2" type="text" name="title" value="{{$recipe->title}}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="cooking_time" :value="__('Total tid (i minutter)')" />
                            <x-input id="cooking_time" class="block mt-1 w-1/2" type="text" name="cooking_time" value="{{$recipe->cooking_time}}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="body" :value="__('Beskrivelse')" />
                            <textarea id="body" name="body" onkeyup="autoheight(this)" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">{{$recipe->body}}</textarea>
                        </div>
                        <div class="mt-4">
                            <x-label for="number" :value="__('Antal personer')" />
                            <select name="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}" @if ($i == $recipe->number)selected="selected"@endif>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <h2 class="mt-4">{{_('Ingredienser')}}</h2>
                        <x-button id="addIngredientRow" type="button">Tilføj flere</x-button>
                        <div id="ingredientsContainer">
                        </div>

                        <div>
                            <button type="submit" class="rounded-md shadow-sm px-5 mt-5 py-2 bg-blue-600 text-blue-50 hover:bg-blue-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
    </svg>
    <div id="root"></div>
    <script>
        function autoheight(x) {
            x.style.height = "5px";
            x.style.height = (15+x.scrollHeight)+"px";
        }

        let ingredientCounter = 0; // Yes it shouldn't be global.. fix later

        function replacePlaceholderCounter(str, value) {
            return str.replace(/INGREDIENT_COUNT/g, value);
        }

        function getRecipeData() {
            const link = 'http://localhost:8099/api/v1/recipes/' + document.getElementById('recipe_id').value;
            fetch(link, { headers: { "Content-Type": "application/json; charset=utf-8" }})
                .then(res => res.json()) // parse response as JSON (can be res.text() for plain response)
                .then(response => {
                    console.log('response', response);
                    recipeDataReceived(response);
                    // here you do what you want with response
                })
                .catch(err => {
                    console.log("err", err)
                });
        }

        getRecipeData();

        function recipeDataReceived(json) {
            console.log(json);
            for (let i = 0; i < json.ingredients.length; i++) {
                addIngredientRow(json.ingredients[i]);
            }
        }

        function removeRow(nodeId) {
            let node = document.getElementById(nodeId);
            node.remove();
        }

        function addIngredientRow(rowData) {
            let node = document.createElement("div");
            node.className = 'mt-4';
            node.id = 'ingredient-row-' + ingredientCounter;

            // Ingredient amount
            let amountNode = document.createElement("input");
            amountNode.type = 'text';
            amountNode.placeholder = 'Mængde';
            if (rowData && rowData.amount) {
                amountNode.value = rowData.amount;
            }
            amountNode.name = 'ingredients['+ingredientCounter+'][amount]';
            amountNode.className = 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 inline-block mt-1 mr-2 w-16 text-center';
            node.appendChild(amountNode);

            // Ingredient type
            let typeNode = document.createElement("input");
            typeNode.type = 'text';
            typeNode.placeholder = 'Type (g, kg, l etc)';
            if (rowData && rowData.type) {
                typeNode.value = rowData.type;
            }
            typeNode.name = 'ingredients['+ingredientCounter+'][type]';
            typeNode.className = 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 inline-block mt-1 w-1/7';
            node.appendChild(typeNode);

            // Ingredient name
            let nameNode = document.createElement("input");
            nameNode.type = 'text';
            if (rowData && rowData.name) {
                nameNode.value = rowData.name;
            }
            nameNode.placeholder = 'Navn';
            nameNode.name = 'ingredients['+ingredientCounter+'][name]';
            nameNode.className = 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 inline-block mt-1 mr-2 w-1/6';
            node.appendChild(nameNode);

            // Delete button
            let pathNode = document.createElementNS('http://www.w3.org/2000/svg','path');
            pathNode.setAttribute('fill-rule', 'evenodd');
            pathNode.setAttribute('clip-rule', 'evenodd');
            pathNode.setAttribute('d', 'M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z');

            let deleteNode = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            deleteNode.setAttributeNS(null, 'class', 'h-5 w-5 inline-block ml-2 cursor-pointer');
            deleteNode.setAttributeNS(null, 'viewBox', '0 0 20 20');
            deleteNode.setAttributeNS(null, 'fill', 'currentColor');
            deleteNode.onclick = () => removeRow(node.id);
            deleteNode.appendChild(pathNode);
            node.appendChild(deleteNode);

            document.getElementById('ingredientsContainer').appendChild(node);
            ingredientCounter++;
        }

        autoheight(document.getElementById('body'));

        document.getElementById('addIngredientRow').onclick = () => {
            addIngredientRow();
        }

        tinymce.init({
            selector: '#body',
            height: '400',
        });



    </script>

</x-app-layout>
