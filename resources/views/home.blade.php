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
        <div class="p-3">
            <h3 class="text-primary text-center">Welcome to FLO-RITE ENGINEERING CORPORATION LTD.</h3>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('home1') }}" class="btn btn-outline-success"><i class="fa fa-solid fa-chevron-left"></i>
                Back</a>
        </div>
        <form action="home" method="POST">
            @csrf
            <div>

                <div class="m-3 border border-black p-3">
                    <h3>Please Fill Client Details</h3>
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="clientName" class="form-label">Client</label>
                            <input type="text" class="form-control" id="clientName" name="clientName">
                        </div>
                        <div class="mb-1 col">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="mb-1 col">
                            <label for="contactName" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="contactName" name="contactName">
                        </div>
                        <div class="mb-1 col">
                            <label for="email" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-1 col">
                            <label for="contactNo" class="form-label">Contact No.</label>
                            <input type="tel" class="form-control" id="contactNo" name="contactNo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="q1p" class="form-label">Quotation No.</label>
                            <input type="text" class="form-control" id="q1p" name="q1p">
                        </div>
                        <div class="mb-1 col">
                            <label for="q1pDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="q1pDate" name="q1pDate">
                        </div>
                        <div class="mb-1 col">
                            <label for="gemNo" class="form-label">GEM No.</label>
                            <input type="text" class="form-control" id="gemNo" name="gemNo">
                        </div>
                        <div class="mb-1 col">
                            <label for="gemDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="gemDate" name="gemDate">
                        </div>
                        <div class="mb-1 col">
                            <label for="docNo" class="form-label">Document No.</label>
                            <input type="text" class="form-control" id="docNo" name="docNo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="docDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="docDate" name="docDate">
                        </div>
                        <div class="mb-1 col">
                            <label for="prepby" class="form-label">Prepared By</label>
                            <select id="prepby" name="prepby" class="form-control">
                                <option value="">--Please choose an option--</option>
                                <option value="pb">P.B</option>
                                <option value="sa">S.A</option>
                                <option value="av">A.V</option>
                                <option value="vb">V.B</option>
                                <option value="ga">G.A</option>
                            </select>
                        </div>
                        <div class="mb-1 col">
                            <label for="checkby" class="form-label">Checked By</label>
                            <select id="checkby" name="checkby" class="form-control">
                                <option value="">--Please choose an option--</option>
                                <option value="pb">P.B</option>
                                <option value="sa">S.A</option>
                                <option value="av">A.V</option>
                                <option value="vb">V.B</option>
                                <option value="ga">G.A</option>
                            </select>
                        </div>
                        <div class="mb-1 col">
                            <label for="message" class="form-label">Approved By</label>
                            <select id="appby" name="appby" class="form-control">
                                <option value="">--Please choose an option--</option>
                                <option value="pb">P.B</option>
                                <option value="sa">S.A</option>
                                <option value="av">A.V</option>
                                <option value="vb">V.B</option>
                                <option value="ga">G.A</option>
                            </select>
                        </div>
                        <div class="mb-1 col">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>
                </div>

                <div class="m-3 border border-black p-3">
                    <h3>Please Fill Pump Selection Details</h3>
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="pumpModel" class="form-label">Pump Model</label>
                            <input type="text" class="form-control" id="pumpModel" name="pumpModel">
                        </div>
                        <div class="mb-1 col">
                            <label for="liquid" class="form-label">Liquid</label>
                            <input type="text" class="form-control" id="liquid" name="liquid">
                        </div>
                        <div class="mb-1 col">
                            <label for="spGr" class="form-label">Specific Gravity</label>
                            <input type="number" class="form-control" id="spGr" name="spGr" step="0.001">
                        </div>

                        <div class="mb-1 col">
                            <label for="eff" class="form-label">Efficiency</label>
                            <input type="number" class="form-control" id="eff" name="eff">
                        </div>
                        <div class="mb-1 col">
                            <label for="temp" class="form-label">Operating Temp</label>
                            <input type="text" class="form-control" id="temp" name="temp">
                        </div>
                        <div class="mb-1 col">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="qty" name="qty">
                        </div>
                    </div>
                </div>

                <div class="m-3 border border-black p-3">
                    <h3>Please Fill Pump Details</h3>
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="text" class="form-control" id="capacity" name="capacity">
                        </div>
                        <div class="mb-1 col">
                            <label for="head" class="form-label">Total Head Liquid</label>
                            <input type="text" class="form-control" id="head" name="head">
                        </div>
                        <div class="mb-1 col">
                            <label for="sucLift" class="form-label">Suction Lift</label>
                            <input type="text" class="form-control" id="sucLift" name="sucLift">
                        </div>
                        <div class="mb-1 col">
                            <label for="npsha" class="form-label">NPSH Available</label>
                            <input type="text" class="form-control" id="npsha" name="npsha">
                        </div>
                        <div class="mb-1 col">
                            <label for="npshr" class="form-label">NPSH Required</label>
                            <input type="text" class="form-control" id="npshr" name="npshr">
                        </div>
                        <div class="mb-1 col">
                            <label for="seal" class="form-label">Pump Seal</label>
                            <select id="seal" name="seal" class="form-control">
                                <option value="">--Please choose an option--</option>
                                <option
                                    value="Mechanical seal Balanced- Cartridge Type Leak-proof / Eagle Burgmann / Flowserve As per API 682, 4th Edition">
                                    Mechanical Seal 4th Edition</option>
                                <option
                                    value="Mechanical seal Balanced- Cartridge Type Leak-proof / Eagle Burgmann / Flowserve As per API 682, 3th Edition">
                                    Mechanical Seal 3th Edition</option>
                                <option value="Gland Packing">Gland Packing</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success m-1" value="Submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>