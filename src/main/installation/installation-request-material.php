<?php
define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
include(BASE_PATH . 'includes/header.php');
?>

<!-- HEADER -->
<div class="header">
    <h1 class="header-title">Installation > Request Materials</h1>
    <button class="btn-create" id="install-create-request-btn" onclick="parent.postMessage('installation-openCreateRequest','*')">+ Create Request</button>
</div>

<div class="module-content">
    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>
</div>

<div class="blue-bar">
    <h1 class="module-title">Request Materials</h1>

    <!-- TABLE -->
    <div class="table-bg">
        <table class="table-list-request">
            <thead class="column-title">
                <tr class="th-style">
                    <th class="th-status">Status</th>
                    <th class="th-reqID">Request ID</th>
                    <th class="th-project">Project</th>
                    <th class="th-date">Date Requested</th>
                    <th class="th-date">Date Needed</th>
                    <th class="th-date">Date Approved</th>
                    <th class="th-date">Date Completed</th>
                    <th class="th-approved-by">Approved By</th>
                    <th class="th-requested-by">Requested By</th>
                    <th class="th-remarks">Re.</th>
                    <th class="th-action">Action</th>
                </tr>
            </thead>

            <tbody class="td-style">
                <!-- PENDING -->
                <tr>
                    <td class="td-status status pending"><span class="circle-color-pending"><i
                                class="fa-solid fa-circle circle-pending"></i> Pending</span></td>
                    <td class="td-style">Req_001</td>
                    <td class="td-style">PRJ#01</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">-</td>
                    <td class="td-style">-</td>
                    <td class="td-style">-</td>
                    <td class="td-style">Pizarra</td>
                    <td class="td-feedback">Icon</td>
                    <td class="td-action">
                        <button class="edit-button installRequest-editAction" onclick="parent.postMessage('installRequest-editAction','*')"><i
                                class="btnEdit fa-solid fa-pen-to-square"></i></button>
                        <button class="delete-button" onclick="actionDelete()"><i
                                class="btnDelete fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- APPROVED -->
                <tr>
                    <td class="td-status status approved"><span class="circle-color-approved"><i
                                class="fa-solid fa-circle circle-approved"></i> Approved</span></td>
                    <td class="td-style">Req_002</td>
                    <td class="td-style">PRJ#01</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">MM/DD/YYYY</td>
                    <td class="td-style">-</td>
                    <td class="td-style">Pizarra</td>
                    <td class="td-style">Pizarra</td>
                    <td class="td-feedback">Icon</td>
                    <td class="td-action">
                        <button class="view-button" id="open-item-summary-btn" onclick="parent.postMessage('openRequestItemSummaryApproved', '*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                    </td>
                </tr>

                <!-- COMPLETED -->
                <tr>
                    <td class="td-status status completed"><span class="circle-color-completed"><i
                                class="fa-solid fa-circle circle-completed"></i> Completed</span></td>
                    <td class="td-style">Req_003</td>
                    <td class="td-style">PRJ#01</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">MM/DD/YYYY</td>
                    <td class="td-style">MM/DD/YYYY 12:00AM</td>
                    <td class="td-style">Pizarra</td>
                    <td class="td-style">Bautista</td>
                    <td class="td-feedback">Icon</td>
                    <td class="td-action">
                        <button class="view-button" id="open-item-summary-btn" onclick="parent.postMessage('openRequestItemSummaryCompleted', '*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                    </td>
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
include(__DIR__ . '/../includes/footer.php');
?>


<!-- REQUEST ITEM APPROVED -->
<!-- REQUEST ITEM APPROVED -->
<div id="request-item-summary-approved" class="modal">
    <div class="view-installation-content">
        <div class="item-summary-header">
            <span>Requested Material Approved</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
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
        </div>
    </div>
</div>
<!-- REQUEST ITEM APPROVED -->
<!-- REQUEST ITEM APPROVED -->




<!-- REQUEST ITEM COMPLETED -->
<!-- REQUEST ITEM COMPLETED -->
<div id="request-item-summary-completed" class="modal">
    <div class="view-installation-content">
        <div class="item-summary-header">
            <span>Requested Material Completed</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
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
        </div>
    </div>
</div>
<!-- REQUEST ITEM COMPLETED -->
<!-- REQUEST ITEM COMPLETED -->