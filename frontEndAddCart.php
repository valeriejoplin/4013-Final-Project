        <?php
        session_start();
        if(isset($_SESSION['cart'])){
        return $_SESSION['cart'] = array();
        }
		
        array_push($_SESSION['cart'], $_GET['product_id']);
        ?>