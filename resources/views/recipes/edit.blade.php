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
                    <form method="POST" action="{{url('/recipes/' . $recipe->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h1>Edit {{$recipe->title}}</h1>
                        <div class="mt-4">
                            <x-label for="image" :value="__('Billede')" />
                            <input type="file" name="image" class="custom-file-input" id="chooseFile">
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

                        <div>
                            <button type="submit" class="rounded-md shadow-sm px-5 mt-5 py-2 bg-blue-600 text-blue-50 hover:bg-blue-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function autoheight(x) {
            x.style.height = "5px";
            x.style.height = (15+x.scrollHeight)+"px";
        }
        autoheight(document.getElementById('body'));
    </script>
</x-app-layout>
