<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>View Batch</title>
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">View Pending Batch</h1>
        <div class="header-buttons">
            <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('viewBatchP-cancelAction', '*')">Back</button>
        </div>
    </div>

    <div class="entries">
        <span>Show
            <input class="entry-num" type="int" value="0">
            Entries</span>
    </div>

    <div class="blue-bar">
        <h1 class="module-title">Release Materials</h1>

        <!-- TABLE -->
        <div class="table-bg">
            <table class="table-view-records">
                <!-- TABLE HEADER -->
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-batch-no">Batch No.</th>
                        <th class="th-date">Date of Release</th>
                        <th class="th-action">Proof of Release</th>
                        <th class="th-action">Materials</th>
                    </tr>
                </thead>
                <!-- TABLE DATA -->
                <tbody class="td-style">
                    <tr>
                        <td class="td-batch-no">Batch_0001</td>
                        <td class="td-date">YYYY/MM/DD 10:10:10</td>
                        <td class="td-action"><button class="view-button" onclick="parent.postMessage('openViewImagePending','*')"><i class="btnView fa-solid fa-eye"></i></button></td>
                        <td class="td-action"><button class="view-button" onclick="parent.postMessage('openReleasedMaterialsModal','*')"><i class="btnView fa-solid fa-eye"></i></button></td>
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
    </div>

    <div id="released-materials-modal" class="modal">
        <div class="start-release-material-content">
            <div class="item-summary-header">
                <span>Released Material</span>
                <span class="close closeBtn" id="close-item-summary">&times;</span>
            </div>
            <span class="label style">Batch ID:</span>
            <input class="input batchID" type="number" placeholder="Bat_0001" disabled>
            <span class="label style">Released Date:</span>
            <input class="input releasedDate" type="number" placeholder="MM/DD/YYYY" disabled>
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
                        <th class="th-category">Category</th>
                        <th class="th-material-description">Material Description</th>
                        <th class="th-unit">Unit</th>
                        <th class="th-supplier">Supplier</th>
                        <th class="th-remaining">Remaining</th>
                        <th class="th-released">Released</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-category">Consumables/Hardware</td>
                        <td class="td-material-description">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                            (65KGS / 500,000 CYCLES)
                        </td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-supplier">100</td>
                        <td class="td-remaining">10</td>
                        <td class="td-released">10</td>
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
</body>

</html>