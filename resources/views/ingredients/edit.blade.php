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
            <form method="POST" action="/ingredients/{{$ingredient->id}}">
                @csrf
                @method('PUT')
                <h1>Edit ingredient: {{$ingredient->name}}</h1>
                <div>Name: <input type="text" name="name" placeholder="Write a name here" value="{{$ingredient->name}}"/></div>
                <div>Amount: <input type="text" name="amount" value="{{$ingredient->amount}}"/></div>
                <div>Type (g, kg, l etc): <input type="text" name="type" value="{{$ingredient->type}}"/></div>
                <input type="hidden" name="order" value="1"/>
                <input type="text" name="recipe_id" value="{{$ingredient->recipe_id}}"/>
                <div><button type="submit">Save</button></div>

            </form>




        </div>
    </body>
</html>
