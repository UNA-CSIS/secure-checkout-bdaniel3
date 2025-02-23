<?php

require_once 'functions.php';
// Checking if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve submitted username and password
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $_SESSION['username'] = $username;

    // Checking if the username and password match
    if ($username === $password) {
        // Store username in session and redirect
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        // If credentials are invalid, show an error message
        $_SESSION['err'] = "Wrong username and password.";
        header("Location: login.php");
    }
}
?>

