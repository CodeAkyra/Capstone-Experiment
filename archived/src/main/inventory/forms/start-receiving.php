<div class="header">
    <h1 class="header-title">Inventory > Deliveries > Start Receiving</h1>
    <div class="header-buttons">
        <button class="btn-cancel" id="cancelrequestBtn" onclick="parent.postMessage('deliveries-cancelAction', '*')">Cancel</button>
        <button class="btn-finish-receiving" id="save-create-request"
        onclick="alert('Deliveries Received!'); parent.postMessage('inventoryCreateReceive-saveAction', '*');">Receive Deliveries</button>
    </div>
</div>

<div class="entries">
    <span>Show
        <input class="entry-num" type="int" value="0">
        Entries</span>
</div>

<div class="blue-bar">
    <h1 class="module-title">Receive Deliveries</h1>

    <!-- TABLE -->
    <div class="table-bg">
        <table class="table-view-records">
            <!-- TABLE HEADER -->
            <thead class="column-title">
                <tr class="th-style">
                    <th class="th-cat">Category</th>
                    <th class="th-mat-desc">Material Description</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-qty">Qty.</th>
                    <th class="th-quantity-received">Received Quantity</th>
                </tr>
            </thead>
            <!-- TABLE DATA -->
            <tbody class="td-style">
                <tr>
                    <td class="td-cat">Consumables / Hardware</td>
                    <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                        (65KGS / 500,000 CYCLES)</td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-qty">0</td>
                    <td class="td-quantity-received"><input class="input qty-received" type="number" value="1000"></td>
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