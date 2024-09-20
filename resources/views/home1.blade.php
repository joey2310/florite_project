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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="p-3">
            <h3 class="text-primary text-center">Welcome to FLO-RITE ENGINEERING CORPORATION LTD.</h3>
        </div>
        <div class="d-flex justify-content-between pb-2">
            <div class="me-2">
                <a href="{{ route('home') }}" class="btn btn-outline-success"><i class="fa fa-solid fa-plus"></i> Add
                    Datasheet</a>
            </div>
            <div>
                <a href="{{ route('welcome') }}" class="btn btn-outline-success"><i
                        class="fa fa-solid fa-chevron-left"></i> Back</a>
            </div>
        </div>
        <div>
            <table class="table table-dark table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="3">Actions</th>
                        <th>Client</th>
                        <th>Location</th>
                        <th>Quotation No</th>
                        <th>Q1P Date</th>
                        <th>Gem No</th>
                        <th>Gem Date</th>
                        <th>Pump Model</th>
                        <th>Liquid</th>
                        <th>SP Gr</th>
                        <th>Qty</th>
                        <th>Capacity</th>
                        <th>Head</th>
                        <th>NPSH A</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maindata as $member)
                    <tr class="table-group-divider">
                        <td><a href="{{ route('datasheet.show', $member['id']) }}" class="btn btn-primary"><i
                                    class="fa fa-solid fa-eye fa-flip-horizontal" style="color: #2d00b3;"></i></a>
                        </td>
                        <td><a class="btn btn-warning"><i class="fa fa-solid fa-pencil"></i></a></td>
                        <td><a class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></a></td>
                        <td>{{$member['clientName']}}</td>
                        <td>{{$member['location']}}</td>
                        <td>{{$member['q1p']}}</td>
                        <td>{{$member['q1pDate']}}</td>
                        <td>{{$member['gemNo']}}</td>
                        <td>{{$member['gemDate']}}</td>
                        <td>{{$member['pumpModel']}}</td>
                        <td>{{$member['liquid']}}</td>
                        <td>{{$member['spGr']}}</td>
                        <td>{{$member['qty']}}</td>
                        <td>{{$member['capacity']}}</td>
                        <td>{{$member['head']}}</td>
                        <td>{{$member['npsha']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>