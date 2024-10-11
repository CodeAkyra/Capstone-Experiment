// MODAL EXCESS BUTTON
document.getElementById('excessBtn').addEventListener('click', function () {
    parent.postMessage('excessBtn', '*');
});

// MODAL DEFECT BUTTON
document.getElementById('defectiveBtn').addEventListener('click', function () {
    parent.postMessage('defectiveBtn', '*');
});


window.addEventListener('message', function (event) {
    switch (event.data) {

        case 'openClientModule':
            document.getElementById('contentIframe').src = '../main/client.html';
            break;

        case 'openSupplierModule':
            document.getElementById('contentIframe').src = '../main/supplier.html';
            break;
    }
});



// DITO ILAGAY YUNG MGA CREATE BUTTONS OR LIKE RECIEVE IDK
window.addEventListener('message', function (event) {
    switch (event.data) {

        case 'resetIframe':
            document.getElementById('contentIframe').src = '';
            break;

        // PRODUCTION MODULE ===================
        case 'production-openCreateRequest':
            document.getElementById('contentIframe').src = '../main/production/forms/create-request-material.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;
        // PRODUCTION MODULE ===================
        case 'production-openCreateReturn':
            document.getElementById('contentIframe').src = '../main/production/forms/create-return-excess.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;

        // INSTALLATION MODULE ===================
        case 'installation-openCreateRequest':
            document.getElementById('contentIframe').src = '../main/installation/forms/install-create-request-material.html'; // INSTALLATION CREATE REQUEST MATERIAL
            break;

        case 'installation-openCreateReturn':
            document.getElementById('contentIframe').src = '../main/installation/forms/install-create-defective-return.html'; // INSTALLATION CREATE REQUEST MATERIAL
            break;

        // INVENTORY MODULE ===================
        case 'inventory-startReceivingDeliveries':
            document.getElementById('contentIframe').src = '../main/inventory/forms/start-receiving.html'; // INSTALLATION CREATE REQUEST MATERIAL
            break;

        // INVENTORY MODULE ===================
        case 'inventory-startReleaseMaterials':
            document.getElementById('contentIframe').src = '../main/inventory/forms/start-releasing.html'; // INSTALLATION CREATE REQUEST MATERIAL
            break;

        case 'inventory-actionReceived':
            document.getElementById('contentIframe').src = '../main/inventory/deliveries.html'; // INSTALLATION CREATE REQUEST MATERIAL
            break;

        case 'inventory-openCreateRequest':
            document.getElementById('contentIframe').src = '../main/inventory/forms/create-request-purchase.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;

        case 'inventoryViewBatch-viewAction':
            document.getElementById('contentIframe').src = '../main/inventory/forms/view-batch.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;

        case 'inventory-viewReleasedMaterials':
            document.getElementById('contentIframe').src = '../main/inventory/forms/view-released.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;

        case 'inventory-viewExcessReturnedMaterials':
            document.getElementById('contentIframe').src = '../main/inventory/forms/view-excess-material.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;

        case 'inventory-viewRequestPurchase':
            document.getElementById('contentIframe').src = '../main/inventory/forms/view-request-purchase.html'; // PRODUCTION CREATE REQUEST MATERIAL
            break;


        // PURCHASE MODULE ===================
        case 'purchasing-openCreatePO':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/purchase-order-create-po.html'; // PURCHASE CREATE REQUEST MATERIAL
            break;

        case 'purchasing-viewApprovedRequestedMaterial':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/view-requested-material-approved.html'; // PURCHASE CREATE REQUEST MATERIAL
            break;

        case 'purchasing-viewRequestedPurchase':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/view-requested-purchase.html'; // PURCHASE CREATE REQUEST MATERIAL
            break;

        case 'purchasing-viewPurchaseOrder':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/view-purchase-order.html'; // PURCHASE CREATE REQUEST MATERIAL
            break;

    }
});


