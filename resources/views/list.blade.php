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
</head>

<body>
    <div class="fs-1">
        <h1>List from DB</h1>
        <h3 class="text-primary m-3">Welcome to FLO-RITE ENGINEERING CORPORATION LTD.</h3>
        <a href="{{ route('ds') }}" class="btn btn-outline-success">Datasheet</a>
        <a href="{{ route('apids') }}" class="btn btn-outline-success">API Datasheet</a>
        <a href="{{ route('gad') }}" class="btn btn-outline-success">GAD</a>
        <a href="{{ route('users') }}" class="btn btn-outline-success">Users</a>
        <a href="{{ route('list') }}" class="btn btn-outline-success">List</a>
        <a href="{{ route('home') }}" class="btn btn-outline-success">Back</a>
    </div>
    <div>
        <table class="table table-dark table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Client</th>
                    <th>Location</th>
                    <th>Contact Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Quotation No</th>
                    <th>Q1P Date</th>
                    <th>Gem No</th>
                    <th>Gem Date</th>
                    <th>Doc No</th>
                    <th>Doc Date</th>
                    <th>Prepared By</th>
                    <th>Checked By</th>
                    <th>Approved By</th>
                    <th>Date</th>
                    <th>Pump Model</th>
                    <th>Liquid</th>
                    <th>SP Gr</th>
                    <th>Temp</th>
                    <th>Qty</th>
                    <th>Capacity</th>
                    <th>Head</th>
                    <th>Suction Lift</th>
                    <th>NPSH A</th>
                    <th>NPSH R</th>
                    <th>Seal</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($maindata as $member)
                <tr class="table-group-divider">
                    <td>{{$member['id']}}</td>
                    <td>{{$member['clientName']}}</td>
                    <td>{{$member['location']}}</td>
                    <td>{{$member['contactName']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['contactNo']}}</td>
                    <td>{{$member['q1p']}}</td>
                    <td>{{$member['q1pDate']}}</td>
                    <td>{{$member['gemNo']}}</td>
                    <td>{{$member['gemDate']}}</td>
                    <td>{{$member['docNo']}}</td>
                    <td>{{$member['docDate']}}</td>
                    <td>{{$member['prepby']}}</td>
                    <td>{{$member['checkby']}}</td>
                    <td>{{$member['appby']}}</td>
                    <td>{{$member['date']}}</td>
                    <td>{{$member['pumpModel']}}</td>
                    <td>{{$member['liquid']}}</td>
                    <td>{{$member['spGr']}}</td>
                    <td>{{$member['temp']}}</td>
                    <td>{{$member['qty']}}</td>
                    <td>{{$member['capacity']}}</td>
                    <td>{{$member['head']}}</td>
                    <td>{{$member['sucLift']}}</td>
                    <td>{{$member['npsha']}}</td>
                    <td>{{$member['npshr']}}</td>
                    <td>{{$member['seal']}}</td>
                    <td><a href="{{ route('datasheet.show', $member['id']) }}" class="btn btn-primary btn-sm">View</a></td>
                    <td><button class="btn btn-warning btn-sm">Edit</button></td>
                    <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
