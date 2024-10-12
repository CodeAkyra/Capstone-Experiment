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
        $userImage = '/src/img/users/admin.png';
        break;
    case 'Project-in-Charge': // Project In-charge
        $userName = 'Project In-charge';
        $userImage = '/src/img/users/pic.png';
        break;
    case 'Purchaser':
        $userName = 'Purchaser';
        $userImage = '/src/img/users/purchaser.png';
        break;
    case 'Warehouse Man':
        $userName = 'Warehouse Man';
        $userImage = '/src/img/users/warehouse.png';
        break;
    case 'Engineer':
        $userName = 'Engineer';
        $userImage = '/src/img/users/engineer.png';
        break;
    case 'Accountant':
        $userName = 'Accountant';
        $userImage = '/src/img/users/accountant.png';
        break;
    default:
        $userName = 'User';
        $userImage = '/src/img/users/user.jpg';
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
    <link rel="stylesheet" href="/src/styles/modal.css">
    <!--
    <link rel="stylesheet" href="/src/styles/modals/notification/success-modal.css">
    -->
    <link rel="stylesheet" href="/src/styles/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div class="top-bar">
        <img class="logo" src="/src/img/filasia.png">
        <h1 class="title">Filipinas Asia Glass and Doors Corp.</h1>
        <div class="debug">
            <span class="textDebug">This software is currently in development, not indicative
                of final product</span>
        </div>

        <span id="clock"></span>
        <!-- Display the dynamic username and role -->
        <div class="user-info">
            <h1 class="user-name">
                <?php echo $userName; ?>
            </h1> <!-- Display name based on role -->
            <span class="user-role">
                <?php echo ucfirst($role); ?>
            </span> <!-- Display role -->
        </div>

        <!-- Display user icon based on role -->
        <img class="user-icon" src="<?php echo $userImage; ?>" alt="User Icon">

    </div>


    <div class="layoutSidebar" style="display: flex; width: 100%; overflow: scroll;">

        <?php
        if (!defined('BASE_PATH')) {
            define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
        }
        include(BASE_PATH . 'includes/sidebar.php');
        ?>


        <div id="layoutSidebar_content" style="flex-grow: 1; background-color: none;">
            <main>