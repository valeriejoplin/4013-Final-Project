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

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="auto-complete.js"></script>
    <title>Cart</title>
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
<body>
