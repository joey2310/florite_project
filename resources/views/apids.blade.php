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
    <!-- Page 1 Start -->
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
    <!-- Page 1 End -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Page 2 Start -->
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
            <table class="text-center table-bordered border-dark border-3 ">
                <thead>
                    <tr>
                        <td colspan="5"> LIQUID CHARACTERISTICS </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:20%"> </td>
                        <td style="width:7%"> Units </td>
                        <td style="width:8%"> Maximum </td>
                        <td style="width:8%"> Minimum </td>
                        <td rowspan="6" style="width:12%" class="text-start align-top"> NOTE : Max & Min values refer
                            only to the proprty listed.
                        </td>
                        <td rowspan="18" style="width:30%" class="text-start align-top"> SERVICE : PUMPS OPERATE IN
                            CORROSION DUE TO EROSION DUE TO
                            H2S CONCENTRATION (ppm)</td>
                    </tr>
                    <tr>
                        <td class="text-end">LIQUID TYPE OR NAME</td>
                        <td></td>
                        <td colspan="2">SLOP</td>
                    </tr>
                    <tr>
                        <td class="text-end">VAPOR PRESSURE</td>
                        <td>kg/cm2</td>
                        <td colspan="2">0.90</td>
                    </tr>
                    <tr>
                        <td class="text-end">RELATIVE DENSITY</td>
                        <td>kg/dm3</td>
                        <td colspan="2">0.795</td>
                    </tr>
                    <tr>
                        <td class="text-end">SPECIFIC HEAT</td>
                        <td>kJ/(kg-K)</td>
                        <td colspan="2">2.09</td>
                    </tr>
                    <tr>
                        <td class="text-end">KINEMATIC VISCOSITY</td>
                        <td>CST @ 40°C</td>
                        <td colspan="2">1.5</td>
                    </tr>
                    <tr>
                        <td colspan="5">OPERATING CONDITIONS (6.1.2)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Units</td>
                        <td colspan="3">Rated</td>
                    </tr>
                    <tr>
                        <td class="text-end">NPSHa Datum</td>
                        <td></td>
                        <td colspan="3">C.L. Impeller</td>
                    </tr>
                    <tr>
                        <td class="text-end">PUMPING TEMPERATURE</td>
                        <td>°C</td>
                        <td colspan="3">40</td>
                    </tr>
                    <tr>
                        <td class="text-end">FLOW</td>
                        <td>m³/hr/LPM</td>
                        <td colspan="2">10</td>
                        <td colspan="1">167</td>
                    </tr>
                    <tr>
                        <td class="text-end">DISCHARGE PRESSURE : (6.3.2)</td>
                        <td>kg/cm2A</td>
                        <td colspan="3">4.31</td>
                    </tr>
                    <tr>
                        <td class="text-end">SUCTION PRESSURE</td>
                        <td>kg/cm2A</td>
                        <td colspan="3">0.34</td>
                    </tr>
                    <tr>
                        <td class="text-end">DIFFERENTIAL PRESSURE</td>
                        <td>kg/cm2A</td>
                        <td colspan="3">3.97</td>
                    </tr>
                    <tr>
                        <td class="text-end">DIFFERENTIAL HEAD</td>
                        <td>m</td>
                        <td colspan="3">50</td>
                    </tr>
                    <tr>
                        <td class="text-end">DISCHARGE HEAD</td>
                        <td>m</td>
                        <td colspan="3">54.28</td>
                    </tr>
                    <tr>
                        <td class="text-end">NPSHA</td>
                        <td>m</td>
                        <td colspan="3">FLOODED</td>
                    </tr>
                    <tr>
                        <td class="text-end">HYDRAULIC POWER</td>
                        <td>KW</td>
                        <td colspan="3">1.08</td>
                    </tr>
                    <tr>
                        <td colspan="7">SITE AND UTILITY DATA</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-evenly table-bordered border-dark border-1 pg2">
            <div style="width:60%">
                <table style="width:100%">
                    <tbody>
                        <tr>
                            <td>LOCATION</td>
                        </tr>
                        <tr>
                            <td>OUTDOOR</td>
                            <td>UNHEATED</td>
                            <td>SUN</td>
                        </tr>
                        <tr>
                            <td>MOUNTED AT</td>
                            <td>BASEPLATE</td>
                            <td>TROPICALISTATION REQD</td>
                        </tr>
                        <tr>
                            <td colspan="2">ELECTRIC AREA CLASSIFICATION</td>
                            <td>6.1.22 ZONE ZONE-1/2</td>
                        </tr>
                        <tr>
                            <td>GROUP</td>
                            <td>II A & B __________</td>
                            <td>TEMP CLASS T3</td>
                        </tr>
                        <tr>
                            <td>SITE DATA :</td>
                        </tr>
                        <tr>
                            <td>ELEVATION (MSL) :</td>
                            <td>__________ M</td>
                            <td>BAROMETER : __________ mmHg</td>
                            <td>RANGE OF AMBIENT</td>
                        </tr>
                        <tr>
                            <td>TEMPS:MIN / MAX</td>
                            <td>5 / 50 °C</td>
                        </tr>
                        <tr>
                            <td colspan="2">RELATIVE HUMIDITY: MIN / MAX</td>
                            <td>___________ / __________ %</td>
                        </tr>
                        <tr>
                            <td>UNUSUAL CONDITIONS</td>
                            <td>__________</td>
                        </tr>
                        <tr>
                            <td>UTILITY CONDITIONS</td>
                        </tr>
                        <tr>
                            <td>ELECTRICITY :</td>
                            <td colspan="2" rowspan="4">
                                <table class="table table-bordered border-dark border-1">
                                    <tbody>
                                        <tr>
                                            <td>DRIVERS</td>
                                            <td>HEATING</td>
                                            <td>CONTROL</td>
                                            <td>SHUTDOWN</td>
                                        </tr>
                                        <tr>
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
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>VOLTAGE</td>
                        </tr>
                        <tr>
                            <td>PHASE</td>
                        </tr>
                        <tr>
                            <td>HERTZ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width:50%">
                <table>
                    <tbody>
                        <tr>
                            <td style="width:10%" colspan="4">COOLING WATER :</td>
                        </tr>
                        <tr>
                            <td colspan="4">INLET</td>
                            <td rowspan="2" style="width:5%">
                                <table class="table table-bordered border-dark border-1" style="width:10%">
                                    <tbody>
                                        <tr>
                                            <td>RETURN</td>
                                            <td>DESIGN</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">TEMP. °C</td>
                            <td>_____Max</td>
                        </tr>
                        <tr>
                            <td>PRESS.</td>
                            <td>kg/cm2</td>
                            <td>_____Min</td>
                        </tr>
                        <tr>
                            <td colspan="4">COOLING WATER CHLORIDE CONCENTRATION:</td>
                            <td>ppm</td>
                        </tr>
                        <tr>
                            <td>INSTRUMENT AIR :</td>
                            <td>MAX</td>
                            <td> kg/cm2 A</td>
                            <td>MIN</td>
                            <td> kg/cm2 A</td>
                        </tr>
                        <tr>
                            <td>STEAM</td>
                        </tr>
                        <tr>
                            <td colspan="2">TEMP.</td>
                            <td colspan="2">°C</td>
                            <td class="text-end" colspan="2">Max</td>
                            <td rowspan="5" style="width:5%">
                                <table class="table table-bordered border-dark border-1" style="width:10%">
                                    <tbody>
                                        <tr>
                                            <td>DRIVERS</td>
                                            <td>HEATING</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-end" colspan="4">Min</td>
                        </tr>
                        <tr>
                            <td>PRESS.</td>
                            <td>kg/cm2</td>
                            <td class="text-end">Max</td>
                        </tr>
                        <tr>
                            <td class="text-end" colspan="4">Min</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-evenly table-bordered border-dark border-1">
            <div style="width:60%">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="6" style="width:10%" class="text-center table-bordered border-dark border-1">
                                PERFORMANCE</td>
                        </tr>
                        <tr>
                            <td colspan="5">PROPOSAL CURVE NO. : FVS-N-50 X 32 / 200 - 2</td>
                            <td>RPM : 2900</td>
                        </tr>
                        <tr>
                            <td colspan="5">As Tested Curve No. : FVS-N-50 X 32 / 200 - 2</td>
                        </tr>
                        <tr>
                            <td colspan="1">IMPELLER DIA</td>
                            <td colspan="1"> RATED : 190 mm</td>
                            <td colspan="2"> MAX : 210 mm</td>
                            <td colspan="2"> Min : 160 mm</td>
                        </tr>
                        <tr>
                            <td colspan="2">RATED POWER : 3.0 KW</td>
                            <td colspan="2">EFFICIENCY (%) : 37</td>
                        </tr>
                        <tr>
                            <td colspan="3">RATED CURVE BEP FLOW (at rated impeller dia)</td>
                            <td colspan="2">: 10.8 m³/hr</td>
                        </tr>
                        <tr>
                            <td colspan="1">MIN FLOW :</td>
                            <td colspan="1">THERMAL:</td>
                            <td colspan="1">STABLE</td>
                            <td colspan="1">: 1.6 m³/hr</td>
                        </tr>
                        <tr>
                            <td colspan="2">RATED OPERATING REGION (6.1.11) :</td>
                            <td colspan="1">8.64</td>
                            <td colspan="1">11.88</td>
                            <td colspan="1">m³/hr</td>
                        </tr>
                        <tr>
                            <td colspan="2">PREFERRED OPERATING REGION :</td>
                            <td colspan="1">7.56</td>
                            <td colspan="1">12.96</td>
                            <td colspan="1">m³/hr</td>
                        </tr>
                        <tr>
                            <td colspan="3">MAX HEAD @ RATED IMPELLER</td>
                            <td colspan="3">: 57 m</td>
                        </tr>
                        <tr>
                            <td colspan="3">MAX POWER @ RATED IMPELLER (6.8.9)</td>
                            <td colspan="3">:3.71 KW</td>
                        </tr>
                        <tr>
                            <td colspan="3">NPSHR AT RATED FLOW</td>
                            <td colspan="3">: 1.4 m</td>
                        </tr>
                        <tr>
                            <td colspan="3">CL PUMP TO U/S BASEPLATE</td>
                            <td colspan="3">: NA</td>
                        </tr>
                        <tr>
                            <td colspan="3">NPSH MARGIN AT RATED FLOW</td>
                            <td colspan="3">: -</td>
                        </tr>
                        <tr>
                            <td colspan="3">SPECIFIC SPEED (6.1.9)</td>
                            <td colspan="3">: 507</td>
                        </tr>
                        <tr>
                            <td colspan="3">SUCTION SPECIFIC SPEED LIMIT</td>
                            <td colspan="3">: 15100</td>
                        </tr>
                        <tr>
                            <td colspan="3">SUCTION SPECIFIC SPEED</td>
                            <td colspan="3">: 7404</td>
                        </tr>
                        <tr>
                            <td colspan="3">MAX. ALLOW SOUND PRESS. LEVEL REQD (6.1.14)</td>
                            <td colspan="3">: 85 (dBA) AT 1 METER</td>
                        </tr>
                        <tr>
                            <td colspan="3">EST MAX SOUND PRESS. LEVEL</td>
                            <td colspan="3">: 83 (dBA)</td>
                        </tr>
                        <tr>
                            <td colspan="3">MAX. SOUND POWER LEVEL REQ'D (6.1.14)</td>
                            <td colspan="3">: -</td>
                        </tr>
                        <tr>
                            <td colspan="3">EST MAX SOUND POWER LEVEL</td>
                            <td colspan="3">: -</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width:50%" class="table-bordered border-dark border-1">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="2" style="width:10%" class="text-center table-bordered border-dark border-1">
                                DRIVER (7.1.5)</td>
                        </tr>
                        <tr>
                            <td>Driver Type</td>
                            <td>: MOTOR</td>
                        </tr>
                        <tr>
                            <td>GEAR</td>
                            <td>: NO</td>
                        </tr>
                        <tr>
                            <td>VARIABLE SPEED REQUIRED</td>
                            <td>: NO</td>
                        </tr>
                        <tr>
                            <td>SOURCE OF VARIABLE SPEED</td>
                            <td>: NA</td>
                        </tr>
                        <tr>
                            <td>OTHER</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MANUFACTURER</td>
                            <td>: CGL/BBL/LHP</td>
                        </tr>
                        <tr>
                            <td>NAME PLATE POWER</td>
                            <td>: 5.5 KW</td>
                        </tr>
                        <tr>
                            <td>NOMINAL RPM</td>
                            <td>: 2900</td>
                        </tr>
                        <tr>
                            <td>RATED LAOD RPM FRAME OR MODEL</td>
                            <td>: 2900</td>
                        </tr>
                        <tr>
                            <td>ORIENTATION</td>
                            <td>: HORIZONTAL (FLANGE MOUNTED)</td>
                        </tr>
                        <tr>
                            <td>LUBE</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>BEARING TYPE</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bearing DE/ODE</td>
                            <td>6308-ZZ/6308-ZZ</td>
                        </tr>
                        <tr>
                            <td>STARTING METHOD</td>
                            <td>: STARTING WILL BE DOL</td>
                        </tr>
                        <tr>
                            <td>SEE DRIVER DATA SHEET</td>
                            <td>: Yes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
    <!-- Page 2 End -->
</body>

</html>