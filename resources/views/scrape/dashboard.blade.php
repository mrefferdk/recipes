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
                    <h1>Kopier opskrift fra URL</h1>
                    <form method="POST" action="{{url('/api/v1/scrape')}}" id="scrapeForm">
                        @csrf
                        @method('POST')
                        <div class="mt-4">
                            <x-label for="url" :value="__('URL')" />
                            <x-input id="url" class="block mt-1 w-1/2" type="text" name="url" :placeholder="__('Skriv fuld URL')" value="http://www.dr.dk" required />
                        </div>
                        <div class="mt-4">
                            <x-button class="" type="submit">Udfør</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>

        $('#scrapeForm').submit(function (e) {
            e.preventDefault();
            initiateCopy()
        });

        console.log($('#scrapeForm'));

        function initiateCopy() {
            const link = '/api/v1/scrape/';
            $.post(link, {
                'url': $('#url').val()
            })

        }
    </script>
</x-app-layout>
