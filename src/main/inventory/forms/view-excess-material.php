<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Inventory > Excess Materials > View Excess Returned Materials</h1>
    <div class="header-buttons">
        <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('excessMaterial-cancelAction', '*')">Cancel</button>
        <button class="view-image-button" id="" onclick="parent.postMessage('inventory-excessMaterialC-viewImage', '*')">View Image</button>
    </div>

</div>

<div class="blue-bar">
    <!-- FIRST PART 
        <h1 class="module-title">Request Details</h1>-->
    <!-- MATERIALS ADDED -->
    <h1 class="module-title i3">Excess Returned Materials:</h1>
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
            </tr>
        </thead>
        <tbody class="td-style">
            <tr>
                <td class="td-category">Consumables / Hardware</td>
                <td class="td-material-description">Material 1</td>
                <td class="td-unit">PC/S</td>
                <td class="td-qty-returned">100</td>
                <td class="td-available-quantity">500</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>