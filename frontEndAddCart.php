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

                                          

<table class="table">     <!-- HTML Part (optional) -->
    <tr>
      <th>Product</th>
      <th>Quantity</th>
    </tr>
                                                        
    
     <?php for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
     echo '<tr><td>'.$_SESSION['cart']['product'][$i].'</td</tr>';
     }  ?>
    
</table>