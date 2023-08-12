<?php

// Require all of the necessary files
require_once('database.php');
require_once('create.php');
require_once('validation.php');

// Query to get the ID from an existing user
$loginQuery = "SELECT ID FROM web_users WHERE username = '$username' AND password = '$password'";
// User login query
$userLogin = mysqli_query($conn, $loginQuery);

// If an ID has a row that matches the username and password
if (mysqli_num_rows($userLogin) == 1) {
    // Starts a session -> everything will be recorded
    session_start();
    // Store ID in the session variable (so it can remember the user)
    $_SESSION['ID'] = $username;
    // When logged in, go to the success page
    header('Location:login_success.php');
} else {
    echo "<p>Error: Please re-enter your username or password.</p>";
    // Check for errors from the database if any
    echo mysqli_error($conn);
    echo mysqli_errno($conn);
}
