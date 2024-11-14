<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .text {
        position: relative;
        width: 100%;
        text-align: center;
    }


    .text-container {
        position: absolute;
        color: black !important;
        left: 20%;
        top: 810px;
        transform: translate(-50%, -50%);
        padding: 0.5rem;
        text-align: center;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div class="container" style="position: relative; text-align: center;">
    </div>
    <div class="text">
        <img src="{{ asset('vgad.jpg') }}" alt="vgad" style="width:100%;">
        <div class="text-container">
            <h3>1/2"</h3>
        </div>
    </div>
</body>

</html>