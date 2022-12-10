<?php

    // submit.php

// Get values from the form
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

// Connect to the database
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create an SQL insert query
$sql = "INSERT INTO table_name (Name, Address, City, State, Zip)
        VALUES ('$name', '$address', '$city', '$state', '$zip')";

mysqli_close($conn);
    // Clear the session data
    $_SESSION = array();
    session_destroy();

  //Redirect to the home page
  header('Location: frontEndMain.php');
  exit;
?>