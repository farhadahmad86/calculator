<?php
session_start();

// Define your valid username and password (you should retrieve these from a database)
$valid_username = 'calculator123';
$valid_password = 'All@h786';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Validate the entered username and password
    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // Authentication successful, set a session variable
        $_SESSION['authenticated'] = true;

        // Redirect to the protected page
        header('Location: citCalculator');
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
