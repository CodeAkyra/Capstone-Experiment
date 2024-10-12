<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Requested Purchase > Pending</h1>
    <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('cancelRequestedPurchase', '*')">Cancel</button>
    <button class="button" id="markAsCompleteBtn" onclick="alert('Marked as Completed!');parent.postMessage('purchasing-completeRequestedPurchase','*')">Mark as Complete</button>
</div>

<div class="blue-bar">
    <h1 class="module-title i3">Item Summary for Requested Purchase:</h1>
    <table class="table-material-added">
        <thead class="column-title">
            <tr class="th-style">
                <th class="th-category">Category</th>
                <th class="th-mat-desc">Material Description</th>
                <th class="th-unit">Unit</th>
                <th class="th-qty">Quantity</th>
            </tr>
        </thead>
        <tbody class="td-style">
            <tr>
                <td class="td-category">Consumables / Hardware</td>
                <td class="td-material-description">Material 1</td>
                <td class="td-unit">PC/S</td>
                <td class="td-quantity">10</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>