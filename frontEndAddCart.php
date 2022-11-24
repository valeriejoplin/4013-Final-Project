        <?php
        session_start();
        if(isset($_SESSION['cart'])){
        return $_SESSION['cart'] = array();
        }
        $id = $_GET['product_id'];
        array_push($_SESSION['cart'], id);
        ?>

		<a> href="frontEndCart.php">View Cart</a>