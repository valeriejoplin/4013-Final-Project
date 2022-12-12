<?php

    // submit.php

// Get values from the form
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

?>

echo
<?php require_once("frontEndHeader.php"); ?>

<H1> Order Placed Successfully <h1>
<?php echo "<H2>$name<H2>" ?>
<?php echo "$address" ?>
<?php echo "$city" ?>
<?php echo "$state" ?>
<?php echo "$zip" ?>

