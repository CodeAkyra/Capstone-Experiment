<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View In-Process Excess</title>
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">Request Return : Excess > View In-Process</h1>
        <button class="btn-return" id="returnBtn" onclick="parent.postMessage('returnRequest-returnAction', '*')">Return</button>
    </div>

    <div class="module-content">
        <div class="blue-bar">
            <h1 class="module-title">
                Return Details
                <div class="view-button-container">
                    <button class="view-image-button">View Image</button>
                </div>
            </h1>
            
            <div class="table-bg">
                <table class="table-list-request">
                    <thead class="column-title">
                        <tr class="th-style">
                            <th>Category</th>
                            <th>Material Description</th>
                            <th>Unit</th>
                            <th>Supplier</th>
                            <th>Return Qty.</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">
                        <tr>
                            <td class="td-cat">Consumable / Hardware</td>
                            <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                        </tr>
                        <tr>
                            <td class="td-cat">Consumable / Hardware</td>
                            <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                        </tr>
                        <tr>
                            <td class="td-cat">Consumable / Hardware</td>
                            <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- PAGES -->
        <div class="pageBar" style="margin: 20px; border-radius: 0px;">
            <div class="pageContainer">
                <p class="pageText">Page
                    <a class="page1">1</a>
                    to
                    <a class="page2">3</a>
                </p>
                <div class="pageBtn">
                    <p class="btnPrev">Previous</p>
                    <a id="pageNum">1</a>
                    <a id="pageNum">2</a>
                    <a id="pageNum">3</a>
                    <p class="btnNext">Next</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


