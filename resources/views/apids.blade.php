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
    /* Normal screen styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .a4-div {
        width: 210mm;
        height: 297mm;
        border: 1px solid black;
        box-sizing: border-box;
        background-color: white;
        padding: 20mm;
    }

    /* Print-specific styles */
    @media print {
        body {
            background-color: red   ;
            margin: 0;
            padding: 0;
        }

        .a4-div {
            border: none;
            /* Remove border for printing */
            margin: 0;
            width: 100%;
            /* Optional: Expand to full page width */
            height: auto;
            /* Adjust height automatically */
            page-break-after: always;
            /* Ensures a new page after this div */
        }
    }
    </style>
</head>

<body>
    <div class="container border border-dark border-3 mt-5 a4-div">
        <div>
            <br>
            <h6>CLIENT : {{ $apidata->clientName ?? 'na'}}</h6>
            <h6>PROJECT : Composite Works For ATF Pipeline From BPCL Piyala Dispatch Terminal To BPCL JEWRA Terminal
            </h6>
            <h6>MODEL NO : F VS-N-50 x 32 x 200</h6>
            <h6>CAPACITY : 167 LPM</h6>
            <h6>DIFF. HEAD : 50 Mts</h6>
            <h6>QUANTITY : 4 Nos.</h6>
        </div>
        <br>
        <br>
        <div>
            <h6>COMMENTS:_____________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
            <h6>________________________________________________________________________
            </h6>
        </div>
        <div style="margin-left:50px; margin-bottom:100px; padding:10px">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <h6 class="text-center">DATASHEET</h6>
                    </tr>
                    <tr class="text-center">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>`
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row border border-dark border-2">
            <div class="col-8 border border-dark border-1">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>`
                            <td>0</td>
                            <td>20/07/2024</td>
                            <td>DATA SHEET</td>
                            <td>P.B</td>
                            <td>G.A</td>
                        </tr>
                        <tr>
                            <td>Rev</td>
                            <td>Date</td>
                            <td>Description</td>
                            <td>By</td>
                            <td>Checked</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row border border-dark border-1">
                    <div class="col-4 mt-2">
                        <img src="{{ asset('Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="140" height="50">
                    </div>
                    <div class="col-8 text-center align-self-center">
                        <h4> FLO-RITE ENGINEERING CORPORATION</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>