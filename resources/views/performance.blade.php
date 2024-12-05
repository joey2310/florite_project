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

        .head{
            font-size: 9px;
        }
        h6 {
            font-size: 9px;
        }
    }
    </style>
</head>

<body>
    <div class="border border-3 border-dark">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered border-dark border-3 text-center head" style="margin-bottom: -1px;">
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
            <div class="d-flex m-1 col-5 text-center head">
                <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="100" height="60">
                <h5 class=" ms-5">FLORITE ENGINEERING CORPORATION <br> Performance Curve</h5>
            </div>
        </div>
        <div>
            <table class="table table-bordered border-dark border-3" style="margin-bottom: -1px;">
                <tbody>
                    <tr>
                        <td>
                            <h6 class="text-center">Customer</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="">Bharat Petroleum Corporation Limited</h6>
                        </td>
                        <td colspan="3">
                        </td>
                        <td>
                            <h6 class="text-center">Liquid</h6>
                        </td>
                        <td colspan="2">
                            <h6 class="text-center">Slop</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Location</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="">Hyderabad</h6>
                        </td>
                        <td colspan="3">
                        </td>
                        <td>
                            <h6 class="text-center">Specific Gravity</h6>
                        </td>
                        <td colspan="2">
                            <h6 class="text-center">0.795</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Ref No.</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="">Q1P - 4411</h6>
                        </td>
                        <td colspan="3">
                        </td>
                        <td>
                            <h6 class="text-center">Viscosity (Cst)</h6>
                        </td>
                        <td colspan="2">
                            <h6 class="text-center">1.5</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Date</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="">25-12-2024</h6>
                        </td>
                        <td colspan="3">
                        </td>
                        <td>
                            <h6 class="text-center">Fluid Temp</h6>
                        </td>
                        <td>
                            <h6 class="text-center">40</h6>
                        </td>
                        <td>
                            <h6 class="text-center">°C</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Speed (RPM)</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Frequency (HZ)</h6>
                        </td>
                        <td colspan="2">
                            <h6 class="text-center">Pump Model:</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="text-center">FCH-N-CS 250 x 200 x 500</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Solid Size</h6>
                        </td>
                        <td>
                            <h6 class="text-center">0</h6>
                        </td>
                        <td>
                            <h6 class="text-center">mm</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">2900</h6>
                        </td>
                        <td>
                            <h6 class="text-center">50</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Flow</h6>
                        </td>
                        <td>
                            <h6 class="text-center">167 LPM</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Head</h6>
                        </td>
                        <td>
                            <h6 class="text-center">50 m</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Stage - 1</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Impeller Dia.</h6>
                        </td>
                        <td colspan="2">
                            <h6 class="text-center">460</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered border-dark border-3" style="margin-bottom: -1px;">
                <tbody>
                    <tr>
                        <td>
                            <h6 class="text-center">Pump Input</h6>
                        </td>
                        <td>
                            <h6 class="text-center">3.0 KW</h6>
                        </td>
                        <td>
                            <h6 class="text-center">NPSHA</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Flooded</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Size</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Pump Nozzle</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Recommended Pipe</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">PrimeMover Power</h6>
                        </td>
                        <td>
                            <h6 class="text-center">5.5 KW</h6>
                        </td>
                        <td>
                            <h6 class="text-center">NPSHR</h6>
                        </td>
                        <td>
                            <h6 class="text-center">1.4 m</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Suction (mm)</h6>
                        </td>
                        <td>
                            <h6 class="text-center">250</h6>
                        </td>
                        <td>
                            <h6 class="text-center">275</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Efficiency (%)</h6>
                        </td>
                        <td>
                            <h6 class="text-center">37%</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Shut off Head</h6>
                        </td>
                        <td>
                            <h6 class="text-center">57m</h6>
                        </td>
                        <td>
                            <h6 class="text-center">Discharge (mm)</h6>
                        </td>
                        <td>
                            <h6 class="text-center">200</h6>
                        </td>
                        <td>
                            <h6 class="text-center">225</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <img class="justify-content-center" src="{{ asset('graph.jpg') }}" alt="graph">

        </div>
        <div>
            <table class="table table-bordered border-dark border-3" style="margin-bottom: -1px;">
                <tbody>
                    <tr>
                        <td>
                            <h6>1. Pump Performance with : ISO-9906-GRII</h6>
                        </td>
                        <td class="text-center">
                            <h6>DRN BY.</h6>
                        </td>
                        <td class="text-center">
                            <h6>P.B</h6>
                        </td>
                        <td class="text-center">
                            <h6>DATE</h6>
                        </td>
                        <td class="text-center">
                            <h6>25-12-2024</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>2.NSPHa should be at least 0.5 m higher than NPSHr</h6>
                        </td>
                        <td class="text-center">
                            <h6>CHKD BY.</h6>
                        </td>
                        <td class="text-center">
                            <h6>G.A</h6>
                        </td>
                        <td class="text-center">
                            <h6>DATE</h6>
                        </td>
                        <td class="text-center">
                            <h6>25-12-2024</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>