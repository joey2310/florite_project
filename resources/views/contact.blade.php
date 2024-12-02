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
    <div class="row">
        <div class="ms-5 col-6">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Info</li>
                </ol>
            </div>
            <h3 style="color:darkblue">Contact Information</h3>
            <hr class="me-5" aria-hidden="true" style="height: 3px; background-color: black;">
            <div>
                <h3>Flo-rite Engineering Corporation</h3>
                <h6>Gala No. 7, 1st Floor, Janta Industrial Estate, 162, Senapati Bapat Marg,</h6>
                <h6>Opp. High Street Phoenix, Lower Parel (West), Mumbai - 400013.</h6>
                <h6>Phone : <a href="tel:02224934670">(022) 2493-4670</a> / <a href="tel:02224985208">2498-5208</a></h6>
                <h6>Mobile : <a href="tel:+919820228410">+91 98202 28410</a></h6>
                <h6>Email : <a href="mailto:florite@gmail.com">florite@gmail.com</a></h6>
            </div>
            <div class="my-3">
                <h6>Office Hours: Mon to Sat - 10:00am to 6:00pm (IST / GMT +0530) </h6>
                <h6>Works : Dwarka Industrial Estate, Village Valiv, Vasai (East), Dist. Thane, Maharashtra, India.</h6>
            </div>
            <h3 style="color:darkblue">Enquiry</h3>
            <hr class="me-5" aria-hidden="true" style="height: 3px; background-color: black;">
            <h6>Please fill in the form below to send us your enquiry</h6>
            <div>
                <div class="row p-3">
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Contact Person" aria-label="Contact Person"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Phone"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Email-address" aria-label="Email"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div style="margin-left: 270px;">
                    <button type="submit" class="btn btn-outline-success m-1" value="Submit">Submit</button>
                </div>
            </div>
        </div>
        <div class=" col-5 ">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.5544658900094!2d72.825977!3d18.995274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cef598110ba7%3A0x3de9089b96a99e6d!2sFlo-rite+Engineering+Corporation!5e0!3m2!1sen!2sin!4v1433242400447"
                style="width: 100%; height: 650px;"></iframe>
        </div>
    </div>
    </div>
</body>

</html>