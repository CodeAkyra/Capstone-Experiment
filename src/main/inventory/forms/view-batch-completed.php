<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>View Batch Completed</title>
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">View Completed Batch</h1>
        <div class="header-buttons">
            <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('inventory-viewReleasedMaterials', '*')">Back</button>
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
                        <td class="td-action"><button class="view-button" onclick="parent.postMessage('openViewImageCompleted','*')"><i class="btnView fa-solid fa-eye"></i></button></td>
                        <td class="td-action"><button class="view-button" onclick="parent.postMessage('openCompletedMaterialsModal','*')"><i class="btnView fa-solid fa-eye"></i></button></td>
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
</body>

</html>