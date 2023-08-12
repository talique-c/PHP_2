<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <meta name="description" content="Assignment 2 - Registration Form">
    <meta name="author" content="Talique Capron">
    <meta name="robots" content="noindex, nofollow">
    <!--Link to CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <!--Link to Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Link to Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Nunito+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<?php
// Requires the necessary files
require_once('database.php');
require_once('validation.php');

// Creates a new Database object and creates a variable for the connection
$connection = new Database();
$conn = $connection->dbConnection();

// If the request method == POST then save values as variables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    // Hashes the password before saving in password variable
    $password = hash('sha512', $_POST['pass']);

    // Validation functions
    $fnameValidate = validateName($fname);
    $lnameValidate = validateName($lname);
    $usernameValidate = validateName($username);
    $emailValidate = validateEmail($email);

    // Checks for validation and and assigns errors
    if (!$fnameValidate) {
        echo "Error: Your first name is too long.";
    } else if (!$lnameValidate) {
        echo "Error: Your last name is too long.";
    } else if (!$usernameValidate) {
        echo "Error: Your username is too long.";
    } else if (!$emailValidate) {
        echo "Error: Please enter a valid email. (Example: johndoe@xyzemail.com)";
    }

    // Adds a new user to the database
    $registerQuery = "INSERT INTO web_users (first_name, last_name, username, email, password)
                              VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";

    // This performs a query by taking 2 parameters - the connection and a string of the query
    if (mysqli_query($conn, $registerQuery)) {
        echo "Registration Successful!";
    } else {
        echo "Uh oh, registration unsuccessful. Please try again. " . mysqli_error($conn);
    }
}
?>