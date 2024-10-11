<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveries</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">

    <!-- HEADER -->
    <div class="header">
        <h1 class="header-title">Inventory > Deliveries</h1>
    </div>

    <div class="module-content">
        <div class="entries">
            <span>Show
                <input class="entry-num" type="int" value="0">
                Entries</span>
        </div>


        <div class="blue-bar">
            <h1 class="module-title">Expected Deliveries</h1>

            <!-- TABLE -->
            <div class="table-bg">
                <table class="table-list-request">
                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-status">Status</th>
                            <th class="th-purchase-order-id">Purchase Order ID</th>
                            <th class="th-supplier-name">Supplier Name</th>
                            <th class="th-date">Date Requested</th>
                            <th class="th-date">Date Needed</th>
                            <th class="th-date">Delivery Date</th>
                            <th class="th-req-by">Requested by</th>
                            <th class="th-approve-by">Approved By</th>
                            <th class="th-action">Action</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">
                        <tr>
                            <td class="td-status status processing"><span class="circle-color-processing"><i class="fa-solid fa-circle circle-processing"></i> Processing</span></td>
                            <td class="td-reqID">Req_0002</td>
                            <td class="td-proj-name">PRJ#02</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">-</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-req-by">-</td>
                            <td class="td-action">
                                <button class="edit-button" onclick="parent.postMessage('inventory-startReceivingDeliveries','*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="td-status status incomplete"><span class="circle-color-incomplete"><i class="fa-solid fa-circle circle-in-complete"></i> In-complete</span></td>
                            <td class="td-reqID">Req_0002</td>
                            <td class="td-proj-name">PRJ#02</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-action">
                                <button class="edit-button" onclick="parent.postMessage('inventory-startReceivingDeliveries','*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                                <button class="view-button" onclick="parent.postMessage('viewDeliverySummaryIncomplete','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="td-status status completed"><span class="circle-color-completed"><i class="fa-solid fa-circle circle-completed"></i> Completed</span></td>
                            <td class="td-reqID">Req_0002</td>
                            <td class="td-proj-name">PRJ#02</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-action">
                                <button class="view-button" onclick="parent.postMessage('viewDeliverySummaryCompleted','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
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


    <!-- DELIVERY MODULE -->
    <!-- DELIVERY MODULE -->
    <!-- DELIVERY ITEM INCOMPLETE -->
    <!-- DELIVERY ITEM INCOMPLETE -->
    <div id="view-delivery-incomplete-modal" class="modal">
        <div class="view-delivery-content">
            <div class="item-summary-header">
                <span>Delivered Material In-complete</span>
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
                        <th>Delivered Quantity</th>
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
    <!-- DELIVERY ITEM INCOMPLETE -->
    <!-- DELIVERY ITEM INCOMPLETE -->
    <!-- DELIVERY MODULE -->
    <!-- DELIVERY MODULE -->


    <!-- DELIVERY MODULE -->
    <!-- DELIVERY MODULE -->
    <!-- DELIVERY ITEM COMPLETED -->
    <!-- DELIVERY ITEM COMPLETED -->
    <div id="view-delivery-completed-modal" class="modal">
        <div class="view-delivery-content">
            <div class="item-summary-header">
                <span>Delivered Material Completed</span>
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
                        <th>Delivered Quantity</th>
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
    <!-- DELIVERY ITEM COMPLETED -->
    <!-- DELIVERY ITEM COMPLETED -->
    <!-- DELIVERY MODULE -->
    <!-- DELIVERY MODULE -->

</body>

</html>