<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todoist</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- app.css -->
    <link href="/css/main.css" rel="stylesheet" type="text/css">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div style="display: block;">
            <h1 style="color: #ef3b2d;">Todoist</h1>

            <form method="POST" action="{{ route('saveTodo') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <input type="t ext" name="todoItem" id="todoItem" class="form-control" placeholder="Enter new todo item" required>
                <button type="submit" class="btn-default">Save</button>
            </form>

            @foreach ($todoItems as $todoItem)
            <form method="POST" action="{{ route('completeTodo', $todoItem->id) }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <p style="color: white;">
                    {{ $todoItem->todo }}&nbsp;&nbsp;
                    <button type="submit" style="color: green;">✔</button>
                </p>
            </form>
            @endforeach
        </div>
    </div>
</body>

</html>