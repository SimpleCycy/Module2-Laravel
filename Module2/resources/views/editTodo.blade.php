<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
    <a href="/">View To Do list</a>
    <div class="container text-center">

    <form action="../editTodo/{{$toDoArr->id}}">
            <input type="text" name="name" value="{{$toDoArr->name}}" class='form-control'>
            <input type="submit">
    </form>
    
    </div>

    </body>
</html>
