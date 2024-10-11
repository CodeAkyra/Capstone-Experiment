<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="/src/styles/modals/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>View Batch</title>
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

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">Images > Pending</h1>
        <div class="header-buttons">
            <button class="btn-cancel" id="cancelrequestBtn"
                onclick="parent.postMessage('viewBatchP-cancelAction', '*')">Back</button>
        </div>
    </div>

    <div class="blue-bar">
        <h1 class="module-title">Images for Batch_0001</h1>
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

</body>

</html>