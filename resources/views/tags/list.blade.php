<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Effer\'s recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 sm:px-0 md:px-6 bg-theme-orange text-theme-brown border-b border-gray-200">
                    <h1 class="text-theme-black pl-4 md:pl-0">Kategorier</h1>
                    <ul class="grid grid-flow-row-dense md:grid-cols-3 grid-rows-3 gap-3 grid-cols-2 pl-0">
                        @foreach ($tags as $tag)
                            <a href="{{ url('/tags/' . $tag->slug) }}" class="text-gray-900 no-underline shadow-sm my-1.5">
                                <li>
                                    <div class="px-4 py-2">
                                        {{$tag->title}}
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
