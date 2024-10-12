<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Production > Request Return > Excess</h1>
    <div class="header-buttons">
        <button class="btn-qr" id="qrBtn"><i class="fas fa-qrcode qr-font"> <input type="file" accept="image/*" capture="capture"></i></button>
        <a href="<?= BASE_URL ?>production/request-return.php" class="btn-cancel">Cancel</a>
        <button class="btn-create">Save and Request</button>
    </div>
</div>

<div class="blue-bar">
    <h1 class="module-title">Return Details</h1>
    <div class="form-content">
        <div class="inputs-top-row">
            <div class="input-grp">
                <span class="input-label">Return ID:</span>
                <input class="input reqID" type="text" value="req_0001" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Date Req Return:</span>
                <input class="input dateReq" type="datetime-local" id="dateTimeInput" value="#" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Project:</span>
                <select class="input project">
                    <option value="0">PRJ1_Project_1</option>
                    <option value="1">PRJ2_Project_2</option>
                    <option value="2">PRJ3_Project_3</option>
                    <option value="3">PRJ4_Project_4</option>
                    <option value="4">PRJ5_Project_5</option>
                    <option value="5">PRJ6_Project_6</option>
                </select>
            </div>

        </div>

        <div class="input-image-proof">
            <div class="input-grp">
                <span class="input-label">Proof:</span>
                <div class="imgContainer">
                    <img src="/src/img/users/user1.png">
                    <img src="/src/img/users/user1.png">
                    <img src="/src/img/users/user1.png">
                </div>
                <button class="btn-add-image" onclick="">Upload Image</button>
            </div>
        </div>

        <div class="input-remark">
            <span class="input-label">Remarks:</span>
            <textarea class="input remarks excess-remark" name="remarks" placeholder="test"
                style="resize: none;"></textarea>
        </div>

        <!-- LINE SEPARATOR -->
        <hr class="line-separator">

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
                <span class="input-label">Supplier:</span>
                <input class="input supp" id="input-unit" type="text" value="Supplier_Name" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Unit:</span>
                <input class="input unit" id="input-unit" type="text" value="PC/S" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Return:</span>
                <input class="input qty" id="input-qty" type="number" placeholder="0000">
            </div>

            <div class="input-grp">
                <span class="input-label">Available Qty:</span>
                <input class="input qtyAvail" id="input-qtyAvail" type="number" placeholder="0000" disabled>
            </div>


        </div>

        <div class="button-area-bottom">
            <button class="btn-add" onclick="">Add</button>
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
                    <th class="th-cat">Category</th>
                    <th class="th-mat-desc">Material Description</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-supplier">Supplier</th>
                    <th class="th-return-qty">Return Quantity</th>
                    <th class="th-action">Action</th>
                </tr>
            </thead>
            <tbody class="td-style">
                <tr>
                    <td class="td-cat">Consumables / Hardware</td>
                    <td class="td-mat-desc">Material 1</td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-supplier">Supplier_Name</td>
                    <td class="td-return-qty"><input type="number" value="0"></input></td>
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