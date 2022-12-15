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
 <div class="container">
<?php
 $servername = "165.227.18.177";
 $username = "asoltiso_project";
 $password = "Project1243";
 $dbname = "asoltiso_project"; 
            
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
        $sqlAdd = "insert into product (productID, name,price,shortDesc,longDesc,qtyavalible) value (?,?, ?,?,?,?)";
        $stmtAdd = $conn->prepare($sqlAdd);
        $stmtAdd->bind_param("isissi", $_POST['pID'], $_POST['pname'], $_POST['pprice'], $_POST['pshortdesc'], $_POST['plongdesc'],$_POST['pqty']);
        $stmtAdd->execute();   
      echo '<div class="alert alert-success" role="alert">New Order received.</div>';
      break;


      case 'Edit':
      $sqlEdit = "update product set name=?, price=?, shortDesc=?,longDesc=?,qtyavailable=? where productID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("sissi", $_POST['pID'],$_POST['pname'], $_POST['pprice'], $_POST['pshortdesc'], $_POST['plongdesc'],$_POST['pqty']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Order edited.</div>';
      break;

  }
}
?>
        <h2>Current Order Information </h2>
      <table class="table table-striped">
          
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addorder">
        Create New Order
      </button>



<div class="modal fade" id="addorder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOrderLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addOrderLabel">Add New Order</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="orderList" class="form-label">Order</label>
                        
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Order Number</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oID">
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Product ID</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pID">
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Price</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pprice"> 
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Quantity Purchased</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oquantity">  
                           <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Product Name</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pname">
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Quantity avalible</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oname">
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Buyer</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oaddress"> 
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Address</label>
                                       
  
                </div> 
                          <div id="editorder<?=$row["orderID"]?>Help" class="form-text">Enter the order information.</div>
                        </div>
                <input type="hidden" name="saveType" value="Add">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
     <td>     
  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editorder<?=$row["orderID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editorder<?=$row["orderID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editorder<?=$row["orderID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editorder<?=$row["orderID"]?>Label">Edit Order</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">  
                        <div class="mb-3">
                           <label for="orderList" class="form-label">Order</label>
                        
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Order Number</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oID" value="<?=$row['orderID']?>">
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Product ID</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pID" value="<?=$row['productID']?>">
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Price</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pprice" value="<?=$row['price']?>">
                          <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Quantity Purchased</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oquantity" value="<?=$row['quantity']?>">
                           <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Product Name</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="pname" value="<?=$row['name']?>">
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Quantity avalible</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oname" value="<?=$row['Name']?>">
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Buyer</label>
                          <input type="text" class="form-control" id="editorder<?=$row["orderID"]?>Name" aria-describedby="editorder<?=$row["orderID"]?>Help" name="oaddress" value="<?=$row['Address']?>">
                        <label for="editorder<?=$row["orderID"]?>Name" class="form-label">Address</label>
                        </div>
                        <input type="hidden" name="saveType" value="Edit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
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
