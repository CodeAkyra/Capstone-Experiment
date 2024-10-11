<!-- CREATE SUPPLIER -->
<!-- CREATE SUPPLIER -->
<div id="create-supplier-modal" class="modal">
    <div class="client-modal">
        <div class="header-bar">
            <h1>Create New Supplier</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Supplier ID:</span>
                        <input class="input clientID" type="text" value="Supplier_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Supplier Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Supplier Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="button-modal edit"
                        onclick="parent.postMessage('openSupplierModule','*')">Add Supplier</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CREATE SUPPLIER -->
<!-- CREATE SUPPLIER -->

<!-- EDIT SUPPLIER -->
<!-- EDIT SUPPLIER -->
<div id="edit-supplier-modal" class="modal">
    <div class="supplier-modal">
        <div class="header-bar">
            <h1>Edit Supplier Details</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Status:</span>
                        <select class="input status">
                            <option value="0">Active</option>
                            <option value="1">In-active</option>
                        </select>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier ID:</span>
                        <input class="input clientID" type="text" value="Supplier_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Supplier Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Supplier Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="button-modal edit"
                        onclick="parent.postMessage('openSupplierModule','*')">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDIT SUPPLIER -->
<!-- EDIT SUPPLIER -->