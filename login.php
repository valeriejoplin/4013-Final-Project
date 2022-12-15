<?php

// Start a session
session_start();

// Check if the form has been submitted
if (isset($_POST["username"]) && isset($_POST["password"])) {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the entered username and password are correct
    if ($username == "admin" && $password == "admin") {
        // Set the login status to true
        $_SESSION["loggedIn"] = true;

        // Redirect the user to the backEndMain.php file
        header("Location: backEndMain.php");
        exit;
    } else {
        // Display an error message if the username or password is incorrect
        echo "<h1>Invalid username or password. The correct username and password is admin and admin<h1> <a href="/backEndLogin.php"> <button class="btn btn-primary btn-lg">Click</button> </a>";
    }
}

?>
