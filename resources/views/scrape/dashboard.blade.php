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
                    <form method="POST" action="{{route('api.scrape')}}" id="scrapeForm">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="userId" id="userId" value="{{$userId}}"/>
                        <input type="hidden" name="userIdHash" id="userIdHash" value="{{$userIdHash}}"/>
                        <div class="mt-4">
                            <x-label for="url" :value="__('URL')" />
                            <x-input id="url" class="block mt-1 w-full" type="text" name="url" :placeholder="__('Skriv fuld URL')" value="https://www.valdemarsro.dk/verdens-nemmeste-og-bedste-hjemmebagte-boller/" required />
                        </div>
                        <div class="mt-4">
                            <x-button class="" type="submit" id="btn-do-scrape">Udfør</x-button>
                            <span id="status-message" class=""></span>
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

        function initiateCopy() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            const link = '/api/v1/scrape/';
            disableButton();
            console.log('{{csrf_token()}}', 'weeeee1');
            console.log('{{csrf_token()}}', 'weeeee2');
            resetStatusMessage();
            $.post(link, {
                url: $('#url').val(),
                userId: $('#userId').val(),
                userIdHash: $('#userIdHash').val()
            }).fail(function (response) {
                console.log(response);
                updateStatusMessage(response.responseJSON.error);
            }).done(function(response) {
                enableButton();
                resetUrl();
                console.log(response);
                let recipeData = response.recipe;
                let url = response.url;
                let msg = '<a href="' + url + '" target="_blank">' + recipeData.title + '</a>';
                updateStatusMessage(msg);
            }).always(function () {
               enableButton();
            });
        }

        function updateStatusMessage(text) {
            $('#status-message').html(text);
        }

        function resetStatusMessage() {
            $('#status-message').html(' ');
        }

        function resetUrl() {
            $('#url').val('');
        }
        function enableButton() {
            $('#btn-do-scrape').prop('disabled', false);
        }
        function disableButton() {
            //$('#btn-do-scrape').prop('disabled', true);
        }


    </script>
</x-app-layout>
