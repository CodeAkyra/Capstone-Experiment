<?php
include('includes/header.php');
?>


<div class="header">
    <h1 class="header-title">Supplier Records</h1>
    <button class="btn-create" id="create-new-supplierBtn" onclick="parent.postMessage('openCreateSupplierModal', '*')">Create New Supplier</button>
</div>

<div class="module-content">
    <div class="entries">
        <span>Show
            <input type="int" value="0" class="entry-num">
            Entries
        </span>
    </div>

    <div class="blue-bar">
        <h1 class="module-title">Supplier Records</h1>
        <div class="table-bg">
            <table class="table-list-request">

                <!-- Hindi muna aq nag lagay ng mga class / ID masyado -->
                <thead class="column-title">
                    <tr class="th-style">
                        <th>Status</th>
                        <th>Supplier ID</th>
                        <th>Supplier Name</th>
                        <th>Telephone</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="td-style">
                    <tr>
                        <td class="td-status"><span class="circle-color-active"><i class="fa-solid fa-circle circle-active"></i> Active</span></td>
                        <td class="td-style">Supplier_01</td>
                        <td class="td-style">Supplier_Name_1</td>
                        <td class="td-style">123-456-789</td>
                        <td class="td-style">0987654321</td>
                        <td class="td-style">supplier @gmail.com</td>
                        <td class="td-style">Antipolo, Rizal</td>
                        <td class="td-action">
                            <button class="edit-button" onclick="parent.postMessage('openEditSupplierModal', '*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="archive-button"><i class="btnArchive fa-solid fa-box-archive"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-status"><span class="circle-color-inactive"><i class="fa-solid fa-circle circle-inactive"></i> In-active</span></td>
                        <td class="td-style">Supplier_02</td>
                        <td class="td-style">Supplier_Name_2</td>
                        <td class="td-style">123-456-789</td>
                        <td class="td-style">0987654321</td>
                        <td class="td-style">supplier@gmail.com</td>
                        <td class="td-style">Antipolo, Rizal</td>
                        <td class="td-action">
                            <button class="edit-button" onclick="parent.postMessage('openEditSupplierModal', '*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="archive-button"><i class="btnArchive fa-solid fa-box-archive"></i></button>
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



<?php
include('includes/footer.php');
?>

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



<!-- NOT FINAL -->