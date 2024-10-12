<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Inventory > Request Purchase > View Request Purchase</h1>
    <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('createRequestPurchase-cancelAction', '*')">Cancel</button>
</div>

<div class="blue-bar">
    <!-- FIRST PART -->
    <!-- MATERIALS ADDED -->
    <h1 class="module-title i3">View Request Purchase</h1>
    <!-- 
            <p class="p-material-added">Material Added:</p>-->
    <table class="table-material-added">
        <thead class="column-title">
            <tr class="th-style">
                <th class="th-category">Category</th>
                <th class="th-mat-desc">Material Description</th>
                <th class="th-unit">Unit</th>
                <th class="th-qty">Quantity</th>
                <th class="th-action">Action</th>
            </tr>
        </thead>
        <tbody class="td-style">
            <tr>
                <td class="td-category">Consumables / Hardware</td>
                <td class="td-material-description">Material 1</td>
                <td class="td-unit">PC/S</td>
                <td class="td-quantity">10</td>
                <td class="td-action">
                    <button class="delete-button" onclick="actionDelete()"><i
                            class="btnDelete fa-solid fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>