<?php // PHP part
    session_start();          // Start the session
    if(empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
    }
    $product=$_POST['product_id']; //student_name form field name
    array_push($_SESSION['cart'],$product);   
    print_r($_SESSION['cart']);
?>

<table class="table">     <!-- HTML Part (optional) -->
    <tr>
      <th>Product ID</th>
    </tr>
                                                        
    <tr>
     <?php for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
     echo '<td>'.$_SESSION['cart'][$i].'</td>';
     }  ?>
    </tr>
</table>