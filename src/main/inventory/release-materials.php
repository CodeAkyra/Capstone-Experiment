<?php
define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
include(BASE_PATH . 'includes/header.php');
?>

<!-- HEADER -->
<div class="header">
    <h1 class="header-title">Inventory > Release Materials</h1>
</div>

<div class="module-content">
    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>


    <div class="blue-bar">
        <h1 class="module-title">Release Materials</h1>

        <!-- TABLE -->
        <div class="table-bg">
            <table class="table-list-request">
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-status">Status</th>
                        <th class="th-request-purchase-id">Request ID</th>
                        <th class="th-proj-name">Project Name</th>
                        <th class="th-date">Date Requested</th>
                        <th class="th-date">Date Needed</th>
                        <th class="th-date">Date Completed</th>
                        <th class="th-date">Date Processed</th>
                        <th class="th-processed-by">Processed By</th>
                        <th class="th-req-by">Requested by</th>
                        <th class="th-remarks">Remarks</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>

                <tbody class="td-style">
                    <tr>
                        <td class="td-status status pending"><span class="circle-color-pending"><i class="fa-solid fa-circle circle-pending"></i> Pending</span></th>
                        <td class="td-request-purchase-id">Req_001</th>
                        <td class="td-proj-name">PRJ#01</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-date">-</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-processed-by">Pizarra</th>
                        <td class="td-req-by">Bautista</th>
                        <td class="td-remarks">Remarks</th>
                        <td class="td-action">
                            </th>
                            <button class="view-button" onclick="parent.postMessage('inventory-startReleaseMaterials','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-status status completed"><span class="circle-color-completed"><i class="fa-solid fa-circle circle-completed"></i> Completed</span></td>
                        <td class="td-request-purchase-id">Req_001</th>
                        <td class="td-proj-name">PRJ#01</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-date">-</th>
                        <td class="td-date">MM/DD/YYYY 12:51 PM</th>
                        <td class="td-processed-by">Pizarra</th>
                        <td class="td-req-by">Bautista</th>
                        <td class="td-remarks">Remarks</th>
                        <td class="td-action">
                            </th>
                            <button class="view-button" onclick="parent.postMessage('inventory-viewReleasedMaterials','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
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