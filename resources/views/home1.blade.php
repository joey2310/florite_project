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
        <div class="row">
            <div class="text-center col-3 mt-3">
                <img src="{{ asset('Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="100" height="40">
            </div>
            <div class="p-3 col-8">
                <h3 class="text-primary text-center">Welcome to FLO-RITE ENGINEERING CORPORATION LTD.</h3>
            </div>
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
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $member['id'] }}">
                                <i class="fa fa-solid fa-eye fa-flip-horizontal" style="color: #2d00b3;"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $member['id'] }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel{{ $member['id'] }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="m-3">
                                                <a href="{{ route('datasheet.show', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">Summary Datasheet</a>
                                            </div>
                                            <div class="m-3">
                                                <a href="{{ route('apids.show', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">API Datasheet</a>
                                            </div>
                                            <div class="m-3">
                                                <a href="{{ route('gad', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">GA Drawing</a>
                                            </div>
                                            <div class="m-3">
                                                <a href="{{ route('gad', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">Foundation Drawing</a>
                                            </div>
                                            <div class="m-3">
                                                <a href="{{ route('gad', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">Cross-Sectional Drawing</a>
                                            </div>
                                            <div class="m-3">
                                                <a href="{{ route('gad', $member['id']) }}"
                                                    class="btn btn-secondary btn-lg">QAP</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>