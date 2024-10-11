<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Master Data</title>
</head>

<body class="body-iframe-padding">

    <!-- HEADER -->
    <div class="header">
        <h1 class="header-title">Inventory > Master Data</h1>
        <button class="btn-unlabeled-status" id="view-records-unlabeled-status" onclick="parent.postMessage('openUnlabeledMaterialModal', '*')">Unlabeled Status</button>
    </div>

    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>

    <div class="blue-bar">
        <div class="grp-vr">
            <h1 class="module-title">Master Data</h1>
            <div class="categoryFilter">
                <span class="select-category">Select Category:</span>
                <input list="selectCategory" id="" class="input-selectCategory" placeholder="Select Category">
                <datalist id="selectCategory">
                    <option value="Glass">
                    <option value="Aluminum">
                    <option value="Steel">
                    <option value="Accessories">
                    <option value="Consumables / Hardware">
                </datalist>
                <button class="btn-sort-by-level">Filter by Level</button>
                <span class="search-bar">Search: </span>
                <input list="options" id="input-desc" class="input-desc-viewRecords"
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

        <!-- TABLE -->
        <div class="table-bg">
            <table class="table-view-records">
                <!-- TABLE HEADER -->
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-line-no">Line No.</th>
                        <th class="th-cat">Category</th>
                        <th class="th-mat-desc">Material Description</th>
                        <th class="th-supplier">Supplier</th>
                        <th class="th-unit">Unit</th>
                        <th class="th-cost">Cost</th>
                        <th class="th-stock-avail">Available / Stock</th>
                    </tr>
                </thead>

                <!-- TABLE DATA -->
                <tbody class="td-style">
                    <tr>
                        <td class="td-line-no">1.</td>
                        <td class="td-cat">Consumables / Hardware</td>
                        <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                            (65KGS / 500,000 CYCLES)</td>
                        <td class="td-supplier">Supplier_Name</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-cost">100</td>
                        <td class="td-stock-avail">
                            500
                            <span class="stock-level normal">Normal</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-line-no">2.</td>
                        <td class="td-cat">Consumables / Hardware</td>
                        <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                            (65KGS / 500,000 CYCLES)</td>
                        <td class="td-supplier">Supplier_Name</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-cost">100</td>
                        <td class="td-stock-avail">
                            0
                            <span class="stock-level outofstock">Out of Stock</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-line-no">3.</td>
                        <td class="td-cat">Consumables / Hardware</td>
                        <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                            (65KGS / 500,000 CYCLES)</td>
                        <td class="td-supplier">Supplier_Name</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-cost">100</td>
                        <td class="td-stock-avail">
                            100
                            <span class="stock-level low">Low</span>
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
                <p class="btnPrev">&lt;</p> <!-- "<", hindi na yung word na "Previews" -->
                <a class="pageNum active" id="pageNum">1</a>
                <a id="pageNum">2</a>
                <a id="pageNum">3</a>
                <a id="pageNum">4</a>
                <p class="btnNext">&gt;</p> <!-- ">", hindi na yung word na "Next" -->
            </div>
        </div>
    </div>

    
    <!-- UNLABELED MATERIALS MODAL -->
    <!-- UNLABELED MATERIALS MODAL -->
    <div id="unlabeled-materials-modal" class="modal">
        <div class="unlabeled-material-content">
            <div class="item-summary-header">
                <span>Unlabeled Materials</span>
                <span class="close closeBtn" id="close-item-summary">&times;</span>
            </div>
            <div class="modal-show-entries">
                <div class="entries">
                    <span>Show
                        <input class="entry-num" type="int" value="0">
                        Entries</span>
                    <button class="button-modal save">Save and Confirm</button>
                </div>
            </div>
            <table class="item-summary-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Material Description</th>
                        <th>Unit</th>
                        <th>Cost</th>
                        <th>Available Quantity</th>
                        <th>Set Alert Quantity Level</th>
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
                        <td class="">500</td>
                        <td class="td-set-alert-quantity"><input type="number" value="0"></td>
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
    <!-- UNLABELED MATERIALS MODAL -->
    <!-- UNLABELED MATERIALS MODAL -->

</body>

</html>