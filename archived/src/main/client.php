<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>

<body>
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="/src/styles/tables.css">

    <div class="header">
        <h1 class="header-title">Client Recordsss</h1>
        <button class="btn-create" id="open-modal-btn" onclick="parent.postMessage('openCreateClientModal', '*')">Create New Client</button>
    </div>

    <div class="module-content">
        <div class="entries">
            <span>Show
                <input type="int" value="0" class="entry-num">
                Entries
            </span>
        </div>

        <div class="blue-bar">
            <h1 class="module-title">Client Records</h1>
            <div class="table-bg">
                <table class="table-list-request">

                    <!-- Hindi muna aq nag lagay ng mga class / ID masyado -->
                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-clientID">Client ID</th>
                            <th class="th-client-name">Client Name</th>
                            <th class="th-telephone">Telephone</th>
                            <th class="th-phone">Phone</th>
                            <th class="th-email">Email</th>
                            <th class="th-location">Location</th>
                            <th class="th-action">Action</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">
                        <tr>
                            <td class="td-clientID">Client_01</td>
                            <td class="td-client-name">SM Corporation</td>
                            <td class="td-telephone">123-456-789</td>
                            <td class="td-phone">0987654321</td>
                            <td class="td-email">client@gmail.com</td>
                            <td class="td-location">Antipolo, Rizal</td>
                            <td class="td-action">
                                <button class="edit-button" id="edit-client" onclick="parent.postMessage('openEditClientModal', '*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
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


    <!-- CREATE CLIENT MODAL -->
    <!-- CREATE CLIENT MODAL -->
    <div id="create-client-modal" class="modal">
        <div class="client-modal">
            <div class="header-bar">
                <h1>Create New Client</h1><span class="close">&times;</span>
            </div>
            <div class="module-title">
                <div class="client-content">
                    <div class="inputs-top-row">
                        <div class="input-grp">
                            <span class="input-label">Client ID:</span>
                            <input class="input clientID" type="text" value="Client_01" disabled>
                        </div>

                        <div class="input-grp">
                            <span class="input-label">Client Name:</span>
                            <input class="input client-name" type="text" placeholder="Enter Client Name">
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
                            <input class="input email" type="email" placeholder="Enter Client Email">
                        </div>

                        <div class="input-grp">
                            <span class="input-label">Location:</span>
                            <input class="input location" type="tel" placeholder="Address">
                        </div>
                    </div>
                    <div class="client-button-container">
                        <button class="button-modal client" onclick="parent.postMessage('openClientModule','*')">Add
                            Client</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CREATE CLIENT MODAL -->
    <!-- CREATE CLIENT MODAL -->


    <!-- EDIT CLIENT MODAL -->
    <!-- EDIT CLIENT MODAL -->
    <div id="edit-client-modal" class="modal">
        <div class="client-modal">
            <div class="header-bar">
                <h1>Edit Client Details</h1><span class="close">&times;</span>
            </div>
            <div class="module-title">
                <div class="client-content">
                    <div class="inputs-top-row">
                        <div class="input-grp">
                            <span class="input-label">Client ID:</span>
                            <input class="input clientID" type="text" value="Client_01" disabled>
                        </div>

                        <div class="input-grp">
                            <span class="input-label">Client Name:</span>
                            <input class="input client-name" type="text" placeholder="Enter Client Name">
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
                            <input class="input email" type="email" placeholder="Enter Client Email">
                        </div>

                        <div class="input-grp">
                            <span class="input-label">Location:</span>
                            <input class="input location" type="tel" placeholder="Address">
                        </div>
                    </div>
                    <div class="client-button-container">
                        <button class="button-modal edit" onclick="parent.postMessage('openClientModule','*')">Save
                            Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EDIT CLIENT MODAL -->
    <!-- EDIT CLIENT MODAL -->


</body>

</html>