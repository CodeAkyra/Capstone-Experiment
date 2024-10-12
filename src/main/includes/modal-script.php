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
</script>



<script>
    window.addEventListener('message', function(event) {
        switch (event.data) {
            case 'openCreateClientModal':
                openModal('create-client-modal'); // CREATE CLIENT
                break;

            case 'openEditClientModal':
                openModal('edit-client-modal'); // EDIT CLIENT
                break;

            case 'openCreateSupplierModal':
                openModal('create-supplier-modal'); // CREATE SUPPLIER
                break;

            case 'openEditSupplierModal':
                openModal('edit-supplier-modal'); // EDIT SUPPLIER
                break;

                // INVENTORY MODULE
            case 'openStartReleaseMaterial':
                openModal('start-release-materials-modal'); // START RELEASE MATERIALS
                break;

                // INVENTORY MODULE
            case 'openReleasedMaterialsModal':
                openModal('released-materials-modal'); // RELEASED MATERIALS
                break;

            case 'openCompletedMaterialsModal':
                openModal('released-completed-modal'); // RELEASE COMPLETED
                break;

                // PRODUCTION
            case 'viewProductionMaterialApproved':
                openModal('viewProduction-requestMaterial-approved'); // REQUEST MATERIAL APPROVED
                break;
                // PRODUCTION
            case 'viewProductionMaterialCompleted':
                openModal('viewProduction-requestMaterial-completed'); // REQUEST MATERIAL COMPLETED
                break;

                // INSTALLATION MODULE
            case 'openRequestItemSummaryApproved':
                openModal('request-item-summary-approved'); // REQUEST ITEM APPROVED
                break;

                // INSTALLATION MODULE
            case 'openRequestItemSummaryCompleted':
                openModal('request-item-summary-completed'); // REQUEST ITEM COMPLETED
                break;

                // UNLABELED MATERIAL
            case 'openUnlabeledMaterialModal':
                openModal('unlabeled-materials-modal'); // UNLABELED MATERIALS
                break;

                // DELIVERED MATERIAL SUMMARY
            case 'viewDeliverySummaryIncomplete':
                openModal('view-delivery-incomplete-modal'); // VIEW IN-COMPLETE DELIVERY
                break;

                // DELIVERED MATERIAL SUMMARY
            case 'viewDeliverySummaryCompleted':
                openModal('view-delivery-completed-modal'); //  VIEW COMPLETED DELIVERY
                break;

                // ADD MATERIAL MODALS
            case 'addMaterial-actionBtn':
                openModal('add-material-modal'); // HINDI NA NAGAGAMIT CURRENTLY
                break;

                // SET QUANTITY LEVEL
            case 'setQuantity-actionBtn':
                openSetQuantityLevelModal(); // HINDI NA NAGAGAMIT CURRENTLY
                break;

                // NOTIFICATION SUCCESS
            case 'notificationSuccess':
                openNotificationSuccessModal(); // HINDI NA NAGAGAMIT CURRENTLY
                break;

        }
    });
</script>

</body>

</html>