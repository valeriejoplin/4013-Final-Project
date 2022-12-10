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
        $sql = "INSERT INTO order (Name, Address, City, State, Zip) values ($name, $address, $city, $state, $zip)";
?>
<?php require_once("frontEndHeader.php"); ?>
<H1> Order Placed Successfully <h1>