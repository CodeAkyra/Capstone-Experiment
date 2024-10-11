<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Excess Material</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">

    <div class="header">
        <h1 class="header-title">Inventory > Excess Materials > Edit Excess Materials</h1>
        <div class="header-buttons">

            <!-- MAKALAT PA YUNG GAP AND SPACING NG MGA BUTTONS DITO -->

            <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('excessMaterial-cancelAction', '*')">Cancel</button>
            <button class="view-image-button" id="" onclick="parent.postMessage('inventory-excessMaterialP-viewImage', '*')">View Image</button>
            <button class="btn-qr" id=""><i class="fa-solid fa-qrcode"></i></button>
            <button class="btn-finish-receiving" id="finish-receiving"
                onclick="alert('Excess Material Received!');parent.postMessage('inventory-excessMaterial-saveAction', '*')">Finish Receiving</button>


        </div>

    </div>

    <div class="blue-bar">
        <!-- FIRST PART 
        <h1 class="module-title">Request Details</h1>-->
        <!-- MATERIALS ADDED -->
        <h1 class="module-title i3">Excess Materials:</h1>
        <!-- 
            <p class="p-material-added">Material Added:</p>-->
        <table class="table-material-added">
            <thead class="column-title">
                <tr class="th-style">
                    <th class="th-category">Category</th>
                    <th class="th-mat-desc">Material Description</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-qty-returned">Quantity Returned</th>
                    <th class="th-qty-avail">Available Quantity</th>
                    <th class="th-quantity-checked">Quantity Checked</th>
                </tr>
            </thead>
            <tbody class="td-style">
                <tr>
                    <td class="td-category">Consumables / Hardware</td>
                    <td class="td-material-description">Material 1</td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-qty-returned">100</td>
                    <td class="td-available-quantity">500</td>
                    <td class="td-quantity-checked"><input type="number" value="0"></input></td>


                    <!-- hindi na pa modal
                    <td class="td-action">
                        <button class="check-button" onclick="parent.postMessage('setQuantity-actionBtn','*')"><i class="btnCheck fa-solid fa-check"></i></button>
                        <button class="x-button"><i class="btnX fa-solid fa-x"></i></button> FEEL KO DI RIN MAGAGAMIT TOH?
                    </td>
                    -->
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>