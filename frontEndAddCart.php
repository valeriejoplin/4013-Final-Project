<?php // PHP part
    session_set_cookie_params(0);
    session_start();          // Start the session
    if(empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
    }
    $product=$_POST['product_id']; //student_name form field name
	$quantity=$_POST['quantity'];
    array_push($_SESSION['cart'],$product, $quantity);   
    //print_r($_SESSION['cart']);
?>

<!doctype html>
<html>
<head>
    <title>Homework 6 &raquo; Autofill</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="auto-complete.js"></script>
</head>
<body>
<div class="container">
        <?php require_once("frontEndHeader.php"); ?>

        <table class="table">
            <tr>
              <th>Product</th>
              <th>Quantity</th>
            </tr>                                      
            <tr>
             <?php for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
             echo '<td>'.$_SESSION['cart'][$i].'</td>';
             }  ?>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title">Add your Address</h2>
            </div>
            <div class="panel-body">
                <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="form-control">
                <div id="address">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Address</label>
                            <input class="form-control" id="street_number" disabled="true">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Street</label>
                            <input class="form-control" id="route" disabled="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">City</label>
                            <input class="form-control field" id="locality" disabled="true">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">State</label>
                            <input class="form-control" id="administrative_area_level_1" disabled="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Zip code</label>
                            <input class="form-control" id="postal_code" disabled="true">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Country</label>
                            <input class="form-control" id="country" disabled="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMCbt2oQ2t25_-x-Tbk7Ny6OOtzvuW9rY&libraries=places&callback=initAutocomplete" async defer></script>



</body>
</html>
