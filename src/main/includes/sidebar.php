<!-- NOTES:

DAPAT PAG PINIPINDOT YUNG BUTTON, NAKA ACTIVE PARIN SIYA
 
-->








<?php
define('BASE_URL', '/src/main/');
?>

<div class="sidebar-content">
    <div class="sidebar">
        <!-- Dashboard accessible to all -->
        <div class="modules">
            <a href="<?= BASE_URL ?>index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Dashboard</a>
        </div>

        <!-- ADMIN ACCESS: Show all modules -->
        <?php if ($role === 'Admin'): ?>

            <div class="modules">
                <a href="<?= BASE_URL ?>client.php" class="<?= basename($_SERVER['PHP_SELF']) == 'client.php' ? 'active' : '' ?>">Clients</a>
            </div>
            <div class="modules">
                <a href="<?= BASE_URL ?>supplier.php" class="<?= basename($_SERVER['PHP_SELF']) == 'supplier.php' ? 'active' : '' ?>">Supplier</a>
            </div>

            <!-- INVENTORY -->
            <div class="modules">
                <button class="module-grp" href="#" data-content="">
                    Inventory
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <a href="<?= BASE_URL ?>inventory/inventory-master-data.php" class="<?= basename($_SERVER['PHP_SELF']) == 'inventory-master-data.php' ? 'active' : '' ?>">Inventory Master Data</a>
                    <a href="<?= BASE_URL ?>inventory/deliveries.php" class="<?= basename($_SERVER['PHP_SELF']) == 'deliveries.php' ? 'active' : '' ?>">Deliveries</a>
                    <a href="<?= BASE_URL ?>inventory/release-materials.php" class="<?= basename($_SERVER['PHP_SELF']) == 'release-materials' ? 'active' : '' ?>">Release Materials</a>
                    <a href="<?= BASE_URL ?>inventory/excess-materials.php" class="<?= basename($_SERVER['PHP_SELF']) == 'excess-materials.php' ? 'active' : '' ?>">Excess Materials</a>
                    <a href="<?= BASE_URL ?>inventory/request-purchase.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-purchase.php' ? 'active' : '' ?>">Request Purchase</a>
                </div>
            </div>

            <!-- PRODUCTION -->
            <div class="modules">
                <button class="module-grp">
                    Production
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">

                    <a href="<?= BASE_URL ?>production/request-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-material.php' ? '' : '' ?>">Request Material</a>
                    <a href="<?= BASE_URL ?>production/request-return.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-return.php' ? '' : '' ?>">Request Return</a>
                </div>
            </div>

            <!-- PURCHASING -->
            <div class="modules">
                <button class="module-grp">
                    Purchasing
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <a href="<?= BASE_URL ?>purchasing/purchase-order.php" class="<?= basename($_SERVER['PHP_SELF']) == 'purchase-order.php' ? '' : '' ?>">Purchase Order</a>
                    <a href="<?= BASE_URL ?>purchasing/requested-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'requested-material.php' ? '' : '' ?>">Requested Material</a>
                    <a href="<?= BASE_URL ?>purchasing/requested-purchase.php" class="<?= basename($_SERVER['PHP_SELF']) == 'requested-purchase.php' ? '' : '' ?>">Requested Purchase</a>
                </div>
            </div>

            <!-- INSTALLATION -->
            <div class="modules">
                <button class="module-grp">
                    Installation
                    <span class="arrow">&#9660;</span>
                </button>
                <div class="dropdown">
                    <a href="<?= BASE_URL ?>installation/installation-request-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'installation-request-material.php' ? '' : '' ?>">Request Material</a>
                </div>
            </div>

            <div class="modules">
                <a href="<?= BASE_URL ?>user-management/user.php" class="<?= basename($_SERVER['PHP_SELF']) == 'user.php' ? 'active' : '' ?>">User Management</a>
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
                    <a href="<?= BASE_URL ?>production/request-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-material.php' ? '' : '' ?>">Request Material</a>
                    <a href="<?= BASE_URL ?>production/request-return.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-return.php' ? '' : '' ?>">Request Return</a>
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
                    <a href="<?= BASE_URL ?>installation/installation-request-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'installation-request-material.php' ? '' : '' ?>">Request Material</a>
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
                    <a href="<?= BASE_URL ?>purchasing/purchase-order.php" class="<?= basename($_SERVER['PHP_SELF']) == 'purchase-order.php' ? '' : '' ?>">Purchase Order</a>
                    <a href="<?= BASE_URL ?>purchasing/requested-material.php" class="<?= basename($_SERVER['PHP_SELF']) == 'requested-material.php' ? '' : '' ?>">Requested Material</a>
                    <a href="<?= BASE_URL ?>purchasing/requested-purchase.php" class="<?= basename($_SERVER['PHP_SELF']) == 'requested-purchase.php' ? '' : '' ?>">Requested Purchase</a>
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
                    <a href="<?= BASE_URL ?>inventory/inventory-master-data.php" class="<?= basename($_SERVER['PHP_SELF']) == 'inventory-master-data.php' ? 'active' : '' ?>">Inventory Master Data</a>
                    <a href="<?= BASE_URL ?>inventory/deliveries.php" class="<?= basename($_SERVER['PHP_SELF']) == 'deliveries.php' ? 'active' : '' ?>">Deliveries</a>
                    <a href="<?= BASE_URL ?>inventory/release-materials.php" class="<?= basename($_SERVER['PHP_SELF']) == 'release-materials' ? 'active' : '' ?>">Release Materials</a>
                    <a href="<?= BASE_URL ?>inventory/excess-materials.php" class="<?= basename($_SERVER['PHP_SELF']) == 'excess-materials.php' ? 'active' : '' ?>">Excess Materials</a>
                    <a href="<?= BASE_URL ?>inventory/request-purchase.php" class="<?= basename($_SERVER['PHP_SELF']) == 'request-purchase.php' ? 'active' : '' ?>">Request Purchase</a>
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