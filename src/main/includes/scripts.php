</div>
<script>
    // Include your existing script logic here (like dropdown functionality)

    function loadPHP(file) {
        const content = document.querySelector('.main-content'); // Assuming this is your main content area

        fetch(file)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.text();
            })
            .then(data => {
                content.innerHTML = data; // Load the PHP file content into the main content area
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                content.innerHTML = '<p>Error loading content.</p>'; // Display an error message if something goes wrong
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.module-grp');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                if (dropdown && dropdown.classList.contains('dropdown')) {
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

                    buttons.forEach(btn => {
                        if (btn !== button) {
                            btn.classList.remove('active');
                            const otherDropdown = btn.nextElementSibling;
                            if (otherDropdown && otherDropdown.classList.contains('dropdown')) {
                                otherDropdown.style.display = 'none';
                            }
                        }
                    });
                    button.classList.toggle('active');
                }
            });
        });
    });

    // Function to start the clock
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m); // Format minutes
        s = checkTime(s); // Format seconds
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s; // Update clock display
        setTimeout(startTime, 1000); // Call this function every second
    }

    // Helper function to check time and add leading zero
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i; // Add leading zero
        }
        return i;
    }

    // Load Google Charts and draw the pie chart
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart); // Call drawChart function once the Google Charts library is loaded

    // Function to draw the pie chart
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 8],
            ['Eat', 2],
            ['TV', 4],
            ['Gym', 2],
            ['Sleep', 8]
        ]);

        // Set options for the chart
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
        function loadPHPContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.main-content').innerHTML = data;
            })
    }

    loadPHPContent('dashboard.php')
</script>
