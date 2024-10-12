<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Inventory > Release Materials > Start Release</h1>
    <div class="header-buttons">
        <button class="btn-cancel" id="cancelrequestBtn">Cancel</button>
        <button class="btn-create" id="save-create-request"
            onclick="parent.postMessage('notificationSuccess','*');">Create Batch</button>
        <button class="btn-create" id="save-create-request"
            onclick="parent.postMessage('notificationSuccess','*');">View Batch</button>
        <button class="btn-finish-receiving" id="finish-receiving"
            onclick="parent.postMessage('notificationSuccess','*');">Start Releasing</button>
    </div>
</div>

<div class="entries">
    <span>Show
        <input class="entry-num" type="int" value="0">
        Entries</span>
</div>

<div class="blue-bar">
    <div class="grp-vr">
        <h1 class="module-title">Receive Deliveries</h1>
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
                    <th class="th-quantity-received">Quantity Received</th>
                </tr>
            </thead>
            <!-- TABLE DATA -->
            <tbody class="td-style">
                <tr>
                    <td class="td-cat">Consumables / Hardware</td>
                    <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                        (65KGS / 500,000 CYCLES)</td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-quantity-received"><input type="number" min="0" value="0"></td>
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