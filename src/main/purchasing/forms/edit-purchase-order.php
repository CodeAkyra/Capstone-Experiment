<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Purchase Order > Edit</h1>
    <div class="button-container">
        <a href="<?= BASE_URL ?>purchasing/purchase-order.php" class="btn-cancel">Discard Changes</a>
        <button class="btn-create" id="createPO" onclick="parent.postMessage('purchasing-saveEditPurchaseOrder')">Save Changes</button>
    </div>
</div>

<!--
    <div class="blue-bar purchase-order">-->
<!---->
<div class="blue-bar windows">
    <!-- Purchase Order -->
    <div class="window purchase-order">
        <h1 class="window-title">Purchase Order Details</h1>
        <div class="inputs-top-row window">
            <div class="input-grp window">
                <span class="input-label">PO No.:</span>
                <input class="input poNo" type="text" value="PO_0001" disabled>
            </div>

            <div class="input-grp window">
                <span class="input-label">Date Requested:</span>
                <input class="input dateReq" type="datetime-local" value="req_0001" disabled>
            </div>
        </div>

        <div class="input-grp window">
            <span class="input-label">Remarks:</span>
            <textarea class="input remarks-po" name="remarks"></textarea>
        </div>
    </div>

    <!-- Materials -->
    <div class="window materials">
        <h1 class="window-title">Material Details</h1>
        <div class="inputs-top-row window">
            <div class="input-grp window">
                <span class="input-label">Select Supplier:</span>
                <select class="input suppliers">
                    <option value="0">Supplier 1</option>
                    <option value="1">Supplier 2</option>
                    <option value="2">Supplier 3</option>
                    <option value="3">Supplier 4</option>
                    <option value="4">Supplier 5</option>
                </select>
            </div>

            <div class="input-grp window">
                <span class="input-label">Add Material:</span>
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
        </div>

        <div class="inputs-top-row window">
            <div class="input-grp window">
                <span class="input-label">Quantity:</span>
                <input class="input qty" id="input-qty" placeholder="0"></input>
            </div>

            <div class="input-grp window">
                <span class="input-label">Item Cost:</span>
                <input class="input itemCost" id="input-qty" placeholder="0" disabled></input>
            </div>

            <div class="input-grp window">
                <button class="btn-add window" onclick="">Add</button>
            </div>

        </div>

    </div>
</div>

<div class="entries">
    <span>Show
        <input class="entry-num" type="int" value="0">
        Entries</span>
</div>
<!-- TABLE -->
<div class="table-bg">
    <table class="table-view-records">
        <!-- TABLE HEADER -->
        <thead class="column-title">
            <tr class="th-style">
                <th class="th-cat">Category</th>
                <th class="th-mat-desc">Material Description</th>
                <th class="th-unit">Unit</th>
                <th class="th-quantity">Qty.</th>
                <th class="th-unit-cost">Unit cost</th>
                <th class="th-total-cost">Total cost</th>
                <th class="th-action">Action</th>
            </tr>
        </thead>
        <!-- TABLE DATA -->
        <tbody class="td-style">
            <tr>
                <td class="td-cat">Consumables / Hardware</td>
                <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                    (65KGS / 500,000 CYCLES)</td>
                <td class="td-unit">PC/S</td>
                <td class="td-quantity"><input class="input quantity" type="number" value="0"></td>
                <td class="td-unit-cost">P 10</td>
                <td class="td-total-cost">P 200</td>
                <td class="td-action"><button class="delete-button" onclick="actionDelete()"><i
                            class="btnDelete fa-solid fa-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>
</div>

</div>
<!-- PAGES -->
<div class="pageBar">
    <div class="pageContainer">
        <p class="pageText">Showing
            <a class="page1">1</a>
            to
            <a class="page2">60</a>
            of
            <a class="ent-total">69</a>
            entries
        </p>
        <div class="pageBtn">
            <p class="btnPrev">&lt;</p> <!-- "<", hindi na yung word na "Previews" -->
            <a class="pageNum active" id="pageNum">1</a>
            <a id="pageNum">2</a>
            <a id="pageNum">3</a>
            <a id="pageNum">4</a>
            <p class="btnNext">&gt;</p> <!-- ">", hindi na yung word na "Next" -->
        </div>
    </div>
</div>

<script>
    document.getElementById('createPO').addEventListener('click', function() {
        parent.postMessage('purchasing-saveCreatePO', '*');
    });
</script>

<?php
include(BASE_PATH . 'includes/footer.php');
?>