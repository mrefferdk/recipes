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
            <form method="POST" action="/recipes/{{$recipe->id}}">
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
    </body>
</html>
