<div class="sidebar-content" style="flex: 0 0 max-content; height: 100%; background-color: #f0f0f0;;">
    <div class="sidebar" style="display: flex; flex-direction: column;">
        <!-- Dashboard accessible to all -->
        <div class="modules">
            <button class="module-name" onclick="loadPHP('dashboard.php')">Dashboard</button>
        </div>


        <!-- ADMIN ACCESS: Show all modules -->
        <?php if ($role === 'Admin'): ?>

            <div class="modules">
                <button class="module-name" onclick="loadPHP('client.php')">Client</button>
            </div>
            <div class="modules">
                <button class="module-name" onclick="loadPHP('supplier.php')">Supplier</button>
            </div>

            <!-- INVENTORY -->
            <div class="modules">
                <button class="module-grp" href="#" data-content="">
                    Inventory
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('inventory/inventory-master-data.php')">Inventory Master
                        Data</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/deliveries.php')">Deliveries</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/release-materials.php')">Release
                        Materials</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/excess-materials.php')">Excess
                        Materials</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/request-purchase.php')">Request
                        Purchase</button>
                </div>
            </div>

            <!-- PRODUCTION -->
            <div class="modules">
                <button class="module-grp">
                    Production
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('production/request-material.php')">Request
                        Material</button>
                    <button class="dropdown-link" onclick="loadPHP('production/request-return.php')">Request
                        Return</button>
                </div>
            </div>

            <!-- PURCHASING -->
            <div class="modules">
                <button class="module-grp">
                    Purchasing
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/purchase-order.php')">Purchase
                        Order</button>
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-material.php')">Requested
                        Material</button>
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-purchase.php')">Requested
                        Purchase</button>
                </div>
            </div>

            <!-- INSTALLATION -->
            <div class="modules">
                <button class="module-grp">
                    Installation
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link"
                        onclick="loadPHP('../main/Installation/installation-request-material.php')">Request
                        Material</button>
                </div>
            </div>
            <div class="modules">
                <button class="module-name" onclick="loadPHP('user-management/user.php')">User Management</button>
            </div>
            <div class="modules">
                <form action="/src/logout.php" method="POST">
                    <button class="module-name logout" type="submit">Sign Out</button>
                </form>
            </div>
        <?php endif; ?>

        <!-- ENGINEER ACCESS: Show only production module -->
        <?php if ($role === 'Engineer'): ?>
            <!-- PRODUCTION -->
            <div class="modules">
                <button class="module-grp">
                    Production
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('production/request-material.php')">Request
                        Material</button>
                    <button class="dropdown-link" onclick="loadPHP('production/request-return.php')">Request
                        Return</button>
                </div>
            </div>

            <div class="modules">
                <form action="/src/logout.php" method="POST">
                    <button class="module-name logout" type="submit">Sign Out</button>
                </form>
            </div>
        <?php endif; ?>

        <!-- PIC ACCESS: Show only installation module -->
        <?php if ($role === 'Project-in-Charge'): ?>
            <!-- INSTALLATION -->
            <div class="modules">
                <button class="module-grp">
                    Installation
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link"
                        onclick="loadPHP('../main/Installation/installation-request-material.php')">Request
                        Material</button>
                </div>
            </div>

            <div class="modules">
                <form action="/src/logout.php" method="POST">
                    <button class="module-name logout" type="submit">Sign Out</button>
                </form>
            </div>
        <?php endif; ?>

        <!-- PURCHASER ACCESS: Show only purchasing module -->
        <?php if ($role === 'Purchaser'): ?>
            <!-- PURCHASING -->
            <div class="modules">
                <button class="module-grp">
                    Purchasing
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/purchase-order.php')">Purchase
                        Order</button>
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-material.php')">Requested
                        Material</button>
                    <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-purchase.php')">Requested
                        Purchase</button>
                </div>
            </div>

            <div class="modules">
                <form action="/src/logout.php" method="POST">
                    <button class="module-name logout" type="submit">Sign Out</button>
                </form>
            </div>
        <?php endif; ?>

        <!-- WAREHOUSE MAN ACCESS: Show only inventory module -->
        <?php if ($role === 'Warehouse Man'): ?>
            <!-- INVENTORY -->
            <div class="modules">
                <button class="module-grp" href="#" data-content="">
                    Inventory
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <button class="dropdown-link" onclick="loadPHP('inventory/inventory-master-data.php')">Inventory Master
                        Data</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/deliveries.php')">Deliveries</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/release-materials.php')">Release
                        Materials</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/excess-materials.php')">Excess
                        Materials</button>
                    <button class="dropdown-link" onclick="loadPHP('inventory/request-purchase.php')">Request
                        Purchase</button>
                </div>
            </div>

            <div class="modules">
                <form action="/src/logout.php" method="POST">
                    <button class="module-name logout" type="submit">Sign Out</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>