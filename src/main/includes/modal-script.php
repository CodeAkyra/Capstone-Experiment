<script>
    // Open Modal Function
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "block"; // Show the modal
            modal.style.zIndex = "1000"; // Ensure the modal is on top

            // Add event listeners for closing the modal
            const closeBtn = modal.querySelector(".close");
            const closeButtonModal = modal.querySelector(".button-modal");

            if (closeBtn) {
                closeBtn.onclick = function() {
                    closeModal(modal);
                };
            }

            if (closeButtonModal) {
                closeButtonModal.onclick = function() {
                    closeModal(modal);
                };
            }

            // Close modal when clicking outside of it
            window.onclick = function(event) {
                if (event.target === modal) {
                    closeModal(modal);
                }
            };
        } else {
            console.error(`Modal with ID ${modalId} does not exist.`);
        }
    }

    // Close Modal Function
    function closeModal(modal) {
        if (modal) {
            modal.style.display = "none"; // Hide the modal
        } else {
            console.error("Cannot close modal. Modal element is undefined.");
        }
    }
</script>

<script>
    /*
        // CLIENT MODAL CREATE
        (function() {
            const clientModal = document.getElementById("create-client-modal");
            const closeBtn = clientModal.querySelector(".close");
            const closeButtonModal = clientModal.querySelector(".button-modal");

            closeBtn.onclick = function() {
                closeModal(clientModal);
            };

            closeButtonModal.onclick = function() {
                closeModal(clientModal);
            };

            window.onclick = function(event) {
                if (event.target === clientModal) {
                    closeModal(clientModal);
                }
            };

            window.openCreateClientModal = function() {
                openModal("create-client-modal");
            };
        })();

        // CLIENT MODAL EDIT
        (function() {
            const clientModal = document.getElementById("edit-client-modal");
            const closeBtn = clientModal.querySelector(".close");
            const closeButtonModal = clientModal.querySelector(".button-modal");

            closeBtn.onclick = function() {
                closeModal(clientModal);
            };

            closeButtonModal.onclick = function() {
                closeModal(clientModal);
            };

            window.onclick = function(event) {
                if (event.target === clientModal) {
                    closeModal(clientModal);
                }
            };

            window.openEditClientModal = function() {
                openModal("edit-client-modal");
            };
        })();

        // SUPPLIER MODAL CREATE
        (function() {
            const supplierModal = document.getElementById("create-supplier-modal");
            const closeBtn = supplierModal.querySelector(".close");
            const closeButtonModal = supplierModal.querySelector(".supplierconfirm-btn");

            closeBtn.onclick = function() {
                closeModal(supplierModal);
            };

            closeButtonModal.onclick = function() {
                closeModal(supplierModal);
            };

            window.onclick = function(event) {
                if (event.target === supplierModal) {
                    closeModal(supplierModal);
                }
            };

            window.openCreateSupplierModal = function() {
                openModal("create-supplier-modal");
            };
        })();

        // SUPPLIER MODAL EDIT
        (function() {
            const supplierModal = document.getElementById("edit-supplier-modal");
            const closeBtn = supplierModal.querySelector(".close");
            const closeButtonModal = supplierModal.querySelector(".supplierbutton-modal");

            closeBtn.onclick = function() {
                closeModal(supplierModal);
            };

            closeButtonModal.onclick = function() {
                closeModal(supplierModal);
            };

            window.onclick = function(event) {
                if (event.target === supplierModal) {
                    closeModal(supplierModal);
                }
            };

            window.openEditSupplierModal = function() {
                openModal("edit-supplier-modal");
            };
        })();
    */



    /*
    // PRODUCTION MODULE
    (function() {
        var itemSummaryModal = document.getElementById("viewProduction-requestMaterial-approved");
        var closeBtn = itemSummaryModal.querySelector(".closeBtn");

        function viewProductionMaterialApproved() {
            itemSummaryModal.style.display = "block";
        }

        function closeRequestItemSummaryModal() {
            itemSummaryModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeRequestItemSummaryModal();
        };

        window.viewProductionMaterialApproved = viewProductionMaterialApproved;
        window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
    })();

    */

    /*
    // PRODUCTION MODULE
    (function() {
        var itemSummaryModal = document.getElementById("viewProduction-requestMaterial-completed");
        var closeBtn = itemSummaryModal.querySelector(".closeBtn");

        function viewProductionMaterialCompleted() {
            itemSummaryModal.style.display = "block";
        }

        function closeRequestItemSummaryModal() {
            itemSummaryModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeRequestItemSummaryModal();
        };

        window.viewProductionMaterialCompleted = viewProductionMaterialCompleted;
        window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
    })();
    */

    /* HINATI TOH SA DALAWA, APPROVED AND COMPLETED 

    // INSTALLATION MODULE
    // Script to manage the opening and closing of the INSTALLATION Request Item Summary Modal
    (function() {
        var itemSummaryModal = document.getElementById("request-item-summary-modal");
        var closeBtn = itemSummaryModal.querySelector(".closeBtn");

        function openRequestItemSummaryModal() {
            itemSummaryModal.style.display = "block";
        }

        function closeRequestItemSummaryModal() {
            itemSummaryModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeRequestItemSummaryModal();
        };

        window.openRequestItemSummaryModal = openRequestItemSummaryModal;
        window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
    })();
    */

    /*
    // INSTALLATION MODULE
    // Script to manage the opening and closing of the INSTALLATION Return Item Summary Modal
    (function() {
        var itemSummaryModal = document.getElementById("return-item-summary-modal");
        var closeBtn = itemSummaryModal.querySelector(".closeBtn");

        function openReturnItemSummaryModal() {
            itemSummaryModal.style.display = "block";
        }

        function closeReturnItemSummaryModal() {
            itemSummaryModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeReturnItemSummaryModal();
        };

        window.openReturnItemSummaryModal = openReturnItemSummaryModal;
        window.closeReturnItemSummaryModal = closeReturnItemSummaryModal;
    })();
    */

    /* WALA NAMAN START RELEASE ANG PRODUCTION

    // PRODUCTION MODULE
    // Script to manage the opening and closing of the Start Release Materials Modal
    (function() {
        var startReleaseMaterialsModal = document.getElementById("start-release-materials-modal");
        var closeBtn = startReleaseMaterialsModal.querySelector(".closeBtn");

        function openStartReleaseMaterialsModal() {
            startReleaseMaterialsModal.style.display = "block";
        }

        function closeStartReleaseMaterialsModal() {
            startReleaseMaterialsModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeStartReleaseMaterialsModal();
        };

        window.openStartReleaseMaterialsModal = openStartReleaseMaterialsModal;
        window.closeStartReleaseMaterialsModal = closeStartReleaseMaterialsModal;
    })();
    */


    /* NEXT TIME NALANG ITO GAMITIN

    //MODAL FOR NOTIFICATIONS
    //SUCCESS
    (function() {
        var notificationSuccessModal = document.getElementById("notification-success-modal");
        var closeBtn = notificationSuccessModal.querySelector(".continue-button");

        function openNotificationSuccessModal() {
            notificationSuccessModal.style.display = "block";
        }

        function closeNotificationSuccessModal() {
            notificationSuccessModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeNotificationSuccessModal();
        };

        window.openNotificationSuccessModal = openNotificationSuccessModal;
        window.closeNotificationSuccessModal = closeNotificationSuccessModal;
    })();
    */

    /* TO FOLLOW TOH */
    // ADD MATERIAL MODALS
    (function() {
        var AddMaterialModal = document.getElementById("add-material-modal");
        var closeBtn = AddMaterialModal.querySelector(".close");
        var close = AddMaterialModal.querySelector(".button-modal");

        function openAddMaterialModal() {
            AddMaterialModal.style.display = "block";
        }

        function closeAddMaterialModal() {
            AddMaterialModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeAddMaterialModal();
        };

        close.onclick = function() {
            closeAddMaterialModal();
        };

        window.openAddMaterialModal = openAddMaterialModal;
        window.closeAddMaterialModal = closeAddMaterialModal;
    })();

    /*
    // UNLABELED MODAL
    (function() {
        var unlabeledMaterialModal = document.getElementById("unlabeled-materials-modal");
        var closeBtn = unlabeledMaterialModal.querySelector(".close");
        var close = unlabeledMaterialModal.querySelector(".button-modal");

        function openUnlabeledMaterialModal() {
            unlabeledMaterialModal.style.display = "block";
        }

        function closeUnlabeledMaterialModal() {
            unlabeledMaterialModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeUnlabeledMaterialModal();
        };

        close.onclick = function() {
            alert('Saved Successfuly!');
            closeUnlabeledMaterialModal();
        };

        window.openUnlabeledMaterialModal = openUnlabeledMaterialModal;
        window.closeUnlabeledMaterialModal = closeUnlabeledMaterialModal;
    })();
    */

    /* WALA NA TOH
    // SET QUANTITY LEVEL
    (function() {
        var setQuantityLevelModal = document.getElementById("set-quantity-level-modal");
        var closeBtn = setQuantityLevelModal.querySelector(".close");
        var close = setQuantityLevelModal.querySelector(".button-modal");

        function openSetQuantityLevelModal() {
            setQuantityLevelModal.style.display = "block";
            setQuantityLevelModal.style.zIndex = "300";
        }

        function closeSetQuantityLevelModal() {
            setQuantityLevelModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeSetQuantityLevelModal();
        };

        close.onclick = function() {
            closeSetQuantityLevelModal();
        };

        window.openSetQuantityLevelModal = openSetQuantityLevelModal;
        window.closeSetQuantityLevelModal = closeSetQuantityLevelModal;
    })();
    */

    /* HINATI SA DALAWA, INCOMPLETE AND COMPLETED

    // VIEW DELIVERED SUMMARY ITEM
    (function() {
        var viewDeliverySummaryModal = document.getElementById("view-delivery-summary-modal");
        var closeBtn = viewDeliverySummaryModal.querySelector(".close");

        function openViewDeliverySummaryModal() {
            viewDeliverySummaryModal.style.display = "block";
        }

        function closeViewDeliverySummaryModal() {
            viewDeliverySummaryModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeViewDeliverySummaryModal();
        };

        window.openViewDeliverySummaryModal = openViewDeliverySummaryModal;
        window.closeViewDeliverySummaryModal = closeViewDeliverySummaryModal;
    })();
    */

    /*
    // INVENTORY MODULE START RELEASE MATERIALS
    (function() {
        var startReleaseMaterialsModal = document.getElementById("start-release-materials-modal");
        var closeBtn = startReleaseMaterialsModal.querySelector(".closeBtn");
        var saveBtn = startReleaseMaterialsModal.querySelector(".saveBtn");

        function openStartReleaseMaterialsModal() {
            startReleaseMaterialsModal.style.display = "block";
        }

        function closeStartReleaseMaterialsModal() {
            startReleaseMaterialsModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeStartReleaseMaterialsModal();
        };

        saveBtn.onclick = function() {
            closeStartReleaseMaterialsModal();
        };

        window.openStartReleaseMaterialsModal = openStartReleaseMaterialsModal;
        window.closeStartReleaseMaterialsModal = closeStartReleaseMaterialsModal;
    })();
    */


    /*
    // INVENTORY MODULE RELEASED MATERIALS
    (function() {
        var releasedMaterialsModal = document.getElementById("released-materials-modal");
        var closeBtn = releasedMaterialsModal.querySelector(".closeBtn");

        function openReleasedMaterialsModal() {
            releasedMaterialsModal.style.display = "block";
        }

        function closeReleasedMaterialsModal() {
            releasedMaterialsModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeReleasedMaterialsModal();
        };

        window.openReleasedMaterialsModal = openReleasedMaterialsModal;
        window.closeReleasedMaterialsModal = closeReleasedMaterialsModal;
    })();
    */
