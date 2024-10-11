<?php
session_start();
// Initialize session to store clients
if (!isset($_SESSION['clients'])) {
    $_SESSION['clients'] = [];
}

// Check if form is submitted and process the form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'add') {
            // Create new client
            $clientID = htmlspecialchars($_POST['clientID']);
            $clientName = htmlspecialchars($_POST['clientName']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $location = htmlspecialchars($_POST['location']);

            // Add the new client to the session
            $_SESSION['clients'][] = [
                'clientID' => $clientID,
                'clientName' => $clientName,
                'telephone' => $telephone,
                'phone' => $phone,
                'email' => $email,
                'location' => $location
            ];
        } elseif ($_POST['action'] === 'update') {
            // Update existing client
            $clientID = htmlspecialchars($_POST['clientID']);
            foreach ($_SESSION['clients'] as &$client) {
                if ($client['clientID'] === $clientID) {
                    $client['clientName'] = htmlspecialchars($_POST['clientName']);
                    $client['telephone'] = htmlspecialchars($_POST['telephone']);
                    $client['phone'] = htmlspecialchars($_POST['phone']);
                    $client['email'] = htmlspecialchars($_POST['email']);
                    $client['location'] = htmlspecialchars($_POST['location']);
                }
            }
        } elseif ($_POST['action'] === 'delete') {
            // Delete client
            $clientID = htmlspecialchars($_POST['clientID']);
            foreach ($_SESSION['clients'] as $key => $client) {
                if ($client['clientID'] === $clientID) {
                    unset($_SESSION['clients'][$key]);
                }
            }
        }

        // Redirect to avoid form resubmission on refresh
        header('Location: client.php'); // Adjust the redirect URL accordingly
        exit();
    }
}

// Retrieve client details for editing if the edit button was clicked
$clientToEdit = null;
if (isset($_GET['edit'])) {
    foreach ($_SESSION['clients'] as $client) {
        if ($client['clientID'] === $_GET['edit']) {
            $clientToEdit = $client;
            break;
        }
    }
}
?>

<?php
include('includes/header.php');
?>


<div class="header">
    <h1 class="header-title">Client Records</h1>
    <button class="btn-create" id="open-modal-btn" onclick="document.getElementById('create-client-modal').style.display='block'">Create New Client</button>
</div>

<div class="module-content">
    <div class="blue-bar">
        <h1 class="module-title">Client Records</h1>
        <div class="table-bg">
            <table class="table-list-request">
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
                    <?php foreach ($_SESSION['clients'] as $client) : ?>
                        <tr id="row-<?= $client['clientID'] ?>">
                            <td class="td-clientID"><?= $client['clientID'] ?></td>
                            <td class="td-client-name"><span class="editable" data-field="clientName"><?= $client['clientName'] ?></span></td>
                            <td class="td-telephone"><span class="editable" data-field="telephone"><?= $client['telephone'] ?></span></td>
                            <td class="td-phone"><span class="editable" data-field="phone"><?= $client['phone'] ?></span></td>
                            <td class="td-email"><span class="editable" data-field="email"><?= $client['email'] ?></span></td>
                            <td class="td-location"><span class="editable" data-field="location"><?= $client['location'] ?></span></td>
                            <td class="td-action">
                                <button class="edit-button" type="button" onclick="toggleEdit('<?= $client['clientID'] ?>', this)">Edit</button>
                                <button class="archive-button" type="button" onclick="openDeleteConfirmationModal('<?= $client['clientID'] ?>').style.display='block'">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php
include('includes/footer.php');
?>

