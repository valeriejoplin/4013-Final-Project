<!doctype html>
<html lang="en">
<head>
<?php require_once("backendheader.php"); ?>
        </head> 
  <style>
   body {
            background-image: url('https://www.vestian.com/blog/wp-content/uploads/vestian-marathalli-6.jpg');
        }
   .rows{
        background-color:#DEE3E3;
           }    
  </style>
<body>
        <h2>Current Order Information </h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Order #</th>
      <th>Product ID</th>
      <th>Price</th>
      <th>Quantity Purchased</th>
      <th>Product Name</th>
      <th>Buyer Name</th>
      <th>Shipping Address</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $servername = "165.227.18.177";
 $username = "asoltiso_project";
 $password = "Project1243";
 $dbname = "asoltiso_project"; 


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT oP.orderID, P.productID, P.price, oP.quantity, P.name, O.Name, O.Address
FROM orderProduct oP join product P on oP.productID=P.productID join orders O on oP.orderID=O.orderID
ORDER by oP.orderID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
?>
  <tr class="rows">
    <td><?=$row["orderID"]?></td>  
    <td><?=$row["productID"]?></td>  
    <td>$<?=$row["price"]?></td>
    <td><?=$row["quantity"]?></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["Name"]?></td>
    <td><?=$row["Address"]?></td>

  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
