<?php // PHP part
    session_set_cookie_params(0);
    session_start();          // Start the session
    // Check if the form was submitted
    if (isset($_GET['submit'])) {
    // Clear the session data
    $_SESSION = array();
  session_destroy();

  // Redirect to the home page
  header('Location: frontEndMain.php');
  exit;
}
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
    <link href="./assets/catalogStyle.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="assets/javascript/w3.js"></script>
    <title>Catalog</title>
<style>
 .keepShopping{
	   background-color: white;
  color: black;
  padding: 1em 1em;
  text-decoration: none;
	}
	</style>
</head>

<div class="container">
        <?php require_once("frontEndHeader.php"); ?>

        <table class="table">
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>                                      
            <tr>
             <?php for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
             echo '<td>'.$_SESSION['cart'][$i].'</td>';
             }  ?>
            </tr>
        </table>
</div>
<button id="openFormButton">Check Out</button>
  <form id="addressForm" style="display:none;">
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
    <input type="submit" value="Submit" name="submit">
  </form>
  <script>
    var openFormButton = document.getElementById('openFormButton');
    var addressForm = document.getElementById('addressForm');
    openFormButton.addEventListener('click', function() {
      addressForm.style.display = 'block';
    });
  </script>

  <a class="keepShopping" id="keepShopping" href="/frontEndCatalog.php">Keep Shopping</a>

