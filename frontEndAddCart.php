        <?php
        session_start();
		
  
        $_SESSION['cart'] = array();
		
        array_push($_SESSION['cart'], $_GET['product_id']);
        ?>