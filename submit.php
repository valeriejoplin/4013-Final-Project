<?php

    // submit.php

// Get values from the form
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
?>

<?php require_once("frontEndHeader.php"); ?>

<H1> Order Placed Successfully <h1>
<?php echo "<H2>$name<H2>" ?>
<?php echo "$address"." "."$city".", "."$state"." "."$zip"?>

<?php 
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

    $sql = "INSERT INTO orders (Name, Address, City, State, Zip)
            VALUES ('$name', '$address', '$city', '$state', '$zip')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
