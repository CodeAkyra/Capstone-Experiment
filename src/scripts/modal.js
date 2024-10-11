


// CLIENT MODAL CREATE
(function () {
    var clientModal = document.getElementById("create-client-modal");
    var close = clientModal.querySelector(".button-modal");
    var closeBtn = clientModal.querySelector(".close");

    // Function to open the client modal
    function openCreateClientModal() {
        clientModal.style.display = "flex"; // Use flex to center the modal
    }

    // Function to close the client modal
    function closeClientModal() {
        clientModal.style.display = "none";
    }

    // Close the modal when the close button (×) is clicked
    closeBtn.onclick = function () {
        closeClientModal();
    };

    close.onclick = function () {
        closeClientModal();
    };

    // Close the modal when clicking outside of it
    window.onclick = function (event) {
        if (event.target === clientModal) {
            closeClientModal();
        }
    };

    // Expose the open and close functions to the global scope
    window.openCreateClientModal = openCreateClientModal;
    window.closeClientModal = closeClientModal;
})();

// CLIENT MODAL EDIT
(function () {
    var clientModal = document.getElementById("edit-client-modal");
    var close = clientModal.querySelector(".button-modal");
    var closeBtn = clientModal.querySelector(".close");

    function openEditClientModal() {
        clientModal.style.display = "flex";
    }

    function closeClientModal() {
        clientModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeClientModal();
    };

    close.onclick = function () {
        closeClientModal();
    };

    window.onclick = function (event) {
        if (event.target === clientModal) {
            closeClientModal();
        }
    };

    window.openEditClientModal = openEditClientModal;
    window.closeClientModal = closeClientModal;
})();


// SUPPLIER MODAL CREATE
(function () {
    var supplierModal = document.getElementById("create-supplier-modal");
    var close = supplierModal.querySelector(".supplierconfirm-btn");
    var closeBtn = supplierModal.querySelector(".close");

    function openCreateSupplierModal() {
        supplierModal.style.display = "flex";
    }

    function closeSupplierModal() {
        supplierModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeSupplierModal();
    };

    close.onclick = function () {
        closeSupplierModal();
    };

    window.onclick = function (event) {
        if (event.target === supplierModal) {
            closeSupplierModal();
        }
    };

    window.openCreateSupplierModal = openCreateSupplierModal;
    window.closeSupplierModal = closeSupplierModal;
})();

// SUPPLIER MODAL EDIT
(function () {
    var supplierModal = document.getElementById("edit-supplier-modal");
    var close = supplierModal.querySelector(".supplierbutton-modal");
    var closeBtn = supplierModal.querySelector(".close");

    function openEditSupplierModal() {
        supplierModal.style.display = "flex";
    }

    function closeSupplierModal() {
        supplierModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeSupplierModal();
    };

    close.onclick = function () {
        closeSupplierModal();
    };

    window.onclick = function (event) {
        if (event.target === supplierModal) {
            closeSupplierModal();
        }
    };

    window.openEditSupplierModal = openEditSupplierModal;
    window.closeSupplierModal = closeSupplierModal;
})();




// PRODUCTION MODULE
(function () {
    var itemSummaryModal = document.getElementById("viewProduction-requestMaterial-approved");
    var closeBtn = itemSummaryModal.querySelector(".closeBtn");

    function viewProductionMaterialApproved() {
        itemSummaryModal.style.display = "flex";
    }

    function closeRequestItemSummaryModal() {
        itemSummaryModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeRequestItemSummaryModal();
    };

    window.viewProductionMaterialApproved = viewProductionMaterialApproved;
    window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
})();

// PRODUCTION MODULE
(function () {
    var itemSummaryModal = document.getElementById("viewProduction-requestMaterial-completed");
    var closeBtn = itemSummaryModal.querySelector(".closeBtn");

    function viewProductionMaterialCompleted() {
        itemSummaryModal.style.display = "flex";
    }

    function closeRequestItemSummaryModal() {
        itemSummaryModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeRequestItemSummaryModal();
    };

    window.viewProductionMaterialCompleted = viewProductionMaterialCompleted;
    window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
})();


