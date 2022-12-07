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
    <title>Cart</title>
</head>
 <body>
     <div class="container">
        <?php require_once("frontEndHeader.php"); ?>

        <table>
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
