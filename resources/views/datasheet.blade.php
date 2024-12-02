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
        body {
            font-size: 14px;
            margin: 0;
            width: 100%;
            height: 100%;
        }

        .main-div {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        img {
            width: 150%;
            height: 100%;
        }
    }
    </style>
</head>

<body>
    <div class="container border border-dark border-3 mt-2 main-div">
        <div class="row justify-content-center border-bottom border-3 border-dark">
            <div class=" row col-6">
                <div class="col-4">
                    <img src="{{ asset('Screenshot 2024-08-20 233127.jpg') }}" alt="logo" width="250" height="100">
                </div>
                <div class="col-8 text-center align-self-center">
                    <h3> FLO-RITE ENGINEERING CORPORATION</h3>
                </div>
            </div>
            <div class="col-6">
                <div class=" text-center">
                    <h5 class="">MANUFACTURER ADDRESS</h5>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h6>ADDRESS</h6>
                    </div>
                    <div class="text-start col-10">
                        <h6>1st Floor, gala no.7, Janta industrial Estate, 162, Senapati Bapat
                            Marg, Opposite High street phoenix, Lower parel,
                            Mumbai-400013 Maharashtra</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center border-bottom border-3 border-dark">
            <h5>SUMMARY DATA SHEET</h5>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-8">
                <table>
                    <tr>
                        <td><strong>To,</strong></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Client</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->clientName}}</td>
                    </tr>
                    <tr>
                        <td><strong>Location</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->location }}</td>
                    </tr>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->contactName }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td><Strong>Contact No</Strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->contactNo }}</td>
                    </tr>
                    <tr>
                        <td><strong>Performance</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ round($data->capacity/16.67)}}m3/hr ({{ $data->capacity}}LPM) AT {{ $data->head}} Meters
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4" style="padding-right:0px !important;">
                <table>
                    <tr>
                        <td><strong>GEM No</strong></td>
                        <td class="pe-1"> : </td>
                        <td>{{ $data->gemNo }}</td>
                    </tr>
                    <tr>
                        <td><strong>Date</strong></td>
                        <td> : </td>
                        <td>{{ $data->gemDate }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ref No</strong></td>
                        <td> : </td>
                        <td>{{ $data->q1p }}</td>
                    </tr>
                    <tr>
                        <td><strong>Date</strong></td>
                        <td> : </td>
                        <td>{{ $data->q1pDate }}</td>
                    </tr>
                    <tr>
                        <td><strong>Document </strong></td>
                        <td> : </td>
                        <td>{{ $data->docNo }}</td>
                    </tr>
                </table>
                <table class="table table-bordered border border-dark border-3 table-sm text-center"
                    style="margin-bottom: -2px !important;">
                    <tr>
                        <td class="text-start"><strong>Prepared By</strong></td>
                        <td class="text-uppercase">{{ $data->prepby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    <tr>
                        <td class="text-start"><strong>Checked By</strong></td>
                        <td class="text-uppercase">{{ $data->checkby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    <tr>
                        <td class="text-start">
                            <strong>Approved By</strong>
                        </td>
                        <td class="text-uppercase">{{ $data->appby }}</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    <tr>
                        <td class="text-start"><strong>Revision</strong></td>
                        <td class="text-uppercase">0</td>
                        <td>Date</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-4 text-center py-2" style="border-right: 3px solid black;">
                <h6><strong>Pump Model: {{ $data->pumpModel }}</strong></h6>
            </div>
            <div class="col-8 my-2 ps-5">
                <h6><strong>Pump Type: Vertical Sump Pump As per API 610 (11th Edition)</strong></h6>
            </div>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-4" style="border-right: 3px solid black;">
                <table>
                    <tr>
                        <td class="pe-5"><strong>Liquid</strong></td>
                        <td class="pe-2"> : </td>
                        <td>{{ $data->liquid }}</td>
                    </tr>
                    <tr>
                        <td class="pe-1"><strong>Sp. Gr.</strong></td>
                        <td> : </td>
                        <td>{{ $data->spGr }}</td>
                    </tr>
                    <tr>
                        <td class="pe-1"><strong>Op. Temp</strong></td>
                        <td> : </td>
                        <td>{{ $data->temp }} ℃</td>
                    </tr>
                    <tr>
                        <td class="pe-1"><strong>Quantity: </strong></td>
                        <td> : </td>
                        <td>{{ $data->qty }} Nos</td>
                    </tr>
                </table>
            </div>
            <div class="col-4" style="border-right: 3px solid black;">
                <table>
                    <tr>
                        <td><strong>Capacity</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->capacity }} LPM</td>
                    </tr>
                    <tr>
                        <td><strong>Total Head (Mts.)</strong></td>
                        <td class="px-2"> : </td>
                        <td> {{ $data->head }} Mts (WRT Product)</td>
                    </tr>
                    <tr>
                        <td><strong>Total Head (Mts.)</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->head * $data->spGr }} Mts (WRT Water)</td>
                    </tr>
                    <tr>
                        <td><strong>Suct. Lift (Mts.)</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->sucLift }} </td>
                    </tr>
                    <tr>
                        <td><strong>NPSH - A</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->npsha }} Mts</td>
                    </tr>
                    <tr>
                        <td><strong>NPSH - R</strong></td>
                        <td class="px-2"> : </td>
                        <td>{{ $data->npshr }} Mts</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <table>
                    <tr>
                        <td class=""><strong>% of Solids </strong></td>
                        <td> : </td>
                        <td>Nil</td>
                    </tr>
                    <tr>
                        <td class="me-4"><strong>Max.solid size</strong></td>
                        <td> : </td>
                        <td>NA</td>
                    </tr>
                    <tr>
                        <td class="pe-5"><strong>Shaft Sealing </strong></td>
                        <td> : </td>
                        <td>{{ $data->seal }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-8 text-center py-1" style="border-right: 3px solid black;">
                <h6><strong>PUMP DUTIES AND MOTOR (DRIVER) DETAILS</strong></h6>
            </div>
            <div class="col-4 text-center">
                <h6><strong>MATERIAL OF CONSTRUCTION</strong></h6>
            </div>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-4" style="border-right: 3px solid black;">
                <table>
                    <tr>
                        <td class="pe-5"><strong>Suct.Size</strong></td>
                        <td> : </td>
                        <td>{{ $data->spGr }}</td>
                    </tr>
                    <tr>
                        <td><strong>Del. Size</strong></td>
                        <td> : </td>
                        <td>{{ $data->spGr }}</td>
                    </tr>
                    <tr>
                        <td><strong>No. of Stages</strong></td>
                        <td> : </td>
                        <td>1(One)</td>
                    </tr>
                    <tr>
                        <td><strong>Flange drilling</strong></td>
                        <td> : </td>
                        <td>ANSI B 16.5 (Class 150#)</td>
                    </tr>
                    <tr>
                        <td><strong>Lubrication</strong></td>
                        <td> : </td>
                        <td> Grease</td>
                    </tr>
                    <tr>
                        <td><strong>Bearing Type</strong></td>
                        <td> : </td>
                        <td>Antifriction Brgs</td>
                    </tr>
                </table>
            </div>
            <div class="col-4" style="border-right: 3px solid black;">
                <table>
                    <tr>
                        <td><strong>Efficiency (%)</strong></td>
                        <td>:</td>
                        <td>{{ $data->eff }} </td>
                    </tr>
                    <tr>
                        <td><strong>K.W. absorbed</strong></td>
                        <td>:</td>
                        <td> {{ round(($data->capacity*$data->head*$data->spGr)/(1.34*45*$data->eff),2) }} KW</td>
                    </tr>
                    <tr>
                        <td><strong>Motor RPM</strong></td>
                        <td>:</td>
                        <td>2900 RPM </td>
                    </tr>
                    <tr>
                        <td><strong>Motor K. W</strong></td>
                        <td>:</td>
                        <td>{{ round((($data->capacity*$data->head*$data->spGr)/(1.34*45*$data->eff))*1.25,0) }} KW
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Coupling. Type </strong></td>
                        <td>:</td>
                        <td>Rathi Lovejoy</td>
                    </tr>
                    <tr>
                        <td><strong>Rotation (Drive End) </strong></td>
                        <td>:</td>
                        <td>Clockwise </td>
                    </tr>
                    <tr>
                        <td><strong>Coupling Guard </strong></td>
                        <td>:</td>
                        <td>Non Sparking Aluminium </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <table>
                    <tr>
                        <td><strong>Casing</strong></td>
                        <td> : </td>
                        <td>Carbon Steel ASTM A 216 Gr WCB</td>
                    </tr>
                    <tr>
                        <td><strong>Casing Wear Rings </strong></td>
                        <td> : </td>
                        <td>12% CHR Hardened</td>
                    </tr>
                    <tr>
                        <td><strong>Impeller</strong></td>
                        <td> : </td>
                        <td>12% CHR</td>
                    </tr>
                    <tr>
                        <td><strong>Imp. Wear Rings</strong></td>
                        <td> : </td>
                        <td>12% CHR Hardened</td>
                    </tr>
                    <tr>
                        <td><strong>Shaft</strong></td>
                        <td> : </td>
                        <td>AISI 4140</td>
                    </tr>
                    <tr>
                        <td><strong>Shaft sleeves </strong></td>
                        <td> : </td>
                        <td>SS 304</td>
                    </tr>
                    <tr>
                        <td><strong>Bearing Housing</strong></td>
                        <td> : </td>
                        <td>ASTM A 216 WCB Gr 216</td>
                    </tr>
                    <tr>
                        <td><strong>Column Pipe </strong></td>
                        <td> : </td>
                        <td>ASTM A 106 Gr B</td>
                    </tr>
                    <tr>
                        <td><strong>Discharge Pipe </strong></td>
                        <td> : </td>
                        <td>ASTM A 106 Gr B</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row text-center border-bottom border-3 border-dark">
            <h5>MOTOR DETAILS:</h5>
        </div>
        <div class="row border-bottom border-3 border-dark">
            <div class="col-3" style="border-right: 3px solid black;">
                <tr>
                    <td><strong>Rating KW : 5.5 </strong></td>
                </tr>
            </div>
            <div class="col-3" style="border-right: 3px solid black;">
                <tr>
                    <td><strong>Make : CGL/BBL/LHP </strong></td>
                </tr>
            </div>
            <div class="col-3" style="border-right: 3px solid black;">
                <tr>
                    <td><strong>RPM : 2900 </strong></td>
                </tr>
            </div>
            <div class="col-3">
                <tr>
                    <td><strong>Mounted : FLANGE MOUNTED </strong></td>
                </tr>
            </div>
        </div>
        <div class="row border-bottom-0 border-3 border-dark">
            <div class="col-10">
                <strong>
                    <td>
                        <h5><u>Motor Details - Flame Proof Motor (IE2)</u></h5>
                    </td>
                </strong>
                <td>TOTALLY ENCLOSED FAN COOLED ROTOR SQUIRREL CAGE FLAME PROOF INDUCTION MOTOR</td><br>
                <td>ENCLOSURE CONFIRMING TO PROTECTION IP-55, CONTINUOUSLY RATED [S1],</td><br>
                <td>SUITABLE FOR OPERATION ON 415V +/-10%, 3 PHASE, 50Hz +/-5%, AC SUPPLY</td><br>
                <td>WITH AMBIENT 50 DEG.C, CLASS ‘F’ INSULATION WITH TEMP. RISE LIMITED TO</td><br>
                <td>‘B’ CLASS CONFIRMING TO IS-2148 AND SUITABLE FOR</td><br>
                <td>CLASS II, DIV 1 FOR GROUP IIA AND IIB GASES. IEC 60034</td><br>
                <td>STARTING WILL BE STAR DELTA.</td><br>
            </div>
            <div class="col-2 text-center mt-auto">
                <h6>Page No.01</h6>
            </div>
        </div>
</body>