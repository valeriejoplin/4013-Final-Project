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
        <div class="associative">
            <div class="tableHeader" style="display:flex;">
                <h2>Item </h2>
                <button class="addbtn">add</button>
           </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Item</th>
      <th>Edit</th>
      <th>Delete</th>
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

$sql = "SELECT * from item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
  <tr class ="rows">
    <td><?=$row["itemID"]?></td>  
    <td><?=$row["item"]?></td>  
    <td><button class="editbtn">edit</button></td>
    <td><button class="deletebtn">delete</button></td>
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
        </div>
                        <div class="associative">
            <div class="tableHeader" style="display:flex;">
                <h2>Category </h2>
                <button class="addbtn">add</button>
           </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Item</th>
      <th>Edit</th>
      <th>Delete</th>
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

$sql = "SELECT * from category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
  <tr class ="rows">
    <td><?=$row["categoryID"]?></td>  
    <td><?=$row["category"]?></td>  
    <td><button class="editbtn">edit</button></td>
    <td><button class="deletebtn">delete</button></td>
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
        </div>
                <div class="associative">
            <div class="tableHeader" style="display:flex;">
                <h2>Brand </h2>
                <button class="addbtn">add</button>
           </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Item</th>
      <th>Edit</th>
      <th>Delete</th>
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

$sql = "SELECT * from brand";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
  <tr class ="rows">
    <td><?=$row["brandID"]?></td>  
    <td><?=$row["brand"]?></td>  
    <td><button class="editbtn">edit</button></td>
    <td><button class="deletebtn">delete</button></td>
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
        </div>
        </body>
</html>
