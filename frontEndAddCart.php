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
    $product=$_POST['product_id'];
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
	   background-color: #FAF6F1;
  color: black;
border: 1px solid black;
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
    <input type="submit" value="Submit" name="submit" id="newOrder">
  </form>
  <script>
    var openFormButton = document.getElementById('openFormButton');
    var addressForm = document.getElementById('addressForm');
    openFormButton.addEventListener('click', function() {
      addressForm.style.display = 'block';
    });
  </script>

  <a class="keepShopping" id="keepShopping" href="/frontEndCatalog.php">Keep Shopping</a>
  
  <script>
    var openFormButton = document.getElementById('newOrder');
    openFormButton.addEventListener('click', function() {
        var txtName = document.getElementById('name').value;
        var txtAddress = document.getElementById('address').value;
        var txtCity = document.getElementById('city').value;
        var txtState = document.getElementById('state').value;
        var txtZip = document.getElementById('zip').value;
        if(txtName != 0 || txtAddress != 0 || txt != 0 || txtState != 0 || txtZip != 0)
        {
            var connection = new ActiveXObject("ADODB.Connection");
            var connectionString = "servername = 165.227.18.177; username = asoltiso_project; password = Project1243; dbname = asoltiso_project"  
            connection.Open(connectionString);
            var rs = new ActiveXObject("ADODB.Recordset");
            rs.Open("insert into order values('" + txtName + "','" + txtAddress + "','" + txtCity + "','" + txtState + "','" + txtZip + "')", connection);  
            alert("Insert Record Successfuly");
            connection.close();
        }
  }
    var placeOrderButton = document.getElementById('placeOrderButton');
     openFormButton.addEventListener('click', function());
  </script>
