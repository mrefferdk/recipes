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
                        <form method="POST" action="/recipes">
                            @csrf
                            <h1>Create new</h1>
                            <div>Title: <input type="text" name="title" placeholder="Write a title here"/></div>
                            <div>Description: <textarea name="body"></textarea></div>
                            <div>Number of persons: <select name="number"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4" selected="selected">4</option><option value="5">5</option></select></div>
                            <div><button type="submit">Save</button></div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
