<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">User > Create User</h1>
    <div class="button-container">
        <a href="<?= BASE_URL ?>user-management/user.php" class="btn-cancel">Back</a>
        <button class="btn-create">Add User</button>
    </div>
</div>

<!--
    <div class="blue-bar purchase-order">-->
<!---->
<div class="blue-bar windows">
    <!-- Purchase Order -->
    <div class="window purchase-order">
        <h1 class="window-title">User Details</h1>
        <div class="inputs-top-row window">
            <div class="input-grp window">
                <span class="input-label">Employee Name:</span>
                <input class="input employeeName" type="text" placeholder="Full Name">
            </div>

            <div class="input-grp window">
                <span class="input-label">User Name:</span>
                <input class="input userName" type="text" placeholder="For Login">
            </div>
        </div>

        <div class="input-grp window">
            <span class="input-label">Email Address:</span>
            <input class="input userEmail" type="email" placeholder="@filasia.com">
        </div>
        <div class="input-grp window">
            <span class="input-label">Password:</span>
            <input class="input userPassword" type="password" placeholder="Must contain 8 characters">
        </div>


    </div>

    <!-- Materials -->
    <div class="window materials">
        <h1 class="window-title">User Level</h1>
        <div class="inputs-top-row window">
            <div class="input-grp window">
                <span class="input-label">Select User Level:</span>
                <div class="radioRoles">
                    <input class="input radioInput" type="radio" name="role" value="production"
                        id="radio-production">
                    <label class="radioLabel" for="radio-production">Production</label>

                    <input class="input radioInput" type="radio" name="role" value="inventory" id="radio-inventory">
                    <label class="radioLabel" for="radio-inventory">Inventory</label>

                    <input class="input radioInput" type="radio" name="role" value="purchasing"
                        id="radio-purchasing">
                    <label class="radioLabel" for="radio-purchasing">Purchasing</label>

                    <input class="input radioInput" type="radio" name="role" value="accounting"
                        id="radio-accounting">
                    <label class="radioLabel" for="radio-accounting">Accounting</label>

                    <input class="input radioInput" type="radio" name="role" value="installation"
                        id="radio-installation">
                    <label class="radioLabel" for="radio-installation">Installation</label>
                </div>
            </div>
        </div>
        <br>
        <div class="disclaimer">
            <span class="input-label">DISCLAIMER:</span>
            <span>You can assign a User Level to a new user only once. Once set, the User Level cannot be modified. Please contact the database administrator for further assistance.</span>
        </div>
    </div>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>