<!-- Create Client Modal -->
<div id="create-client-modal" class="modal" style="display: none; z-index: 1000;">
    <div class="client-modal">
        <div class="header-bar">
            <h1>Create New Client</h1>
            <span class="close" onclick="document.getElementById('create-client-modal').style.display='none'">&times;</span>
        </div>
        <div class="module-title">
            <form method="POST" action="client.php">
                <input type="hidden" name="action" value="add">
                <input type="hidden" name="clientID" value="Client_<?= count($_SESSION['clients']) + 1 ?>">
                <div class="client-content">
                    <div class="inputs-top-row">
                        <div class="input-grp">
                            <span class="input-label">Client ID:</span>
                            <input class="input clientID" name="clientID" type="text" value="Client_<?= count($_SESSION['clients']) + 1 ?>" readonly>
                        </div>
                        <div class="input-grp">
                            <span class="input-label">Client Name:</span>
                            <input class="input client-name" name="clientName" type="text" placeholder="Enter Client Name" required>
                        </div>
                        <div class="input-grp">
                            <span class="input-label">Telephone:</span>
                            <input class="input telephone" name="telephone" type="tel" placeholder="#" required>
                        </div>
                        <div class="input-grp">
                            <span class="input-label">Phone:</span>
                            <input class="input phone" name="phone" type="tel" placeholder="#" required>
                        </div>
                    </div>
                    <div class="inputs-bottom-row">
                        <div class="input-grp">
                            <span class="input-label">Email:</span>
                            <input class="input email" name="email" type="email" placeholder="Enter Client Email" required>
                        </div>
                        <div class="input-grp">
                            <span class="input-label">Location:</span>
                            <input class="input location" name="location" type="text" placeholder="Enter Address" required>
                        </div>
                    </div>
                    <div class="client-button-container">
                        <button class="button-modal client" type="submit">Add Client</button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" style="display: none; z-index: 1000;">
    <div class="delete-modal">
        <div class="header-bar">
            <h1>Delete Confirmation</h1>
            <span class="close" onclick="document.getElementById('delete-confirmation-modal').style.display='none'">&times;</span>
        </div>
        <div class="modal-body">
            <p style="margin: 0px 10px 0px 10px;">Are you sure you want to delete this client?</p>
        </div>
        <div class="modal-footer">
            <button id="confirm-delete-btn" class="btn-create" type="button" onclick="confirmDelete()">Yes, Delete</button>
            <button class="btn-cancel" type="button" onclick="document.getElementById('delete-confirmation-modal').style.display='none'">Cancel</button>
        </div>
    </div>
</div>


<script>
    let clientIDToDelete = null;

    function openDeleteConfirmationModal(clientID) {
        clientIDToDelete = clientID; // Store client ID to delete
        document.getElementById('delete-confirmation-modal').style.display = 'block';
    }

    function closeDeleteConfirmationModal() {
        document.getElementById('delete-confirmation-modal').style.display = 'none';
    }

    function confirmDelete() {
        if (clientIDToDelete) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'client.php'; // Adjust the action URL if necessary

            const actionInput = document.createElement('input');
            actionInput.type = 'hidden';
            actionInput.name = 'action';
            actionInput.value = 'delete';

            const clientIDInput = document.createElement('input');
            clientIDInput.type = 'hidden';
            clientIDInput.name = 'clientID';
            clientIDInput.value = clientIDToDelete;

            form.appendChild(actionInput);
            form.appendChild(clientIDInput);
            document.body.appendChild(form);
            form.submit(); // Submit the form to delete the client
        }
    }

    function toggleEdit(clientID, button) {
        const row = document.getElementById('row-' + clientID);
        const editableFields = row.querySelectorAll('.editable');

        if (button.innerText === 'Edit') {
            // Switch to edit mode
            editableFields.forEach(field => {
                const currentValue = field.innerText;
                field.innerHTML = `<input type="text" value="${currentValue}" />`;
            });

            button.innerText = 'Save';
            button.insertAdjacentHTML('afterend', '<button class="cancel-button" type="button" onclick="cancelEdit(\'' + clientID + '\', this)">Cancel</button>');
        } else {
            // Save the edited values
            const updatedData = {};
            editableFields.forEach(field => {
                const inputField = field.querySelector('input');
                updatedData[field.dataset.field] = inputField.value;
                field.innerText = inputField.value; // Update the displayed value
            });

            // Send an AJAX request to save the changes (you can use fetch or XMLHttpRequest)
            const formData = new FormData();
            formData.append('action', 'update');
            formData.append('clientID', clientID);
            for (const key in updatedData) {
                formData.append(key, updatedData[key]);
            }

            fetch('client.php', {
                method: 'POST',
                body: formData,
            }).then(response => {
                // Handle response if necessary
            });

            button.innerText = 'Edit';
            button.nextElementSibling.remove(); // Remove the Cancel button
        }
    }

    function cancelEdit(clientID, button) {
        const row = document.getElementById('row-' + clientID);
        const editableFields = row.querySelectorAll('.editable');

        editableFields.forEach(field => {
            field.innerText = field.querySelector('input').value; // Reset to original value
        });

        button.previousElementSibling.innerText = 'Edit'; // Change button back to Edit
        button.remove(); // Remove the Cancel button
    }

    // Add event listener for closing the modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target === document.getElementById('delete-confirmation-modal')) {
            closeDeleteConfirmationModal();
        }
    }
</script>




<!-- PINA GPT KO LANG LAHAT TOH PARA MAKITA KO KUNG MAG FUFUNCTION NG MAAYOS YUNG MODAL, CRUD, AND SHT -->