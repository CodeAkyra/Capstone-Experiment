<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilAsia</title>
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="/src/styles/modals/modal.css">
    <link rel="stylesheet" href="/src/styles/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>

    <div class="top-bar">
        <img class="logo" src="/src/img/filasia.png" alt="Filipinas Asia Glass and Doors Corp. Logo">
        <h1 class="title">Filipinas Asia Glass and Doors Corp.</h1>
        <div class="debug">
            <span class="textDebug">This software is currently in development, not indicative of final product</span>
        </div>
        <span id="clock"></span>
    </div>

    <div class="layoutSidebar" style="display: flex; width: 100%; overflow: scroll;">

        <div class="sidebar-content" style="flex: 0 0 max-content; background-color: #f0f0f0;;">
            <div class="sidebar" style="display: flex; flex-direction: column;">
                <!-- Dashboard accessible to all -->
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('dashboard.php')">Dashboard</button>
                </div>

                <!-- ADMIN ACCESS: Show all modules -->
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('client.php')">Client</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('supplier.php')">Supplier</button>
                </div>

                <!-- INVENTORY -->
                <div class="modules">
                    <button class="module-grp" onclick="toggleDropdown(this)">
                        Inventory
                        <span class="arrow">&#9660;</span>
                    </button>
                    <div class="dropdown" style="display: none;">
                        <button class="dropdown-link" onclick="loadPHP('inventory/inventory-master-data.php')">Inventory Master Data</button>
                        <button class="dropdown-link" onclick="loadPHP('inventory/deliveries.php')">Deliveries</button>
                        <button class="dropdown-link" onclick="loadPHP('inventory/release-materials.php')">Release Materials</button>
                        <button class="dropdown-link" onclick="loadPHP('inventory/excess-materials.php')">Excess Materials</button>
                        <button class="dropdown-link" onclick="loadPHP('inventory/request-purchase.php')">Request Purchase</button>
                    </div>
                </div>

                <!-- PRODUCTION -->
                <div class="modules">
                    <button class="module-grp" onclick="toggleDropdown(this)">
                        Production
                        <span class="arrow">&#9660;</span>
                    </button>
                    <div class="dropdown" style="display: none;">
                        <button class="dropdown-link" onclick="loadPHP('production/request-material.php')">Request Material</button>
                        <button class="dropdown-link" onclick="loadPHP('production/request-return.php')">Request Return</button>
                    </div>
                </div>

                <!-- PURCHASING -->
                <div class="modules">
                    <button class="module-grp" onclick="toggleDropdown(this)">
                        Purchasing
                        <span class="arrow">&#9660;</span>
                    </button>
                    <div class="dropdown" style="display: none;">
                        <button class="dropdown-link" onclick="loadPHP('../main/purchasing/purchase-order.php')">Purchase Order</button>
                        <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-material.php')">Requested Material</button>
                        <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-purchase.php')">Requested Purchase</button>
                    </div>
                </div>

                <!-- INSTALLATION -->
                <div class="modules">
                    <button class="module-grp" onclick="toggleDropdown(this)">
                        Installation
                        <span class="arrow">&#9660;</span>
                    </button>
                    <div class="dropdown" style="display: none;">
                        <button class="dropdown-link" onclick="loadPHP('../main/Installation/installation-request-material.php')">Request Material</button>
                    </div>
                </div>

                <div class="modules">
                    <button class="module-name" onclick="loadPHP('bill-of-materials.php')">Bill of Materials</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('projects.php')">Projects</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('reports.php')">Reports</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('activity-logs.php')">Activity Logs</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('user.php')">User Management</button>
                </div>
                <div class="modules">
                    <button class="module-name" onclick="loadPHP('company.php')">Company</button>
                </div>
                <div class="modules">
                    <button class="module-name debug" onclick="loadPHP('debug.php')">DEBUG</button>
                </div>
            </div>
        </div>

        <div id="layoutSidebar_content" style="margin: 20px; flex-grow: 1"> <!-- Allow content area to grow -->
            <main>
                <div class="main-content" style="display: flex; flex-direction: column; width: 100%;">
                    <h1>DASHBOARD</h1>
                    <p>Your content goes here...</p> <!-- Sample content -->
                </div>
            </main>
        </div>
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
    <!--
    <script>
        // CREATE CLIENT MODAL
        // CREATE CLIENT MODAL
        // CREATE CLIENT MODAL
        (function() {
            var clientModal = document.getElementById("create-client-modal");
            var close = clientModal.querySelector(".button-modal");
            var closeBtn = clientModal.querySelector(".close");


            function openCreateClientModal() {
                clientModal.style.display = "grid !important";
            }

            function closeClientModal() {
                clientModal.style.display = "none";
            }

            closeBtn.onclick = function() {
                closeClientModal();
            };

            close.onclick = function() {
                closeClientModal();
            };

            window.onclick = function(event) {
                if (event.target === clientModal) {
                    closeClientModal();
                }
            };

            window.openCreateClientModal = openCreateClientModal;
            window.closeClientModal = closeClientModal;
        })();
    </script>

    <script>
        // EDIT CLIENT MODAL
        // EDIT CLIENT MODAL
        // EDIT CLIENT MODAL
        (function() {
            var clientModal = document.getElementById("edit-client-modal");
            var close = clientModal.querySelector(".button-modal");
            var closeBtn = clientModal.querySelector(".close");

            function openEditClientModal() {
                clientModal.style.display = "block";
            }

            function closeClientModal() {
                clientModal.style.display = "none";
            }

            closeBtn.onclick = function() {
                closeClientModal();
            };

            close.onclick = function() {
                closeClientModal();
            };

            window.onclick = function(event) {
                if (event.target === clientModal) {
                    closeClientModal();
                }
            };

            window.openEditClientModal = openEditClientModal;
            window.closeClientModal = closeClientModal;
        })();
    </script>

    <script>
        // SUPPLIER MODAL CREATE
        (function() {
            var supplierModal = document.getElementById("create-supplier-modal");
            var close = supplierModal.querySelector(".supplierconfirm-btn");
            var closeBtn = supplierModal.querySelector(".close");

            function openCreateSupplierModal() {
                supplierModal.style.display = "flex";
            }

            function closeSupplierModal() {
                supplierModal.style.display = "none";
            }

            closeBtn.onclick = function() {
                closeSupplierModal();
            };

            close.onclick = function() {
                closeSupplierModal();
            };

            window.onclick = function(event) {
                if (event.target === supplierModal) {
                    closeSupplierModal();
                }
            };

            window.openCreateSupplierModal = openCreateSupplierModal;
            window.closeSupplierModal = closeSupplierModal;
        })();
    </script>

    <script>
        // SUPPLIER MODAL EDIT
        (function() {
            var supplierModal = document.getElementById("edit-supplier-modal");
            var close = supplierModal.querySelector(".supplierbutton-modal");
            var closeBtn = supplierModal.querySelector(".close");

            function openEditSupplierModal() {
                supplierModal.style.display = "flex";
            }

            function closeSupplierModal() {
                supplierModal.style.display = "none";
            }

            closeBtn.onclick = function() {
                closeSupplierModal();
            };

            close.onclick = function() {
                closeSupplierModal();
            };

            window.onclick = function(event) {
                if (event.target === supplierModal) {
                    closeSupplierModal();
                }
            };

            window.openEditSupplierModal = openEditSupplierModal;
            window.closeSupplierModal = closeSupplierModal;
        })();
    </script>



