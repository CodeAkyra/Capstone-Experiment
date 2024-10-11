<!-- WAG MUNA I DEDELETE -->


<!-- SET QUANTITY LEVEL MODAL -->
<div id="set-quantity-level-modal" class="modal">
    <div class="text-font set-quantity-container">
        <div class="set-quantity-header">
            <span class="set-quantity-title"></span>
            <span class="close">&times;</span>
        </div>
        <div class="set-quantity-content">
            <span>Quantity:</span>
            <input class="input setQuantityLevel" type="number" placeholder="0">
        </div>
        <div class="set-quantity-button">
            <button class="button-modal set-quantity">Confirm</button>
        </div>
    </div>
</div>

<!-- SUCCESS NOTIFICATION -->
<div id="notification-success-modal" class="modal">
    <div class="notification-success-content">
        <label class="checkmark-logo">&#9989;</label>
        <span class="success-text">SUCCESS &#128077;</span>
        <span class="desc-text">Click continue to move to the next step.</span>
        <button class="continue-button">CONTINUE</button>
    </div>
</div>



<!-- ADD MATERIAL MODAL -->
<div id="add-material-modal" class="modal">
    <div class="text-font add-material-container">
        <div class="add-material-header">
            <span class="add-material-title">Add Materials</span>
            <span class="close">&times;</span>
        </div>
        <div class="add-material-content">
            <div class="material-content-container">
                <span>Material Description:</span>
                <input class="input materialID" type="text" placeholder="Enter Material">
            </div>
        </div>
        <div class="add-material-content">
            <div class="material-content-container">
                <span>Unit:</span>
                <input class="input materialUnit" type="text" placeholder="Unit" disabled>
            </div>
            <div class="material-content-container">
                <span>Supplier:</span>
                <input class="input materialSupplier" type="text" placeholder="Supplier Name" disabled>
            </div>
        </div>
        <div class="add-material-button">
            <button class="button-modal">Confirm</button>
        </div>
    </div>
</div>

<!-- PRODUCTION -->
<!-- REQUEST RETURN, EXCESS & DEFECTIVE BUTTON MODAL -->
<div id="create-return-modal" class="modal">

    <div class="cr-modal-content">
        <p class="cr-blue-bar">Select Reason of Request Return <span class="close">&times;</span></p>
        <div class="cr-button-container">
            <button id="excessBtn" class="excess-button">Excess</button>
            <button id="defectiveBtn" class="defective-button">Defective</button>
        </div>
    </div>
</div>




<!-- INSTALLATION MODAL-->
<!-- RETURN ITEM SUMMARY MODAL -->
<div id="return-item-summary-modal" class="modal">
    <div class="view-installation-content">
        <div class="item-summary-header">
            <span>Defected Return Summary</span>
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