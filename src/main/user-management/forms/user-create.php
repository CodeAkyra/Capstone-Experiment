<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>User</title>
</head>

<body class="body-iframe-padding">

    <div class="header">
        <h1 class="header-title">User > Create User</h1>
        <div class="button-container">
            <button class="btn-cancel" onclick="parent.postMessage('user-cancelCreateUser','*')">Back</button>
            <button class="btn-create" id="createUser" onclick="alert('User Created!'); parent.postMessage('user-saveCreateUser', '*')">Add User</button>
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

</body>

</html>