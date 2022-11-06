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
                        @method('DELETE')
                        <h1>{{$title}}</h1>
                        <input type="hidden" id="recipe_id" value="{{$recipe->id}}"/>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="font-bold my-4">
                            Er du sikker på at du vil slette opskriften "{{$recipe->title}}"?
                        </div>
                        <div>
                            <button type="submit" class="rounded-md shadow-sm px-5 py-2 bg-red-600 text-blue-50 hover:bg-red-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                SLET!
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>



    </script>

</x-app-layout>
