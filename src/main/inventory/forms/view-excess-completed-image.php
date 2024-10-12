<?php
include('../../config.php');

include(BASE_PATH . 'includes/header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="/src/styles/modals/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>View Image</title>
    <style>
        .imgGallery img {
            width: 200px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .imgGallery img:hover,
        .imgGallery img:active {
            transform: scale(1.5);
            outline: none;
        }
    </style>
</head>


<div class="header">
    <h1 class="header-title">Images > Completed</h1>
    <div class="header-buttons">
        <a href="<?= BASE_URL ?>inventory/forms/view-excess-material.php" class="btn-cancel">Back</a>
    </div>
</div>

<div class="blue-bar">
    <h1 class="module-title">Excess Materials:</h1>
    <div class="imgGallery">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
        <img src="../cdn/inv/admin.png" alt="img">
    </div>




</div>

<?php
include(BASE_PATH . 'includes/footer.php');
?>