<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Admin role
    $adminEmail = 'admin@example.com'; 
    $adminPassword = 'admin123';
    $adminRole = 'Admin';

    // PIC role
    $picEmail = 'pic@example.com'; 
    $picPassword = 'pic123';
    $picRole = 'Project-in-Charge';

    // Purchaser role
    $purchaserEmail = 'purchaser@example.com'; 
    $purchaserPassword = 'purchaser123';
    $purchaserRole = 'Purchaser';

    // Warehouse Man role
    $warehouseEmail = 'warehouse@example.com';
    $warehousePassword = 'warehouse123';
    $warehouseRole = 'Warehouse Man';

    // Engineer role
    $engineerEmail = 'engineer@example.com';
    $engineerPassword = 'engineer123';
    $engineerRole = 'Engineer';

    // Accountant role
    $accountantEmail = 'accountant@example.com';
    $accountantPassword = 'accountant123';
    $accountantRole = 'Accountant';

    if ($email === $adminEmail && $password === $adminPassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $adminRole; // Store the admin role
        header("Location: main/index.php"); // Redirect to admin dashboard
        exit();

    } elseif ($email === $picEmail && $password === $picPassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $picRole; // Store the PIC role
        header("Location: main/index.php"); // Redirect to PIC dashboard
        exit();

    } elseif ($email === $purchaserEmail && $password === $purchaserPassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $purchaserRole; // Store the Purchaser role
        header("Location: main/index.php"); // Redirect to Purchaser dashboard
        exit();

    } elseif ($email === $warehouseEmail && $password === $warehousePassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $warehouseRole; // Store the Warehouse Man role
        header("Location: main/index.php"); // Redirect to Warehouse dashboard
        exit();

    } elseif ($email === $engineerEmail && $password === $engineerPassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $engineerRole; // Store the Engineer role
        header("Location: main/index.php"); // Redirect to Engineer dashboard
        exit();

    } elseif ($email === $accountantEmail && $password === $accountantPassword) {
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $accountantRole; // Store the Accountant role
        header("Location: main/index.php"); // Redirect to Accountant dashboard
        exit();
        
    } else {
        $_SESSION['error'] = "Invalid login credentials"; // Store error in session
        header("Location: login.html"); // Redirect to login page
        exit();
    }
}
?>
