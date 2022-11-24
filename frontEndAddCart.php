<?php // PHP part
    session_start();          // Start the session
    $_SESSION['cart']=array(); // Makes the session an array
    $product=$_POST['product_id']; //student_name form field name
    array_push($_SESSION['cart'],$product);   
    print_r($_SESSION['cart']);
?>