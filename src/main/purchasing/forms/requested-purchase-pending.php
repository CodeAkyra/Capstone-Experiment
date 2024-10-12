<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Requested Purchase > Pending</h1>
    <a href="<?= BASE_URL ?>purchasing/requested-purchase.php" class="btn-cancel">Cancel</a>
    <button class="button">Mark as Complete</button>
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