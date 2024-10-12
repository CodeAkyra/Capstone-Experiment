<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Inventory > Release Material > View Released</h1>
    <div class="header-buttons">
        <a href="<?= BASE_URL ?>inventory/release-materials.php" class="btn-cancel">Back</a>
        <a href="view-batch-completed.php" class="btn-create" id="create-requestBtn">View Batch</a>
    </div>
</div>

<div class="entries">
    <span>Show
        <input class="entry-num" type="int" value="0">
        Entries</span>
</div>

<div class="blue-bar">
    <h1 class="module-title">Released Materials</h1>

    <!-- TABLE -->
    <div class="table-bg">
        <table class="table-view-records">
            <!-- TABLE HEADER -->
            <thead class="column-title">
                <tr class="th-style">
                    <th class="th-cat">Category</th>
                    <th class="th-mat-desc">Material Description</th>
                    <th class="th-supplier">Supplier</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-need">Need</th>
                    <th class="th-released">Released</th>
                    <th class="th-qty-avail">Available Quantity</th>
                </tr>
            </thead>
            <!-- TABLE DATA -->
            <tbody class="td-style">
                <tr>
                    <td class="td-cat">Consumables / Hardware</td>
                    <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                        (65KGS / 500,000 CYCLES)</td>
                    <td class="td-supplier">Supplier_1</td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-need">0</td>
                    <td class="td-released">100</td>
                    <td class="td-quantity-received">1000000</td>
                </tr>
            </tbody>
        </table>
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
            <p class="btnPrev">Previous</p>
            <a id="pageNum">1</a>
            <a id="pageNum">2</a>
            <a id="pageNum">3</a>
            <a id="pageNum">4</a>
            <a id="pageNum">5</a>
            <p class="btnNext">Next</p>
        </div>
    </div>
</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>