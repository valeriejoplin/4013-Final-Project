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
        background-color:#BCC9F7;
           }    
  </style>
<body>
        <h2>Current Orders </h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Product ID</th>
      <th>Order ID</th>
      <th>Quantity Purchased</th>
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

$sql = "SELECT * from orderProduct";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
?>
  <tr class="rows">
    <td><?=$row["orderProductID"]?></td>  
    <td><?=$row["productID"]?></td>  
    <td><?=$row["orderID"]?></td>
    <td><?=$row["quantity"]?></td>
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
