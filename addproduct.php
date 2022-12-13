<!doctype html>
<html lang="en">
<head>
<?php require_once("backendheader.php"); ?>
        </head>
 <body>
    <div class="container">
<h1>Add Product </h1>



<?php
 $servername = "165.227.18.177";
 $username = "asoltiso_project";
 $password = "Project1243";
 $dbname = "asoltiso_project"; 
            
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
        $sqlAdd = "insert into product (name,price,shortDesc,longDesc,qtyavalible) value (?, ?,?,?)";
        $stmtAdd = $conn->prepare($sqlAdd);
        $stmtAdd->bind_param("isissi", $_POST['pID'], $_POST['pname'], $_POST['pprice'], $_POST['pshortdesc'], $_POST['plongdesc'],$_POST['pqty']);
        $stmtAdd->execute();   
      echo '<div class="alert alert-success" role="alert">New Product added.</div>';
      break;


      case 'Edit':
      $sqlEdit = "update product set name=?, price=?, shortDesc=?,longDesc=?,qtyavailable=? where productID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("isissi", $_POST['pID'],$_POST['pname'], $_POST['pprice'], $_POST['pshortdesc'], $_POST['plongdesc'],$_POST['pqty']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Product edited.</div>';
      break;

  }
}
?>
 <h1>Product Inventory</h1>
      <table class="table table-striped">
          
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">
        Add Product
      </button>



<div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addProductLabel">Add New Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="productList" class="form-label">Product</label>
                          <select class="form-select" aria-label="Select Product" id="instructorList" name="cInsID">
                          <?php
                            $productSQL = "select * from product Order by productID";
                            $productResult = $conn->query($productSQL);
                            while($productRow = $productResult->fetch_assoc()) {
                            ?>
                            <?php
                            }
                            ?>
                          </select>
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">ID</label>
                          <input type="text" class="form-control" id="editproduct<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pID">
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pname">
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Price</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pprice"> 
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Short Description</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pshortdesc">  
                           <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Long Description</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="plongdesc">
                        <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Quantity Available</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pqtyavailable"> 
                          <div id="editproduct<?=$row["productID"]?>Help" class="form-text">Enter the product information.</div>
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
   <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Quantity Available</th>
          </tr>
        </thead>
        <tbody>
  <?php
   $sql="SELECT productID, name, shortDesc, longDesc, qtyAvailable from product P Order by productID";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <tr>
            <td><?=$row["productID"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["price"]?></td>
            <td><?=$row["shortDesc"]?></td>
            <td><?=$row["longDesc"]?></td>
            <td><?=$row["qtyAvailable"]?></td>
            <td>         
         <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editproduct<?=$row["productID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editproduct<?=$row["productID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editproduct<?=$row["productID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editproduct<?=$row["productID"]?>Label">Edit Product</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">  
                        <div class="mb-3">
                          <label for="productList" class="form-label">Product</label>
                          <select class="form-select" aria-label="Select Product" id="productList" name="pID">
                          <?php
                            $productSQL = "select * from product Order by productID";
                            $productResult = $conn->query($productSQL);
                            while($productRow = $productResult->fetch_assoc()) {
                            ?>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <input type="hidden" name="cid" value="<?=$row['CourseID']?>">
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
     </body>


    
