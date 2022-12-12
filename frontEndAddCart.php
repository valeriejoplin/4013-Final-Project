<?php // PHP part
    session_set_cookie_params(0);
    session_start();          // Start the session
    
  if (isset($_SESSION['cart'])) {
    if (isset($_POST['product_id'])) {
      $product = $_POST['product_id'];
      $quantity = $_POST['quantity'];
      array_push($_SESSION['cart'], $product, $quantity);
    }    
  }
    //print_r($_SESSION['cart']);
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/catalogStyle.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="assets/javascript/w3.js"></script>
    <title>Cart</title>
<style>
 .keepShopping{
	   background-color: #FAF6F1;
  color: black;
border: 1px solid black;
  padding: 1em 1em;
  text-decoration: none;
	}
	</style>
</head>
<body>

<div class="container">
  <?php require_once("frontEndHeader.php"); ?>

  <div class="card-deck">
    <?php if (!empty($_SESSION['cart'])) {
      for ($i = 0; $i < count($_SESSION['cart']); $i = $i + 2) { ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION['cart'][$i]; ?></h5>
            <p class="card-text">
              Quantity: <?php echo $_SESSION['cart'][$i + 1]; ?><br>
              Price: $XXX<br>
            </p>
          </div>
        </div>
      <?php }
    } else { ?>
      <p>Your cart is empty. Please add items to your cart to continue.</p>
    <?php } ?>
  </div>
<button id="openFormButton">Check Out</button>
<form id="addressForm" action="frontEndOrderPlaced.php" method="POST" class="hidden">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city"><br>
  <label for="state">State:</label><br>
  <input type="text" id="state" name="state"><br>
  <label for="zip">Zip Code:</label><br>
  <input type="text" id="zip" name="zip"><br><br>
  <?php if (empty($_SESSION['cart'])) { ?>
    <input type="submit" value="Submit" disabled>
  <?php } else { ?>
    <input type="submit" value="Submit">
  <?php } ?>
</form>
<style>
  .hidden {
    display: none;
  }
</style>
<script>
  var openFormButton = document.getElementById('openFormButton');
  var addressForm = document.getElementById('addressForm');
  openFormButton.addEventListener('click', function() {
    addressForm.classList.toggle('hidden');
  });
</script>

  <a class="keepShopping" id="keepShopping" href="/frontEndCatalog.php">Keep Shopping</a>
  
	</div>
    <?php require_once("frontendfooter.php"); ?>
</body>