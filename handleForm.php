<?php 
session_start();

// Check if someone is already logged in
if (isset($_SESSION['firstName'])) {
    // Redirect back to index.php with an error message
    $_SESSION['error'] = "You need to logout first in order to login with another account.";
    header('Location: index.php');
    exit();
}

// Check if submitBtn exists
if (isset($_POST['submitBtn'])) {

    // Get the first name and password from the form
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']); // You can use password_hash() instead

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Redirect back to index.php
    header('Location: index.php');
    exit();
}
?>
