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

        .pg2 {
            font-size: 7px;
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
            <table class="table-bordered border-top border-bottom border-dark border-3 text-center"
                style="margin-bottom:-1px;">
                <tbody>
                    <tr style="height:30px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="4" style="width:8%">
                            <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="150" height="60">
                        </td>
                        <td rowspan="4" class="text-center" style="width:15%">
                            FLO-RITE ENGINEERING CORPORATION
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
                        <td style="width:5%">0</td>
                        <td style="width:12%">29-11-2024</td>
                        <td style="width:40%">Datasheet</td>
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
    <br>
    <br>
    <div class=" container border border-3 border-end border-dark main-div border border-bottom-0"
        style="--bs-gutter-x: -1.5rem;">
        <div>
            <table style="font-size:12px">
                <tbody>
                    <tr class="pg2">
                        <td style="width:10%">APPLICABLE TO</td>
                        <td style="width:43%" colspan="3">: PURCHASE</td>
                        <td style="width:10%">APPLICABLE STANDARD</td>
                        <td style="width:45%" colspan="3">: API 610 11th EDITION</td>
                    </tr>
                    <tr class="pg2">
                        <td>FOR</td>
                        <td colspan="3">: M/s. Bharat Petroleum Corporation Limited</td>
                        <td>REF NO.</td>
                        <td>: O - 4385</td>
                    </tr>
                    <tr class="pg2">
                        <td>LOCATION</td>
                        <td colspan="3">: BPCL JEWRA Terminal</td>
                        <td>DATE</td>
                        <td>: 29-07-2024</td>
                    </tr>
                    <tr class="pg2">
                        <td>NO. REQ</td>
                        <td>: 4 (FOUR)</td>
                        <td>PUMP SIZE</td>
                        <td>: 50 X 32 / 200</td>
                        <td>TYPE</td>
                        <td>: Vertical Centrifugal Self Pump (As per API 610 - 11th Edition)</td>
                        <td style="width:20%">No. STAGES : 1 (One)</td>
                    </tr>
                    <tr class="pg2">
                        <td>MANUFACTURER</td>
                        <td colspan="3">: FLO-RITE ENGINEERING CORPORATION</td>
                        <td>MODEL</td>
                        <td>: FVS-N-50 X 32 / 200</td>
                        <td>SERIAL NO. :</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table class="text-center table-bordered border-dark border-3">
                <thead>
                    <tr>
                        <td colspan="5"> LIQUID CHARACTERISTICS </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                        <td> Units </td>
                        <td> Maximum </td>
                        <td> Minimum </td>
                        <td rowspan="6" style="width:15%"> NOTE : Max & Min values refer only to the proprty listed.</td>
                        <td rowspan="6" style="width:30%"> SERVICE : PUMPS OPERATE IN CORROSION DUE TO EROSION DUE TO H2S
                            CONCENTRATION (ppm)</td>
                    </tr>
                    <tr>
                        <td>LIQUID TYPE OR NAME</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table class="text-center table-bordered border-dark border-3">
                <tbody>
                    <tr>
                        <td colspan="4"></td>
                        <td style="width:6%">CLIENT</td>
                        <td>Bharat Petroleum Corporation Limited </td>
                        <td rowspan="3" style="width:8%">
                            <img src="{{ asset('flo-rite-pumps-logo.jpg') }}" alt="logo" width="150" height="60">
                        </td>
                        <td rowspan="3" class="text-center" style="width:15%">
                            FLO-RITE ENGINEERING CORPORATION
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width:8%">PREP.BY</td>
                        <td style="width:8%">CHKD.BY</td>
                        <td style="width:8%">APRD.BY</td>
                        <td rowspan="2"> ADDRESS</td>
                        <td rowspan="2">BPCL JEWRA TERMINAL</td>
                    </tr>
                    <tr>
                        <td>NAME</td>
                        <td>P.B</td>
                        <td>G.A</td>
                        <td>G.A</td>
                    </tr>
                    <tr>
                        <td>DATE</td>
                        <td>10-12-2024</td>
                        <td>10-12-2024</td>
                        <td>10-12-2024</td>
                        <td colspan="2" rowspan="2">DATA SHEET FOR VERTICAL SUSPENDED CENTRIFUGAL PUMP (VS4) </td>
                        <td colspan="4" class="text-start"> REF NO. : -O - 4385 DATE : 29/07/2024 </td>
                    </tr>
                    <tr class="text-start">
                        <td colspan="4">APPROVED</td>
                        <td colspan="4"> (SHEET 2 OF 7), Rev. 0 </td>
                    </tr>
                    <tr class="text-start">
                        <td colspan="6"></td>
                        <td colspan="4"> DATA SHEET NO.- V11503220-DT </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>