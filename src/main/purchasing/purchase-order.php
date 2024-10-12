<?php
define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">Purchasing > Purchase Order</h1>
    <a href="forms/purchase-order-create-po.php" class="btn-create" id="create-requestBtn">+ Create PO</a>
</div>

<div class="module-content">
    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>

    <div class="blue-bar">
        <h1 class="module-title">Purchase Order</h1>
        <div class="table-bg">
            <table class="table-list-request">
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-status">Status</th>
                        <th class="th-reqID">Purchase Order ID</th>
                        <th class="th-supplier">Supplier Name</th>
                        <th class="th-date">Date Requested</th>
                        <th class="th-date">Date Needed</th>
                        <th class="th-date">Delivery Date</th>
                        <th class="th-req-by">Requested by</th>
                        <th class="th-approved-by">Approved By</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>

                <tbody class="td-style">
                    <tr>
                        <td class="td-status status pending">
                            <span class="circle-color-pending"><i class="fa-solid fa-circle circle-pending"></i>
                                Pending
                            </span>
                        </td>
                        <td class="td-reqID">PO_0001</td>
                        <td class="td-supplier">PRJ#02</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">-</td>
                        <td class="td-req-by">Bautista</td>
                        <td class="td-approved-by">Bautista</td>
                        <td class="td-action">
                            <a href="forms/edit-purchase-order.php" class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></a>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-status status approved">
                            <span class="circle-color-approved"><i class="fa-solid fa-circle circle-approved"></i>
                                Approved
                            </span>
                        </td>
                        <td class="td-reqID">PO_0002</td>
                        <td class="td-supplier">PRJ#01</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">-</td>
                        <td class="td-req-by">Bautista</td>
                        <td class="td-approved-by">Bautista</td>
                        <td class="td-action">


                            <a href="forms/view-purchase-order-approved.php" class="view-button"><i class="btnView fa-solid fa-eye"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-status status completed">
                            <span class="circle-color-completed"><i class="fa-solid fa-circle circle-completed"></i>
                                Completed
                            </span>
                        </td>
                        <td class="td-reqID">PO_0003</td>
                        <td class="td-supplier">PRJ#02</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                        <td class="td-req-by">Bautista</td>
                        <td class="td-approved-by">Bautista</td>
                        <td class="td-action">
                            <a href="forms/view-purchase-order-completed.php" class="view-button"><i class="btnView fa-solid fa-eye"></i></a>
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