// DITO MGA RELATED SA PAG RETURN, CANCEL, DISCARD BUTTONS
window.addEventListener('message', function (event) {
    switch (event.data) {


        // CLIENT MODULE
        case 'cancel-ClientBtn':
            document.getElementById('contentIframe').src = '../main/client.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        //SUPPLIER MODULE
        case 'cancel-SupplierBtn':
            document.getElementById('contentIframe').src = '../main/supplier.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        // PRODUCTION MODULE
        case 'createRequestPurchase-cancelAction':
        case 'requestMaterial-discardEditAction':
            document.getElementById('contentIframe').src = '../main/inventory/request-purchase.html'; // CANCEL, DISCARD INVENTORY CREATE PURCHASE
            break;

        case 'excessMaterial-cancelAction':
            document.getElementById('contentIframe').src = '../main/inventory/excess-materials.html'; // CANCEL, DISCARD INVENTORY CREATE PURCHASE
            break;

        case 'requestMaterial-cancelAction':
        case 'requestMaterial-discardEditAction':
            document.getElementById('contentIframe').src = '../main/production/request-material.html'; // CANCEL, DISCARD PRODUCTION REQUEST MATERIAL
            break;

        // PRODUCTION MODULE
        case 'returnRequest-cancelAction':
        case 'returnRequest-returnAction':
        case 'returnRequest-discardAction':
            document.getElementById('contentIframe').src = '../main/production/request-return.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        // INVENTORY MODULE
        case 'deliveries-cancelAction':
            document.getElementById('contentIframe').src = '../main/inventory/deliveries.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        case 'releaseMaterials-cancelAction':
            document.getElementById('contentIframe').src = '../main/inventory/release-materials.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        case 'viewBatch-cancelAction':
            document.getElementById('contentIframe').src = '../main/inventory/forms/start-releasing.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;


        // INSTALLATION MODULE
        case 'installRequest-cancelAction':
            document.getElementById('contentIframe').src = '../main/installation/installation-request-material.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        case 'installRequest-discardAction':
            document.getElementById('contentIframe').src = '../main/installation/installation-request-material.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        // INSTALLATION MODULE
        case 'installReturn-cancelAction':
            document.getElementById('contentIframe').src = '../main/installation/installation-defective-return.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        // PURCHASING MODULE
        case 'purchasing-cancelCreatePO':
            document.getElementById('contentIframe').src = '../main/purchasing/purchase-order.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        case 'purchasing-backApprove':
            document.getElementById('contentIframe').src = '../main/purchasing/requested-material.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

        case 'cancelRequestedPurchase':
            document.getElementById('contentIframe').src = '../main/purchasing/requested-purchase.html'; // CANCEL, DISCARD, RETURN PRODUCTION REQUEST RETURN
            break;

    }
});

// DITO MGA RELATED SA PAG EDIT, SAVE
window.addEventListener('message', function (event) {
    switch (event.data) {


        // PRODUCTION MODULE
        case 'productionCreateRequest-saveAction':
            document.getElementById('contentIframe').src = '../main/production/request-material.html'; // 
            break;

        // PRODUCTION MODULE
        case 'productionCreateReturn-saveAction':
            document.getElementById('contentIframe').src = '../main/production/request-return.html'; // 
            break;

        // INVENTORY MODULE
        case 'inventoryCreateRequestPurchase-saveAction':
            document.getElementById('contentIframe').src = '../main/inventory/request-purchase.html'; // 
            break;

        case 'inventoryCreateReceive-saveAction':
            document.getElementById('contentIframe').src = '../main/inventory/deliveries.html'; // 
            break;

        case 'inventory-editRequestPurchase':
            document.getElementById('contentIframe').src = '../main/inventory/forms/edit-request-purchase.html'; // 
            break;

        case 'inventory-editExcesstBtn':
            document.getElementById('contentIframe').src = '../main/inventory/forms/edit-excess-material.html'; // 
            break;

        case 'inventory-excessMaterial-saveAction':
            document.getElementById('contentIframe').src = '../main/inventory/excess-materials.html'; // 
            break;


        // INSTALLATION MODULE
        case 'installRequest-editAction':
            document.getElementById('contentIframe').src = '../main/installation/forms/install-edit-request-material.html'; // 
            break;

        case 'installReturn-editAction':
            document.getElementById('contentIframe').src = '../main/installation/forms/install-edit-defective-return.html'; // 
            break;

        case 'installCreateRequest-saveAction':
            document.getElementById('contentIframe').src = '../main/installation/installation-request-material.html'; // 
            break;

        case 'installCreateReturn-saveAction':
            document.getElementById('contentIframe').src = '../main/installation/installation-defective-return.html'; // 
            break;

        // PURCHASING MODULE
        case 'purchasing-saveCreatePO':
            document.getElementById('contentIframe').src = '../main/purchasing/purchase-order.html'; // 
            break;

        case 'edit-requestMaterial':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/requested-material-approve.html'; // 
            break;

        case 'approve-requestMaterial':
            document.getElementById('contentIframe').src = '../main/purchasing/requested-material.html'; // 
            break;

        case 'purchasing-editRequestedPurchase':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/requested-purchase-pending.html'; // 
            break;

        case 'purchasing-completeRequestedPurchase':
            document.getElementById('contentIframe').src = '../main/purchasing/requested-purchase.html'; // 
            break;

        case 'purchasing-editPurchaseOrder':
            document.getElementById('contentIframe').src = '../main/purchasing/forms/edit-purchase-order.html'; // 
            break;


    }
});



