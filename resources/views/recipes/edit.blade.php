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
                    <form method="POST" action="{{url('/recipes/' . $recipe->id)}}">
                        @csrf
                        @method('PUT')
                        <h1>Edit {{$recipe->title}}</h1>
                        <div>Title: <input type="text" name="title" placeholder="Write a title here" value="{{$recipe->title}}"/></div>
                        <div>Description: <textarea name="body">{{$recipe->body}}</textarea></div>
                        <div>Number of persons:
                            <select name="number">
                                @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}" @if ($i == $recipe->number)selected="selected"@endif>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div><button type="submit">Save</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
