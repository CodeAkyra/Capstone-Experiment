</div>
<script>
    // Include your existing script logic here (like dropdown functionality)

    function loadPHP(file) {
        const content = document.querySelector('.main-content'); // Assuming this is your main content area

        fetch(file)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.text();
            })
            .then(data => {
                content.innerHTML = data; // Load the PHP file content into the main content area
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                content.innerHTML = '<p>Error loading content.</p>'; // Display an error message if something goes wrong
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.module-grp');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                if (dropdown && dropdown.classList.contains('dropdown')) {
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

                    buttons.forEach(btn => {
                        if (btn !== button) {
                            btn.classList.remove('active');
                            const otherDropdown = btn.nextElementSibling;
                            if (otherDropdown && otherDropdown.classList.contains('dropdown')) {
                                otherDropdown.style.display = 'none';
                            }
                        }
                    });
                    button.classList.toggle('active');
                }
            });
        });
    });
</script>



<!--
<script>
        function loadPHPContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.main-content').innerHTML = data;
            })
    }

    loadPHPContent('dashboard.php')
</script>
-->

<!-- PARENT POST MESSAGE -->
<script>
    window.addEventListener('message', function(event) {
        switch (event.data) {

            // DITO ILAGAY YUNG MGA CREATE BUTTONS OR LIKE RECIEVE IDK
            // PRODUCTION MODULE ===================
            case 'production-openCreateRequest':
                loadPHPContent('production/forms/create-request-material.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;
                // PRODUCTION MODULE ===================
            case 'production-openCreateReturn':
                loadPHPContent('production/forms/create-return-excess.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

                // INSTALLATION MODULE ===================
            case 'installation-openCreateRequest':
                loadPHPContent('installation/forms/install-create-request-material.php'); // INSTALLATION CREATE REQUEST MATERIAL
                break;

            case 'installation-openCreateReturn':
                loadPHPContent('installation/forms/install-create-defective-return.php'); // INSTALLATION CREATE REQUEST MATERIAL
                break;

                // INVENTORY MODULE ===================
            case 'inventory-startReceivingDeliveries':
                loadPHPContent('inventory/forms/start-receiving.php'); // INSTALLATION CREATE REQUEST MATERIAL
                break;

                // INVENTORY MODULE ===================
            case 'inventory-startReleaseMaterials':
                loadPHPContent('inventory/forms/start-releasing.php'); // INSTALLATION CREATE REQUEST MATERIAL
                break;

            case 'inventory-actionReceived':
                loadPHPContent('inventory/deliveries.php'); // INSTALLATION CREATE REQUEST MATERIAL
                break;

            case 'inventory-openCreateRequest':
                loadPHPContent('inventory/forms/create-request-purchase.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'inventoryViewBatch-viewAction':
                loadPHPContent('inventory/forms/view-batch-pending.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'openViewImagePending':
                loadPHPContent('inventory/forms/view-batch-pending-image.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'openViewImageCompleted':
                loadPHPContent('inventory/forms/view-batch-completed-image.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'inventoryViewBatchCompleted-viewAction':
                loadPHPContent('inventory/forms/view-batch-completed.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'inventory-viewReleasedMaterials':
                loadPHPContent('inventory/forms/view-released.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'inventory-viewExcessReturnedMaterials':
                loadPHPContent('inventory/forms/view-excess-material.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;

            case 'inventory-viewRequestPurchase':
                loadPHPContent('inventory/forms/view-request-purchase.php'); // PRODUCTION CREATE REQUEST MATERIAL
                break;


                // PURCHASE MODULE ===================
            case 'purchasing-openCreatePO':
                loadPHPContent('purchasing/forms/purchase-order-create-po.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

            case 'purchasing-viewApprovedRequestedMaterial':
                loadPHPContent('purchasing/forms/view-requested-material-approved.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

            case 'purchasing-viewRequestedPurchase':
                loadPHPContent('purchasing/forms/view-requested-purchase.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;


            case 'purchasing-viewPurchaseOrderApproved':
                loadPHPContent('purchasing/forms/view-purchase-order-approved.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

            case 'purchasing-viewPurchaseOrderCompleted':
                loadPHPContent('purchasing/forms/view-purchase-order-completed.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

            case 'purchasing-editPurchaseOrder':
                loadPHPContent('purchasing/forms/edit-purchase-order.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

            case 'purchasing-saveEditPurchaseOrder':
                loadPHPContent('purchasing/purchase-order.php'); // PURCHASE CREATE REQUEST MATERIAL
                break;

                // CLIENT MODULE
            case 'cancel-ClientBtn':
                loadPHPContent('client.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                //SUPPLIER MODULE
            case 'cancel-SupplierBtn':
                loadPHPContent('supplier.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // PRODUCTION MODULE
            case 'createRequestPurchase-cancelAction':
            case 'requestMaterial-discardEditAction':
                loadPHPContent('inventory/request-purchase.php'); // CANCEL, DISCARD INVENTORY CREATE PURCHASE
                break;

            case 'excessMaterial-cancelAction':
                loadPHPContent('inventory/excess-materials.php'); // CANCEL, DISCARD INVENTORY CREATE PURCHASE
                break;

            case 'requestMaterial-cancelAction':
            case 'requestMaterial-discardAction':
                loadPHPContent('production/request-material.php'); // CANCEL, DISCARD PRODUCTION REQUEST MATERIAL
                break;

                // PRODUCTION MODULE
            case 'returnRequest-cancelAction':
            case 'returnRequest-returnAction':
            case 'returnRequest-discardAction':
                loadPHPContent('production/request-return.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // INVENTORY MODULE
            case 'deliveries-cancelAction':
                loadPHPContent('inventory/deliveries.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'releaseMaterials-cancelAction':
                loadPHPContent('inventory/release-materials.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'viewBatchP-cancelAction':
                loadPHPContent('inventory/forms/start-releasing.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'viewExcessP-cancelAction':
                loadPHPContent('inventory/forms/edit-excess-material.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'viewExcessC-cancelAction':
                loadPHPContent('inventory/forms/view-excess-material.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'viewBatchC-cancelAction':
                loadPHPContent('inventory/forms/view-released.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;


                // INSTALLATION MODULE
            case 'installRequest-cancelAction':
                loadPHPContent('installation/installation-request-material.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'installRequest-discardAction':
                loadPHPContent('installation/installation-request-material.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // INSTALLATION MODULE
            case 'installReturn-cancelAction':
                loadPHPContent('installation/installation-defective-return.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // PURCHASING MODULE
            case 'purchasing-cancelCreatePO':
                loadPHPContent('purchasing/purchase-order.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'purchasing-backApprove':
                loadPHPContent('purchasing/requested-material.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

            case 'cancelRequestedPurchase':
                loadPHPContent('purchasing/requested-purchase.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // USER MODULE
            case 'user-cancelCreateUser':
                loadPHPContent('user.php'); // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
                break;

                // DITO MGA RELATED SA PAG EDIT, SAVE
                // USER MODULE
            case 'user-editUser':
                loadPHPContent('forms/user-edit.php'); // 
                break;

            case 'user-saveCreateUser':
                loadPHPContent('user.php'); // 
                break;

                // PRODUCTION MODULE
            case 'productionCreateRequest-saveAction':
                loadPHPContent('production/request-material.php'); // 
                break;

                // PRODUCTION MODULE
            case 'productionCreateReturn-saveAction':
                loadPHPContent('production/request-return.php'); // 
                break;

                // INVENTORY MODULE
            case 'inventoryCreateRequestPurchase-saveAction':
                loadPHPContent('inventory/request-purchase.php'); // 
                break;

            case 'inventoryCreateReceive-saveAction':
                loadPHPContent('inventory/deliveries.php'); // 
                break;

            case 'inventory-editRequestPurchase':
                loadPHPContent('inventory/forms/edit-request-purchase.php'); // 
                break;


            case 'inventory-editExcessBtn':
                loadPHPContent('inventory/forms/edit-excess-material.php');
                break;

            case 'inventory-excessMaterial-saveAction':
                loadPHPContent('inventory/excess-materials.php');
                break;

            case 'inventory-excessMaterialP-viewImage':
                loadPHPContent('inventory/forms/view-excess-pending-image.php');
                break;

            case 'inventory-excessMaterialC-viewImage':
                loadPHPContent('inventory/forms/view-excess-completed-image.php');
                break;



                // INSTALLATION MODULE
                // INSTALLATION MODULE
            case 'installRequest-editAction':
                loadPHPContent('installation/forms/install-edit-request-material.php');
                break;

            case 'installCreateRequest-saveAction':
                loadPHPContent('installation/installation-request-material.php');
                break;
                // INSTALLATION MODULE
                // INSTALLATION MODULE




                // PURCHASING MODULE
                // PURCHASING MODULE
            case 'purchasing-saveCreatePO':
                loadPHPContent('purchasing/purchase-order.php');
                break;

            case 'edit-requestMaterial':
                loadPHPContent('purchasing/forms/requested-material-approve.php');
                break;

            case 'approve-requestMaterial':
                loadPHPContent('purchasing/requested-material.php');
                break;

            case 'purchasing-editRequestedPurchase':
                loadPHPContent('purchasing/forms/requested-purchase-pending.php');
                break;

            case 'purchasing-completeRequestedPurchase':
                loadPHPContent('purchasing/requested-purchase.php');
                break;

            case 'purchasing-editPurchaserOrder':
                loadPHPContent('production/forms/view-completed-excess.php');
                break;
                // PURCHASING MODULE
                // PURCHASING MODULE



                // PRODUCTION MODULE
                // PRODUCTION MODULE
            case 'edit-requestBtn':
                loadPHPContent('production/forms/edit-request-material.php');
                break;

            case 'updateExcPending':
                loadPHPContent('production/forms/update-excess.php');
                break;

            case 'viewInProcessExc':
                loadPHPContent('production/forms/view-inprocess-excess.php');
                break;

            case 'viewCompleteExc':
                loadPHPContent('production/forms/view-completed-excess.php');
                break;
                // PRODUCTION MODULE
                // PRODUCTION MODULE



                // USER MANAGEMENT
                // USER MANAGEMENT
            case 'user-openCreateUser':
                loadPHPContent('forms/user-create.php');
                break;

            case 'user-openEditUser':
                loadPHPContent('forms/user-edit.php');
                break;
                // USER MANAGEMENT
                // USER MANAGEMENT
        }
    });
</script>