<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1 class="text-primary m-3 text-center">Welcome to FLO-RITE ENGINEERING CORPORATION LTD</h1>
    <div class="text-center py-3">
        <img src="{{ asset('Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="250" height="100">
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="card py-2" style="width: 20%;">
            <div class="text-center pt-2">
                <h1>LOGIN</h1>
            </div>
            <div class="text-center py-2">
                <form action="users" method="POST">
                    @csrf
                    <div class="form-label py-2">
                        <input type="text" name="username" placeholder="Enter Username" style="width:80%" />
                    </div>
                    <div class="form-label py-2">
                        <input type="email" name="email" placeholder="Enter EmailID" style="width:80%" />
                    </div>
                    <div class="form-label py-2">
                        <input type="password" name="password" placeholder="Enter Password" style="width:80%" />
                    </div>
                    <div class="text-center py-2">
                        <button class="btn btn-dark" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>