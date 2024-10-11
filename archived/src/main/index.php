<?php
session_start();

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

<?php
include('includes/header.php');
?>
<div id="main-content" class="main-content" style="display: flex; flex-direction: column; width: 100%;">

</div>

<?php
include('includes/footer.php');
?>