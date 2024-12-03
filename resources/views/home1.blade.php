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
                        <a href="{{ route('home1') }}" class="btn btn-outline-dark">Technical</a>
                        <a class="btn btn-outline-dark">Purchase</a>
                        <a class="btn btn-outline-dark">Production</a>
                        <a class="btn btn-outline-dark">Testing</a>
                        <a class="btn btn-outline-dark">Sales</a>
                        <a class="btn btn-outline-dark">Marketing</a>
                        <a class="btn btn-outline-dark">About</a>
                        <a href="{{ route('contact')}}" class="btn btn-outline-dark">Contact</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-start pe-3 pt-5 mt-4">
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
    <div class="d-flex justify-content-between pb-2">
        <div class="ms-3">
            <a href="{{ route('home') }}" class="btn btn-outline-success"><i class="fa fa-solid fa-plus"></i> Add
                Datasheet</a>
        </div>
        <div class="me-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-success"><i class="fa fa-solid fa-chevron-left"></i>
                Back</a>
        </div>
    </div>
    <div>
        <table class=" table table-striped table-bordered table-hover text-center">
            <thead>
                <tr class="table-primary">
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
                                            <a href="{{ route('performance.show', $member['id']) }}"
                                                class="btn btn-secondary btn-lg">Performance Curve</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>