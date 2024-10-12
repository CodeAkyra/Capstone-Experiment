<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Requested Material > Approved</h1>
    <a href="<?= BASE_URL ?>purchasing/requested-material.php" class="btn-cancel">Back</a>
</div>

<div class="blue-bar">
    <!-- FIRST PART -->
    <h1 class="module-title">Request Details</h1>
    <div class="form-content">
        <div class="inputs-top-row">
            <div class="input-grp">
                <span class="input-label">Request ID:</span>
                <input class="input reqID" type="text" value="req_0001" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Date Requested:</span>
                <input class="input dateReq" type="datetime-local" id="dateTimeInput" value="#" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Requested by:</span>
                <input class="input reqBy" type="text" placeholder="Bautista" disabled>
            </div>
        </div>

        <!-- LINE SEPARATOR -->
        <hr class="line-separator">

        <!-- SECOND PART -->
        <div class="inputs-top-row">
            <div class="input-grp">
                <span class="input-label">Project Name:</span>
                <input class="input reqID" type="text" value="req_0001" disabled>
            </div>

            <div class="input-grp">
                <span class="input-label">Date Needed:</span>
                <input class="input dateReq" type="datetime-local" id="dateTimeInput" value="#" disabled>
            </div>

        </div>

        <!-- LINE SEPARATOR -->
        <hr class="line-separator">

        <div class="entries">
            <span>Show
                <input class="entry-num" type="int" value="0">
                Entries</span>
        </div>

        <!-- MATERIALS ADDED 
            <h1 class="module-title i3">Materials Added:</h1>-->
        <!-- 
            <p class="p-material-added">Material Added:</p>-->
        <div class="table-bg">
            <table class="table-view-records">
                <!-- TABLE HEADER -->
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-cat">Category</th>
                        <th class="th-mat-desc">Material Description</th>
                        <th class="th-unit">Unit</th>
                        <th class="th-requested">Requested</th>
                        <th class="th-total-released">Total Released</th>
                        <th class="th-bom-qty">BOM Qty.</th>
                        <th class="th-remaining-qty-to-release">Remaining Qty. to Release</th>
                    </tr>
                </thead>
                <!-- TABLE DATA -->
                <tbody class="td-style">
                    <tr>
                        <td class="td-cat">Consumables / Hardware</td>
                        <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                            (65KGS / 500,000 CYCLES)</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-requested">20</td>
                        <td class="total-released">10</td>
                        <td class="td-bom-qty">50</td>
                        <td class="td-remaining-qty-to-release">10</td>
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