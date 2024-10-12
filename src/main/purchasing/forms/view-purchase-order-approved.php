<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Purchase Order > View Approved</h1>
    <div class="button-container">
        <button class="btn-cancel" onclick="parent.postMessage('purchasing-cancelCreatePO','*')">Back</button>
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
            <textarea class="input remarks-po" name="remarks" disabled></textarea>
        </div>
    </div>

    <!-- Materials -->
    <div class="window materials">
        <h1 class="window-title">Supplier Details</h1>
        <div class="inputs-top-row window">
            <div class="input-grp window">
                <!-- NAKA INDICATE NA DITO SINONG SUPPLIER OR KANINONG SUPPLIER PINAG BILHAN YUNG ISANG PURCHASE ORDER -->
                <!-- TEMPORARY MUNA ITU, PERO THE IDEA IS SOMETHING LIKE THIS -->
                <span class="input-label">Supplier Name: <span class="input-label">Supplier 1</span></span>
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
            </tr>
        </thead>
        <!-- TABLE DATA -->
        <tbody class="td-style">
            <tr>
                <td class="td-cat">Consumables / Hardware</td>
                <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                    (65KGS / 500,000 CYCLES)</td>
                <td class="td-unit">PC/S</td>
                <td class="td-quantity">10</td>
                <td class="td-unit-cost">P 10</td>
                <td class="td-total-cost">P 200</td>
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