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

// Calculate the subtotal by adding up the prices of all products in the cart
$subtotal = 0;
$tax = 0;
$taxRate = 0.08;
$total =0;
$discount=0.15;
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
    $sql = "SELECT * FROM product where productID = $productId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $subtotal += $row["price"] * $quantity;
      }
    }
  }
  $tax = $subtotal * $taxRate;
  $total = $tax + $subtotal;
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
<style>
.buttons{
         display: flex;
     justify-content: center;
}
 .cartButton{
     display: flex;
     justify-content: center;
	  float: left;
      padding: 10px;
      margin: 10px;
      width: 300px;
      text-align: center;
	}
    
     #formButton{
         padding: 0px;
     }
	</style>
</head>
<body>

<div class="container">
  <?php require_once("frontEndHeader.php"); ?>

<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
  <div class="card-deck">
    <?php foreach ($_SESSION['cart'] as $productId => $quantity) { ?>
      <div class="card">

        <div class="card-body">
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

                            $sql = "SELECT * FROM product where productID = $productId";
                            //echo $sql;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row 
                              while($row = $result->fetch_assoc()) {
                            ?>
                                <a href="./frontEndProduct.php?id=<?=$row["productID"]?>">
                                <div>
                                <img style="width:10%; float:left;"src="assets/<?=$row["img"]?>.png" </img>
                                <div class="details" style="height:100px; width: 70%; float: left; padding: 1rem; padding-left: 2rem;">
                                   <h5 class="card-title"><?=$row["name"]?></h5>
                                    <p class="card-text">
                                    Quantity: <?php echo $quantity; ?><br>
                                    Price: $<?=$row["price"]?><br>
                                    <?php
                                      if (isset($_SESSION['cart'])) {
                                          if (isset($_POST['product_id']) && isset($_POST['quantity']) && $_POST['product_id'] == $productId) {
                                            if(isset($_SESSION['cart'][$_POST['product_id']])) {
                                              echo "Item Added";
                                            }
                                          }
                                      }
                                    ?>
                                    </p>
                                </div>
                                </div>
                                </a>
                            <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
            <form method="post">
              <input type="hidden" name="remove" value="<?php echo $productId; ?>">
              <input type="submit" value="Delete">
            </form>
            <?php
            if (isset($_POST['remove'])) {
  // Get the product ID of the item to remove
  $productId = $_POST['remove'];
  // Check if the item is in the cart
  if (isset($_SESSION['cart'][$productId])) {
    // Remove the item from the cart
    unset($_SESSION['cart'][$productId]);
    
    // Reload the page
    echo '<script>window.location.href = "frontEndAddCart.php";</script>';
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
        <div class="card-body">
        <div class="totals" style="font-size: 12px;">
            <p> Subtotal: $<?=$subtotal?></p>
            <p class="tax"> Tax: $<?=$tax?></p>
            <p style="font-size: 16px;"> Total: $<?=$total?></p>
        </div>
        <input id="main_search_input" type="text" placeholder="Coupon"/>
		<button onclick="discountFunction()" id="search_button">Apply</button>
		<script>
	function discountFunction() {
		$discount = $subtotal * 0.15; 
		$newtotal = $subtotal - $discount;
	<p style="font-size: 16px;"> New Total: $<?=$newtotal?></p>

}
</script>
        </div>
<div class="buttons">
<button  class="cartButton" id="openFormButton" <?php if (empty($_SESSION['cart'])) { echo 'disabled'; } ?>>Check Out</button>
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

<!-- Form to submit a request to destroy the session -->
<form class="cartButton" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formButton">
  <input type="hidden" name="form_submitted" value="1"/>
  <button type="submit" style="width:100%;">Empty Cart</button>
</form>

<?php
  // Check if the form has been submitted
  if (isset($_POST['form_submitted'])) {
    // Destroy the session
    session_destroy();
    
    // Reload the page
    echo '<script>window.location.href = "frontEndAddCart.php";</script>';
  }
?>

</div>

	</div>
    <?php require_once("frontendfooter.php"); ?>
</body>