// PRODUCTION MODULE
// Para mag open yung modal na may Excess Button and Defective Button sa Request Return Module
(function () {
    var modal = document.getElementById("create-return-modal");
    var span = modal.querySelector(".close");

    function openModal() {
        modal.style.display = "block";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    span.onclick = function () {
        closeModal();
    };

    window.onclick = function (event) {
        if (event.target === modal) {
            closeModal();
        }
    };

    // Expose openModal and closeModal to the global scope
    window.openModal = openModal;
    window.closeModal = closeModal;
})();





// INSTALLATION MODULE
// Script to manage the opening and closing of the INSTALLATION Request Item Summary Modal
(function () {
    var itemSummaryModal = document.getElementById("request-item-summary-modal");
    var closeBtn = itemSummaryModal.querySelector(".closeBtn");

    function openRequestItemSummaryModal() {
        itemSummaryModal.style.display = "flex";
    }

    function closeRequestItemSummaryModal() {
        itemSummaryModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeRequestItemSummaryModal();
    };

    window.openRequestItemSummaryModal = openRequestItemSummaryModal;
    window.closeRequestItemSummaryModal = closeRequestItemSummaryModal;
})();


// INSTALLATION MODULE
// Script to manage the opening and closing of the INSTALLATION Return Item Summary Modal
(function () {
    var itemSummaryModal = document.getElementById("return-item-summary-modal");
    var closeBtn = itemSummaryModal.querySelector(".closeBtn");

    function openReturnItemSummaryModal() {
        itemSummaryModal.style.display = "flex";
    }

    function closeReturnItemSummaryModal() {
        itemSummaryModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeReturnItemSummaryModal();
    };

    window.openReturnItemSummaryModal = openReturnItemSummaryModal;
    window.closeReturnItemSummaryModal = closeReturnItemSummaryModal;
})();



// PRODUCTION MODULE
// Script to manage the opening and closing of the Start Release Materials Modal
(function () {
    var startReleaseMaterialsModal = document.getElementById("start-release-materials-modal");
    var closeBtn = startReleaseMaterialsModal.querySelector(".closeBtn");

    function openStartReleaseMaterialsModal() {
        startReleaseMaterialsModal.style.display = "flex";
    }

    function closeStartReleaseMaterialsModal() {
        startReleaseMaterialsModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeStartReleaseMaterialsModal();
    };

    window.openStartReleaseMaterialsModal = openStartReleaseMaterialsModal;
    window.closeStartReleaseMaterialsModal = closeStartReleaseMaterialsModal;
})();




//MODAL FOR NOTIFICATIONS
//SUCCESS
(function () {
    var notificationSuccessModal = document.getElementById("notification-success-modal");
    var closeBtn = notificationSuccessModal.querySelector(".continue-button");

    function openNotificationSuccessModal() {
        notificationSuccessModal.style.display = "flex";
    }

    function closeNotificationSuccessModal() {
        notificationSuccessModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeNotificationSuccessModal();
    };

    window.openNotificationSuccessModal = openNotificationSuccessModal;
    window.closeNotificationSuccessModal = closeNotificationSuccessModal;
})();








// ADD MATERIAL MODALS
(function () {
    var AddMaterialModal = document.getElementById("add-material-modal");
    var closeBtn = AddMaterialModal.querySelector(".close");
    var close = AddMaterialModal.querySelector(".button-modal");

    function openAddMaterialModal() {
        AddMaterialModal.style.display = "flex";
    }

    function closeAddMaterialModal() {
        AddMaterialModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeAddMaterialModal();
    };

    close.onclick = function () {
        closeAddMaterialModal();
    };

    window.openAddMaterialModal = openAddMaterialModal;
    window.closeAddMaterialModal = closeAddMaterialModal;
})();



// UNLABELED MODAL
// UNLABELED MODAL
(function () {
    var unlabeledMaterialModal = document.getElementById("unlabeled-materials-modal");
    var closeBtn = unlabeledMaterialModal.querySelector(".close");
    var close = unlabeledMaterialModal.querySelector(".button-modal");

    function openUnlabeledMaterialModal() {
        unlabeledMaterialModal.style.display = "flex";
    }

    function closeUnlabeledMaterialModal() {
        unlabeledMaterialModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeUnlabeledMaterialModal();
    };

    close.onclick = function () {
        closeUnlabeledMaterialModal();
    };

    window.openUnlabeledMaterialModal = openUnlabeledMaterialModal;
    window.closeUnlabeledMaterialModal = closeUnlabeledMaterialModal;
})();


// SET QUANTITY LEVEL
// SET QUANTITY LEVEL MODAL
(function () {
    var setQuantityLevelModal = document.getElementById("set-quantity-level-modal");
    var closeBtn = setQuantityLevelModal.querySelector(".close");
    var close = setQuantityLevelModal.querySelector(".button-modal");

    function openSetQuantityLevelModal() {
        setQuantityLevelModal.style.display = "flex";
    }

    function closeSetQuantityLevelModal() {
        setQuantityLevelModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeSetQuantityLevelModal();
    };

    close.onclick = function () {
        closeSetQuantityLevelModal();
    };

    window.openSetQuantityLevelModal = openSetQuantityLevelModal;
    window.closeSetQuantityLevelModal = closeSetQuantityLevelModal;
})();


// VIEW DELIVERED SUMMARY ITEM
(function () {
    var viewDeliverySummaryModal = document.getElementById("view-delivery-summary-modal");
    var closeBtn = viewDeliverySummaryModal.querySelector(".close");

    function openViewDeliverySummaryModal() {
        viewDeliverySummaryModal.style.display = "flex";
    }

    function closeViewDeliverySummaryModal() {
        viewDeliverySummaryModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeViewDeliverySummaryModal();
    };

    window.openViewDeliverySummaryModal = openViewDeliverySummaryModal;
    window.closeViewDeliverySummaryModal = closeViewDeliverySummaryModal;
})();




// INVENTORY MODULE START RELEASE MATERIALS
(function () {
    var startReleaseMaterialsModal = document.getElementById("start-release-materials-modal");
    var closeBtn = startReleaseMaterialsModal.querySelector(".closeBtn");
    var saveBtn = startReleaseMaterialsModal.querySelector(".saveBtn");

    function openStartReleaseMaterialsModal() {
        startReleaseMaterialsModal.style.display = "flex";
    }

    function closeStartReleaseMaterialsModal() {
        startReleaseMaterialsModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeStartReleaseMaterialsModal();
    };

    saveBtn.onclick = function () {
        closeStartReleaseMaterialsModal();
    };

    window.openStartReleaseMaterialsModal = openStartReleaseMaterialsModal;
    window.closeStartReleaseMaterialsModal = closeStartReleaseMaterialsModal;
})();

// INVENTORY MODULE RELEASED MATERIALS
(function () {
    var releasedMaterialsModal = document.getElementById("released-materials-modal");
    var closeBtn = releasedMaterialsModal.querySelector(".closeBtn");

    function openReleasedMaterialsModal() {
        releasedMaterialsModal.style.display = "flex";
    }

    function closeReleasedMaterialsModal() {
        releasedMaterialsModal.style.display = "none";
    }

    closeBtn.onclick = function () {
        closeReleasedMaterialsModal();
    };

    window.openReleasedMaterialsModal = openReleasedMaterialsModal;
    window.closeReleasedMaterialsModal = closeReleasedMaterialsModal;
})();