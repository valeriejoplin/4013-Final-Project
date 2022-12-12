<?php
session_set_cookie_params(0);
session_start();

if(empty($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

if (isset($_SESSION['cart'])) {
  if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $_SESSION['cart'][$_POST['product_id']] = $_POST['quantity'];    
  }
}
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
</head>
<body>

<div class="container">
  <?php require_once("frontEndHeader.php"); ?>

<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
  <div class="card-deck">
    <?php foreach ($_SESSION['cart'] as $productId => $quantity) { ?>
      <div class="card">

        <div class="card-body">
          <h5 class="card-title"><?php echo $productId; ?></h5>
          <p class="card-text">
            Quantity: <?php echo $quantity; ?><br>
            Price: $XXX<br>
          </p>
          <?php
          if (isset($_SESSION['cart'])) {
              if (isset($_POST['product_id']) && isset($_POST['quantity']) && $_POST['product_id'] == $productId) {
                if(isset($_SESSION['cart'][$_POST['product_id']])) {
                  echo "Quantity updated";
                }
              }
          }
        ?>
        </div>

      </div>
    <?php } ?>
  </div>
<?php } else { ?>
  <p>Your cart is empty. Please add items to your cart to see them here.</p>
<?php } ?>

<button id="openFormButton" <?php if (empty($_SESSION['cart'])) { echo 'disabled'; } ?>>Check Out</button>
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
  <input type="submit" value="Submit">
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

<button class="cartButton" id="keepShopping" onclick="window.location.href='/frontEndCatalog.php'">Keep Shopping</button>
<?php echo"<button onclick="session_destroy()">Empty Cart</button>;"?>

	</div>
    <?php require_once("frontendfooter.php"); ?>
</body>