</script>





<!-- PARENT POST MESSAGE -->
<script>
    window.addEventListener('message', function(event) {
        switch (event.data) {

            case 'openCreateClientModal':
                openModal('create-client-modal'); // OPEN CREATE CLIENT MODAL
                break;

            case 'openEditClientModal':
                openModal('edit-client-modal'); // OPEN EDIT CLIENT MODAL
                break;

            case 'openCreateSupplierModal':
                openModal('create-supplier-modal'); // OPEN CREATE SUPPLIER MODAL
                break;

            case 'openEditSupplierModal':
                openModal('edit-supplier-modal'); // OPEN EDIT SUPPLIER MODAL
                break;

                // NOTIFICATION SUCCESS
            case 'notificationSuccess':
                openNotificationSuccessModal(); // Notification Successful
                break;


                // INVENTORY MODULE
            case 'openStartReleaseMaterial':
                openModal('start-release-materials-modal'); // Create Supplier
                break;

                // INVENTORY MODULE
            case 'openReleasedMaterialsModal':
                openModal('released-materials-modal'); // Create Supplier
                break;

            case 'openCompletedMaterialsModal':
                openModal('released-completed-modal');
                break;

                // PRODUCTION
            case 'viewProductionMaterialApproved':
                openModal('viewProduction-requestMaterial-approved'); // Production Request Return
                break;
                // PRODUCTION
            case 'viewProductionMaterialCompleted':
                openModal('viewProduction-requestMaterial-completed'); // Production Request Return
                break;

                // INSTALLATION MODULE
            case 'openRequestItemSummaryApproved':
                openModal('request-item-summary-approved'); // Installation View Request Item Summary
                break;

                // INSTALLATION MODULE
            case 'openRequestItemSummaryCompleted':
                openModal('request-item-summary-completed'); // Installation View Request Item Summary
                break;

                // UNLABELED MATERIAL
            case 'openUnlabeledMaterialModal':
                openModal('unlabeled-materials-modal'); // Notification Successful
                break;

                // DELIVERED MATERIAL SUMMARY
            case 'viewDeliverySummaryIncomplete':
                openModal('view-delivery-incomplete-modal'); // Notification Successful
                break;

                // DELIVERED MATERIAL SUMMARY
            case 'viewDeliverySummaryCompleted':
                openModal('view-delivery-completed-modal'); // Notification Successful
                break;

                // ADD MATERIAL MODALS
            case 'addMaterial-actionBtn':
                openModal('add-material-modal');
                break;

                // SET QUANTITY LEVEL
            case 'setQuantity-actionBtn':
                openSetQuantityLevelModal();
                break;

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



</body>

</html>