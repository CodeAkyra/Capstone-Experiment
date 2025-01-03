<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Inventory > Request Purchase > Edit Request Purchase</h1>
    <a href="<?= BASE_URL ?>inventory/request-purchase.php" class="btn-cancel">Cancel</a>
    <button class="btn-create">Save Changes</button>
</div>

<div class="blue-bar">
    <!-- FIRST PART -->
    <h1 class="module-title">Edit Request Details</h1>
    <div class="form-content">
        <!-- SECOND PART -->
        <div class="inputs-top-row">
            <div class="input-grp">
                <span class="input-label">Material Description:</span>
                <input list="options" id="input-desc" class="input desc" name="mat-desc"
                    placeholder="Enter Material Description">
                <datalist id="options">
                    <option value="Material 1">
                    <option value="Material 2">
                    <option value="Material 3">
                    <option value="Material 4">
                    <option value="Material 5">
                    <option value="Material 6">
                </datalist>

            </div>

            <div class="input-grp">
                <span class="input-label">Unit:</span>
                <input class="input unit" id="input-unit" type="text" value="PC/S" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Quantity:</span>
                <input class="input qty" id="input-qty" type="number" placeholder="0000">
            </div>

        </div>

        <div class="button-area-bottom">
            <button class="btn-add">Add</button>
        </div>


        <!-- LINE SEPARATOR -->
        <hr class="line-separator">

        <!-- MATERIALS ADDED -->
        <h1 class="module-title i3">Materials Added:</h1>
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
                    <td class="td-quantity"><input class="input qty" type="number" value="0"></td>
                    <td class="td-action">
                        <button class="delete-button" onclick="actionDelete()"><i
                                class="btnDelete fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>