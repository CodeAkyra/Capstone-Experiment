<!-- WAG MUNA DELETE SA NGAYON -->
<!-- WAG MUNA DELETE SA NGAYON -->
<!-- WAG MUNA DELETE SA NGAYON -->
<!-- WAG MUNA DELETE SA NGAYON -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="../styles/main.css">
    <title>Dashboard</title>
</head>

<body class="body-iframe-padding">
    <span>Dashboard is currently being displayed</span>
    <span>Last site deploy 9/26/2024 7:00AM</span>
    <br>
    <span id="clock"></span>
    <div id="piechart"></div>


    <!--
    <a href="https://filasiadeploytest.pages.dev/login/login">Click here to summon site iFrame</a>
    -->
    <!-- What this for XD -->
    <!-- HAHAHAHA wala lang. para makita yung latest site deploy inside localhost -->

    <script type="text/javascript">
        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
            setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            };
            return i;
        }
    </script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 8],
                ['Eat', 2],
                ['TV', 4],
                ['Gym', 2],
                ['Sleep', 8]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'My Average Day',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>



</body>

</html>