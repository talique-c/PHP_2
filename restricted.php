<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Success</title>
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
session_start();
// Checks if the user has a current session by seeing if the ID is set
if (isset($_SESSION['ID'])) {
} else {
    // If there isn't then go back to the login page
    header('Location:login.php');
}

// Ends the session
session_abort();
?>

<h1>Restricted</h1>
<p>Only logged in users have access to this page.</p>

<div class="container">
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam aliquid aspernatur doloribus deleniti expedita nesciunt earum perferendis laboriosam pariatur.</p>
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam aliquid aspernatur doloribus deleniti expedita nesciunt earum perferendis laboriosam pariatur.</p>
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam aliquid aspernatur doloribus deleniti expedita nesciunt earum perferendis laboriosam pariatur.</p>
    </div>
</div>