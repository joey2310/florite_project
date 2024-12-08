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
    <style>
    @media print {
        .main-div {
            font-size: 8px;
        }

        h6 {
            font-size: 9px;
        }

        h5 {
            margin-top: 25px;
            font-size: 12px;
        }

        img {
            width: 100%;
            height: 55%;
            margin-top: 25px;
        }

        .lines {
            font-size: 10px;
        }
    }
    </style>
</head>

<body>
    <div class=" container border border-3 border-end border-dark main-div border border-bottom-0 mt-5"
        style="--bs-gutter-x: -1.5rem;">
        <div class="row my-5">
            <div class="col-2 text-end">
                <h6>CLIENT :</h6>
                <h6>PROJECT :</h6>
                <h6>MODEL NO :</h6>
                <h6>CAPACITY :</h6>
                <h6>DIFF. HEAD :</h6>
                <h6>QUANTITY :</h6>
            </div>
            <div class="col-10">
                <h6>{{ $apidata->clientName}}</h6>
                <h6>Composite Works For ATF Pipeline From BPCL Piyala Dispatch Terminal To BPCL JEWRA Terminal</h6>
                <h6>FVS-N-50 x 32 x 200</h6>
                <h6>167 LPM</h6>
                <h6>50 Mts</h6>
                <h6>4 Nos.</h6>
            </div>
        </div>
        <div class="row" style="margin-top:80px;">
            <div class="col-2 text-end">
                <h6>COMMENTS :</h6>
            </div>
            <div class="col-10 lines">
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
                ________________________________________________________________________________________________________________
            </div>
        </div>
        <div class="p-5" style="margin-top:80px;">
            <table class="table table-bordered border border-dark border-2 table-sm text-center">
                <tbody>
                    <tr>
                        <h6 class="text-center">DATASHEETS</h6>
                    </tr>
                    <tr class="text-center">
                        <td>
                        </td>
                        <td>
                            <h6>Item No.</h6>
                        </td>
                        <td>
                            <h6>A</h6>
                        </td>
                        <td>
                            <h6>Item No.</h6>
                        </td>
                        <td>
                            <h6>A</h6>
                        </td>
                        <td>
                            <h6>Item No.</h6>
                        </td>
                        <td>
                            <h6>A</h6>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>Pump</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="text-center">
                        <td>Motor</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="text-center">
                        <td>Gear</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="text-center">
                        <td>Turbine</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h6>APPLICABLE OVERLAY STANDARDS :</h6>
        </div>
        <div style="margin-top:80px;">
            <table class="table table-bordered border-top border-bottom border-dark border-3 text-center"
                style="margin-bottom:-1px;">
                <tbody>
                    <tr style="height:30px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="4" style="width:150px "><img src="{{ asset('flo-rite-pumps-logo.jpg') }}"
                                alt="logo" width="100" height="60"></td>
                        <td class="border-dark border-1 border-end" rowspan="4" style="width:100px">
                            <h5>FLORITE ENGINEERING CORPORATION</h5>
                        </td>
                    </tr>
                    <tr style="height:30px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="height:20px;">
                        <td>0</td>
                        <td style="width:16%">29-11-2024</td>
                        <td>Datasheet</td>
                        <td style="width:5%">P.B</td>
                        <td style="width:5%">G.A</td>
                    </tr>
                    <tr style="height:20px;">
                        <td>Rev</td>
                        <td>Date</td>
                        <td>Description</td>
                        <td>By</td>
                        <td>Checked</td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="3"></td>
                        <td colspan="3" rowspan="3">
                            <h6 class="mt-4">DATA SHEET FOR VERTICAL SUSPENDED CENTRIFUGAL PUMP (VS4)</h6>
                        </td>
                        <td class="text-start" colspan="2">REF NO. : -O - 4385 , DATE : 29/07/2024</td>
                    </tr>
                    <tr class="text-start">
                        <td colspan="2">(SHEET 1 OF 7), Rev. 0</td>
                    </tr>
                    <tr class="text-start">
                        <td colspan="2">DATA SHEET NO.- V11503220-DT</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class=" container border border-3 border-end border-dark main-div border border-bottom-0"
        style="--bs-gutter-x: -1.5rem;">
    </div>
</body>

</html>