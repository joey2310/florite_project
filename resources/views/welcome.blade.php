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
    <div class="text-center text-primary fw-bolder">
        <header>
            <div class="d-flex row">
                <div class="text-center pt-3 ms-5 col-1">
                    <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="250" height="100">
                </div>
                <div class="col-10">
                    <div class="" style="font-size: 40px;color:darkblue">
                        Florite Engineering Corporation Pvt. Ltd.
                    </div>
                    <div class="" style="font-size: 40px;">
                        <a class="btn btn-outline-dark">Home</a>
                        <a class="btn btn-outline-dark">Technical</a>
                        <a class="btn btn-outline-dark">Purchase</a>
                        <a class="btn btn-outline-dark">Production</a>
                        <a class="btn btn-outline-dark">Testing</a>
                        <a class="btn btn-outline-dark">Sales</a>
                        <a class="btn btn-outline-dark">Marketing</a>
                        <a class="btn btn-outline-dark">About</a>
                        <a class="btn btn-outline-dark">Contact</a>
                    </div>
                </div>
            </div>
            <hr aria-hidden="true" style="width: 100%; height: 3px; background-color: black;">
        </header>
        <div>
            <div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Screenshot 2024-08-20 233127.jpg" class="d-block w-80" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('home1') }}" class="btn btn-outline-success fs-3 m-5 p-3">Technical Documentation</a>
                <a href="{{ route('formula') }}" class="btn btn-outline-success fs-3 m-5 p-3">Formula</a>
                <a href="{{ route('users') }}" class="btn btn-outline-success fs-3 m-5 p-3">Login</a>
                <a href="{{ route('users') }}" class="btn btn-outline-success fs-3 m-5 p-3">Tenders Tracksheet</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>