PARENT POST MESSAGE 
    <script>
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'none'; // Hide the modal
            }
        }

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block'; // Show the modal
            }
        }

        window.addEventListener('message', (event) => {
            switch (event.data) {
                case 'openCreateClientModal':
                    openModal('create-client-modal'); // Open the client modal
                    break;

                case 'openEditClientModal':
                    openModal('edit-client-modal'); // Open the client modal
                    break;

                case 'openCreateSupplierModal':
                    openModal('edit-supplier-modal'); // Open the client modal
                    break;

                case 'openEditSupplierModal':
                    openModal('edit-supplier-modal'); // Open the client modal
                    break;

                case 'openSupplierModal':
                    openModal('supplier-modal'); // Open the supplier modal (example)
                    break;
                case 'openInventoryModal':
                    openModal('inventory-modal'); // Open the inventory modal (example)
                    break;

            }
        });
    </script>

    -->

    <script>
        window.addEventListener('message', function(event) {
            switch (event.data) {
                case 'user-openCreateUser':
                    // Assuming you have a function that loads the PHP content into the div
                    loadPHPContent('/src/forms/user-create.php');
                    break;
                    // Add more cases as needed
            }
        });

        function loadPHPContent(url) {
            // Fetch the PHP file and load it into the main-content div
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('.main-content').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }
    </script>



</body>

</html>