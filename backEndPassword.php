<!DOCTYPE html>
<html>
<body>
<?php
// Start a session
session_start();

// Prompt the user for a username and password
echo "Please enter your username and password:";
$username = readline("Username: ");
$password = readline("Password: ");

// Check if the entered username and password are correct
if ($username == "admin" && $password == "admin") {
    // Set the login status to true
    $_SESSION["loggedIn"] = true;

    // Redirect the user to the backEndMain.php file
    header("Location: backEndMain.php");
    exit;
} else {
    // Display an error message if the username or password is incorrect
    echo "Invalid username or password. The correct username and password is admin and admin";
}

?>
</body>
</html>
