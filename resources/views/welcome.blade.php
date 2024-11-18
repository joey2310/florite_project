<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Florite Pumps</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-primary fw-bolder">
        <header>
            <div class="d-flex row">
                <div class="text-center m-5 col-1">
                    <img src="{{ asset('Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="250" height="100">
                </div>
                <div class="col-10" style="margin-top:65px; height: 100px; font-size: 45px;">
                    Florite Engineering Corporation Pvt. Ltd.
                </div>  
            </div>
        </header>
        <div>
            <a href="{{ route('home1') }}" class="btn btn-outline-success fs-3 m-5 p-3">Technical Documentation</a>
            <a href="{{ route('formula') }}" class="btn btn-outline-success fs-3 m-5 p-3">Formula</a>
            <a href="{{ route('users') }}" class="btn btn-outline-success fs-3 m-5 p-3">Login</a>
                <a href="{{ route('users') }}" class="btn btn-outline-success fs-3 m-5 p-3">Tenders Tracksheet</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>