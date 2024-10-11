<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in, if not, redirect to login
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

// Get the user's role and name from the session
$role = $_SESSION['role'];
$user = $_SESSION['user'];

// Role-based user name and image
$userName = '';
$userImage = '';

switch ($role) {
    case 'Admin':
        $userName = 'Administrator';
        $userImage = '../img/users/admin.png';
        break;
    case 'Project-in-Charge': // Project In-charge
        $userName = 'Project In-charge';
        $userImage = '../img/users/pic.png';
        break;
    case 'Purchaser':
        $userName = 'Purchaser';
        $userImage = '../img/users/purchaser.png';
        break;
    case 'Warehouse Man':
        $userName = 'Warehouse Man';
        $userImage = '../img/users/warehouse.png';
        break;
    case 'Engineer':
        $userName = 'Engineer';
        $userImage = '../img/users/engineer.png';
        break;
    case 'Accountant':
        $userName = 'Accountant';
        $userImage = '../img/users/accountant.png';
        break;
    default:
        $userName = 'User';
        $userImage = '../img/users/user.jpg';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilAsia</title>
    <link rel="stylesheet" href="/src/styles/main.css">
    <link rel="stylesheet" href="../styles/modal.css">
    <!--
    <link rel="stylesheet" href="/src/styles/modals/notification/success-modal.css">
    -->
    <link rel="stylesheet" href="/src/styles/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <?php include('includes/bar-top.php') ?>


    <div class="layoutSidebar" style="display: flex; width: 100%; overflow: scroll;">

        <?php include('includes/sidebar.php'); ?>

        <div id="layoutSidebar_content" style="flex-grow: 1; background-color: none;">
            <main>