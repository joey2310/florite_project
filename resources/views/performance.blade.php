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
    <div class="border border-3 border-dark">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered border-dark border-3 text-center" style="margin-bottom: -2px;">
                    <tr>
                        <td> Pump Type & Size</td>
                        <td> SUC.</td>
                        <td> DEL.</td>
                        <td> RPM.</td>
                        <td> DATE</td>
                    </tr>
                    <td> FVS-N-75 x 65 x 315</td>
                    <td> 75</td>
                    <td> 65</td>
                    <td> 2900</td>
                    <td> 29/04/2024</td>
                </table>
            </div>
            <div class="d-flex m-1 col-5 text-center">
                <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="100" height="60">
                <h5 class=" ms-5">FLORITE ENGINEERING CORPORATION <br> Performance Curve</h5>
            </div>
        </div>
    </div>
</body>

</html>