// MODAL
window.addEventListener('message', function (event) {
    switch (event.data) {

        // CLIENT MODULE
        case 'openCreateClient':
            openCreateClientModal(); // Create Client
            break;

        // CLIENT MODULE
        case 'openEditClient':
            openEditClientModal(); // Edit Client
            break;



        // SUPPLIER MODULE
        case 'openCreateSupplier':
            openCreateSupplierModal(); // Create Supplier
            break;

        // SUPPLIER MODULE
        case 'openEditSupplier':
            openEditSupplierModal(); // Edit Supplier
            break;

        // INVENTORY MODULE
        case 'openStartReleaseMaterial':
            openStartReleaseMaterialsModal(); // Create Supplier
            break;

        // INVENTORY MODULE
        case 'openReleasedMaterialsModal':
            openReleasedMaterialsModal(); // Create Supplier
            break;



        // PRODUCTION
        case 'viewProductionMaterialApproved':
            viewProductionMaterialApproved(); // Production Request Return
            break;
        // PRODUCTION
        case 'viewProductionMaterialCompleted':
            viewProductionMaterialCompleted(); // Production Request Return
            break;



        // INSTALLATION MODULE
        case 'openRequestItemSummaryModal':
            openRequestItemSummaryModal(); // Installation View Request Item Summary
            break;
        // INSTALLATION MODULE
        case 'openReturnItemSummaryModal':
            openReturnItemSummaryModal(); // Installation View Request Item Summary
            break;
        // NOTIFICATION SUCCESS
        case 'notificationSuccess':
            openNotificationSuccessModal(); // Notification Successful
            break;


        // UNLABELED MATERIAL
        case 'openUnlabeledMaterialModal':
            openUnlabeledMaterialModal(); // Notification Successful
            break;

        // DELIVERED MATERIAL SUMMARY
        case 'viewDeliverySummaryModal':
            openViewDeliverySummaryModal(); // Notification Successful
            break;


        // ADD MATERIAL MODALS
        case 'addMaterial-actionBtn':
            openAddMaterialModal();
            break;

        // SET QUANTITY LEVEL
        case 'setQuantity-actionBtn':
            openSetQuantityLevelModal();
            break;

    }
});


window.addEventListener('message', function (event) {
    if (event.data === 'resetIframe') {
        document.getElementById('contentIframe').src = '';
    }

    /** REQUEST RETURN */
    else if (event.data === 'excessBtn') {
        document.getElementById('contentIframe').src = '../main/production/forms/create-return-excess.html';
        closeModal(); // Nasa loob kasi siya ng modal, kaya need ng closeModal(); para i-close yung modal
    } else if (event.data === 'defectiveBtn') {
        document.getElementById('contentIframe').src = '../main/production/forms/create-return-defective.html';
        closeModal();
    }

    /* EDIT BUTTON */
    else if (event.data === 'edit-requestBtn') {
        document.getElementById('contentIframe').src = '../main/production/forms/edit-request-material.html';
    }

    /* View Pending Request Return */
    else if (event.data === 'updateExcPending') {
        document.getElementById('contentIframe').src = '../main/production/forms/update-excess.html';
    } else if (event.data === 'updateDefPending') {
        document.getElementById('contentIframe').src = '../main/production/forms/update-defective.html';
    }

    /* View In-Process for Request Return */
    else if (event.data === 'viewInProcessExc') {
        document.getElementById('contentIframe').src = '../main/production/forms/view-inprocess-excess.html';
    } else if (event.data === 'viewInProcessDef') {
        document.getElementById('contentIframe').src = '../main/production/forms/view-inprocess-defective.html';
    }

    /* View Complete Request Return */
    else if (event.data === 'viewCompleteExc') {
        document.getElementById('contentIframe').src = '../main/production/forms/view-completed-excess.html';
    } else if (event.data === 'viewCompleteDef') {
        document.getElementById('contentIframe').src = '../main/production/forms/view-completed-defective.html';
    }
});