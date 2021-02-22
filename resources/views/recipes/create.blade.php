<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
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
    </body>
</html>
