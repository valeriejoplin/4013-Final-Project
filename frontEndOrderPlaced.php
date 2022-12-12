<?php
    session_start();

    // submit.php

// Get values from the form
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/catalogStyle.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="assets/javascript/w3.js"></script>
    <title>Success</title>

</head>

<body>
    <div class="container">
        <?php require_once("frontEndHeader.php"); ?>

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
            echo "<h1>Successfully Submitted Order<h1>";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        ?>
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

                            $sql = "SELECT * FROM orders where Name='$name' Order by orderID desc Limit 1";
                            //echo $sql;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                            ?>
                              <h1>Order #<?=$row["orderID"]?><h1>
                              <?php
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                  foreach ($_SESSION['cart'] as $productId => $quantity) {
                                    $servername = "165.227.18.177";
                                    $username = "asoltiso_project";
                                    $password = "Project1243";
                                    $dbname = "asoltiso_project";
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                    }
                                    echo "<p>$productId $quantity:<p>"
                                  }
                                }
                                ?>
                            <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
        <?php echo "<H2>$name<H2>" ?>
        <?php echo "$address"." "."$city".", "."$state"." "."$zip"?>
    </div>
    <?php require_once("frontendfooter.php"); ?>
</body>

<?php session_destroy(); ?>


