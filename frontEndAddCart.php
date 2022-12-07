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

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
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

    <!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
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
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<body>
