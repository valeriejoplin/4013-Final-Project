<?php // PHP part
    session_set_cookie_params(0);
    session_start();          // Start the session
    if(empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
    }
    $product=$_POST['product_id']; //student_name form field name
    array_push($_SESSION['cart'],$product);   
    //print_r($_SESSION['cart']);
?>

<?php
                        $servername = "localhost";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
for($i = 0 ; $i < count($_SESSION['cart']) ; $i++) {
//echo $iid;
$sql = "Select * From product where productID = ".$_SESSION['cart'][$i];
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<h1><?=$row["name"]?></h1>
  }
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
}
?>
