<!DOCTYPE html>
<html>

<head>
    <title>Chart.js in Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div style="width:60%; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
    const xValues = [];
    const yValues = [];
    generateData("x", 10, 100, 1);

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                pointRadius: 1,
                borderColor: "rgba(255,0,0,0.5)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
        }
    });

    function generateData(value, i1, i2, step = 1) {
        for (let x = i1; x <= i2; x += step) {
            xValues.push(x);
            yValues.push(eval(value));
        }
    }
    </script>
</body>

</html>