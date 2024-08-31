<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Florite</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="home" method="POST">
        @csrf
        <div>
            <div class="container text-center">
                <h3 class="text-primary m-3">Welcome to FLO-RITE ENGINEERING CORPORATION LTD.</h3>
                <a href="{{ route('ds') }}" class="btn btn-primary">Datasheet</a>
                <a href="{{ route('apids') }}" class="btn btn-primary"> API Datasheet</a>
                <a href="{{ route('gad') }}" class="btn btn-primary">GAD</a>
                <a href="{{ route('users') }}" class="btn btn-primary">Users</a>
                <a href="{{ route('list') }}" class="btn btn-primary">List</a>
            </div>
        </div>
    </form>
</body>

</html>