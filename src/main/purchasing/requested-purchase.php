<?php
define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Requested Purchase</h1>
</div>

<div class="module-content">
    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>


    <div class="blue-bar">
        <h1 class="module-title">Requested Purchase</h1>

        <!-- TABLE -->
        <div class="table-bg">
            <table class="table-list-request">
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-status">Status</th>
                        <th class="th-purchase-order-id">Purchase Order ID</th>
                        <th class="th-date">Date Requested</th>
                        <th class="th-date">Date Processed</th>
                        <th class="th-processed-by">Processed By</th>
                        <th class="th-req-by">Requested by</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>

                <tbody class="td-style">
                    <tr>
                        <td class="td-status status pending"><span class="circle-color-pending"><i class="fa-solid fa-circle circle-pending"></i> Pending</span></td>
                        <td class="td-purchase-order-id">Req_Purchase_001</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-processed-by">-</td>
                        <td class="td-req-by">Bautista</td>
                        <td class="td-action">
                            <a href="forms/requested-purchase-pending.php" class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-status status completed"><span class="circle-color-completed"><i class="fa-solid fa-circle circle-completed"></i> Completed</span></td>
                        <td class="td-purchase-order-id">Req_Purchase_002</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-processed-by">Pizarra</td>
                        <td class="td-req-by">Bautista</td>
                        <td class="td-action">
                            <a href="forms/view-requested-purchase.php" class="view-button"><i class="btnView fa-solid fa-eye"></i></a>
                        </td>
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
include(__DIR__ . '/../includes/footer.php');
?>