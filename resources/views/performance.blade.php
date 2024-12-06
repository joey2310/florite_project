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

        h6,
        h5 {
            font-size: 6px;
        }

        .logo-img {
            width: auto;
            height: 30%;
        }

        .graph-img {
            width: 90%;
            height: auto;
        }

        tr {
            height: 5px;
        }
    }
    </style>
</head>

<body>
    <div class="container border border-3 border-dark" style="--bs-gutter-x: -1.5rem;">
        <div class="d-flex">
            <table class=" table-bordered border-dark border-3 text-center" style="width:50%">
                <tr>
                    <td>
                        <h6>Pump Type & Size</h6>
                    </td>
                    <td>
                        <h6>SUC.</h6>
                    </td>
                    <td>
                        <h6>DEL.</h6>
                    </td>
                    <td>
                        <h6>RPM.</h6>
                    </td>
                    <td>
                        <h6>DATE</h6>
                    </td>
                </tr>
                <td>
                    <h6>FVS-N-75 x 65 x 315</h6>
                </td>
                <td>
                    <h6>75</h6>
                </td>
                <td>
                    <h6>65</h6>
                </td>
                <td>
                    <h6>2900</h6>
                </td>
                <td>
                    <h6>29/04/2024</h6>
                </td>
            </table>
            <div class="d-flex m-1 text-center">
                <img class="logo-img" src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="20%" height="auto">
                <h5 class="ms-5">FLORITE ENGINEERING CORPORATION <br> Performance Curve</h5>
            </div>
        </div>
        <div>
            <table class="table-bordered border-dark border-3" style="width:100%">
                <tbody>
                    <tr>
                        <td style="width:10%">
                            <h6 class="text-center">Customer</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="ps-1">Bharat Petroleum Corporation Limited</h6>
                        </td>
                        <td colspan="3">
                        </td>
                        <td style="width:10%">
                            <h6 class="text-center">Liquid</h6>
                        </td>
                        <td style="width:11%" colspan="2">
                            <h6 class="text-center">MS / HSD / SKO</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-center">Location</h6>
                        </td>
                        <td colspan="3">
                            <h6 class="ps-1">Hyderabad</h6>
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
                            <h6 class="ps-1">Q1P - 4411</h6>
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
                            <h6 class="ps-1">25-12-2024</h6>
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
            <table class="table-bordered border-dark border-3" style=" width:100%">
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
        <div class="text-center">
            <img class="graph-img" style="margin: 10px;" src="{{ asset('graph.jpg') }}" alt="graph">
        </div>
        <div>
            <table class="table-bordered border-dark border-3" style="width:100%">
                <tbody>
                    <tr>
                        <td class="ps-3">
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
                        <td class="ps-3">
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