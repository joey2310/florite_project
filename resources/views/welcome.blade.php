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
    <header style="background-color:aliceblue;">
        <div class="text-center text-primary fw-bolder">
            <div class="d-flex row">
                <div class="text-center ps-5 pt-3 col-2">
                    <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="250" height="100">
                </div>
                <div class="col-7">
                    <div class="pt-2" style="color:darkblue">
                        <h1>Florite Engineering Corporation Pvt. Ltd.</h1>
                    </div>
                    <div class="" style="font-size: 30px;">
                        <a class="btn btn-outline-dark">Home</a>
                        <a href="{{ route('home1') }}" class="btn btn-outline-dark">Technical</a>
                        <a class="btn btn-outline-dark">Purchase</a>
                        <a class="btn btn-outline-dark">Production</a>
                        <a class="btn btn-outline-dark">Testing</a>
                        <a class="btn btn-outline-dark">Sales</a>
                        <a class="btn btn-outline-dark">Marketing</a>
                        <a class="btn btn-outline-dark">About</a>
                        <a class="btn btn-outline-dark">Contact</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-end pe-3">
                        <a href="{{ route('users') }}" class="btn btn-outline-dark mt-2">Logout</a>
                    </div>
                    <div class="d-flex justify-content-start pe-3 mt-3">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" style="width:270px" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr aria-hidden="true" style="width: 100%; height: 3px; background-color: black;">
    </header>
    <div class="text-center text-primary fw-bolder">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img src="scroll1.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll2.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll3.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll4.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll5.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll6.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll7.jpg" class="" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="scroll8.jpg" class="" alt="...">
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('home1') }}" class="btn btn-outline-success fs-5">Technical Documentation</a>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>