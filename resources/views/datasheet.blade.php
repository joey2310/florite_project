<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Florite</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-dark mt-2">
        <div class="row justify-content-center border border-dark border-3">
            <div class=" row col-6">
                <div class="col-4">
                    <img src="{{ asset('public\Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="500"
                        height="300">
                </div>
                <div class="col-8 text-center">
                    <h4> FLO-RITE ENGINEERING CORPORATION</h4>
                </div>
            </div>
            <div class="col-6 ">
                <div class="text-center">
                    <h5>MANUFACTURER ADDRESS</h5>
                </div>
                <div class="row">
                    <div class="text-end col-2">
                        <h6>ADDRESS :</h6>
                    </div>
                    <div class="text-start col-10">
                        <h6>1st Floor, gala no.7, Janta industrial Estate, 162, Senapati Bapat
                            Marg, Opposite High street phoenix, Lower parel,
                            Mumbai-400013 Maharashtra</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center border border-dark border-3">
            <h4>
                DATA SHEET
            </h4>
        </div>
        <div class="row border border-dark border-3">
            <div class="col-8">
                <table>
                    <tr>
                        <td>To,</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Client:</td>
                        <td>{{ $data->clientName }}</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>{{ $data->location }}</td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>{{ $data->contactName }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>Contact No:</td>
                        <td>{{ $data->contactNo }}</td>
                    </tr>
                    <tr>
                        <td>Performance:</td>
                        <td>{{ $data->capacity}}LPM, {{ $data->head}}Meters</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <table class="table table-bordered">
                    <tr>
                        <td>GEM No:</td>
                        <td>{{ $data->gemNo }}</td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td>{{ $data->gemDate }}</td>
                    </tr>
                    <tr>
                        <td>Ref No:</td>
                        <td>{{ $data->q1p }}</td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td>{{ $data->q1pDate }}</td>
                    </tr>
                    <tr>
                        <td>Document:</td>
                        <td>{{ $data->docNo }}</td>
                    </tr>
                </table>
                <table class="table table-bordered table table-sm text-center">
                    <tr>
                        <td>Prepared By</td>
                        <td class="text-uppercase">{{ $data->prepby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    <tr>
                        <td>Checked By</td>
                        <td class="text-uppercase">{{ $data->checkby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    <tr>
                        <td>Approved By</td>
                        <td class="text-uppercase">{{ $data->appby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>