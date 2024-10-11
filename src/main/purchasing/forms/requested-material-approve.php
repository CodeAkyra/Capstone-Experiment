<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="/src/styles/tables.css">
    <title>Requested Material Approve</title>
</head>

<body class="body-iframe-padding">

    <div class="header">
        <h1 class="header-title">Purchasing > Requested Material > Approval</h1>
        <button class="button btn-cancel" onclick="parent.postMessage('purchasing-backApprove','*')">Back</button>
        <button class="button green" id="approve-requestMaterial"
            onclick="alert('Requested Material Approved!');parent.postMessage('approve-requestMaterial','*')">Approve</button>
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
                <p class="btnPrev">&lt;</p> <!-- "<", hindi na yung word na "Previews" -->
                <a class="pageNum active" id="pageNum">1</a>
                <a id="pageNum">2</a>
                <a id="pageNum">3</a>
                <a id="pageNum">4</a>
                <p class="btnNext">&gt;</p> <!-- ">", hindi na yung word na "Next" -->
            </div>
        </div>
    </div>
</body>

</html>