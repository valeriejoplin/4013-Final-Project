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
  font-family: "Times New Roman", Times, serif;
           }  
.head{
          font-family: "Times New Roman", Times, serif;
           }
 h1{
                 text-align:center;
           }
 .btn btn-primary{
           background-color: #CAE8F6;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
// Check connection
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
      echo '<div class="alert alert-success" role="alert">New Product added.</div>';
      break;


      case 'Edit':
      $sqlEdit = "update product set name=?, price=?, shortDesc=?,longDesc=?,qtyavailable=? where productID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("sissi", $_POST['pID'],$_POST['pname'], $_POST['pprice'], $_POST['pshortdesc'], $_POST['plongdesc'],$_POST['pqty']);
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
                        <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Quantity avalible</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pqty">
                        <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Item</label>
<select class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pitem">
  <?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "Select * From item";
                        //echo $sql;
                            $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                        ?>
                    <option value="<?=$row["itemID"]?>"><?=$row["item"]?></option>
                    <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            ?>
</select>

<label for="editproduct<?=$row["productID"]?>Name" class="form-label">Brand</label>
<select class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pbrand">
  <?php
                            $servername = "165.227.18.177";
                            $username = "asoltiso_project";
                            $password = "Project1243";
                            $dbname = "asoltiso_project";   

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "Select * From brand";
                            //echo $sql;
                                $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                            ?>
                        <option value="<?=$row["brandID"]?>"><?=$row["brand"]?></option>
                        <?php
                                  }
                                } else {
                                  echo "0 results";
                                }
                                ?>
</select>

<label for="editproduct<?=$row["productID"]?>Name" class="form-label">Category</label>
<select class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pcategory">
<?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "Select * From category";
                        //echo $sql;
                            $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                        ?>
                    <option value="<?=$row["categoryID"]?>"><?=$row["category"]?></option>
                    <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            ?>
</select>
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
          <tr class="head">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Quantity Avalible</th>
          </tr>
        </thead>
        <tbody>
  <?php
   $sql="SELECT productID, name, price, shortDesc, longDesc, qtyAvalible from product Order by productID";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <tr class="rows">
            <td><?=$row["productID"]?></td>
            <td><?=$row["name"]?></td>
            <td>$<?=$row["price"]?></td>
            <td><?=$row["shortDesc"]?></td>
            <td><?=$row["longDesc"]?></td>
            <td><?=$row["qtyAvalible"]?></td>
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
                           <label for="editproduct<?=$row["productID"]?>Name" class="form-label">ID</label>
                          <input type="text" class="form-control" id="editproduct<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pID" value="<?=$row['productID']?>">
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pname" value="<?=$row['name']?>">
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Price</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pprice" value="<?=$row['price']?>"> 
                          <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Short Description</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pshortdesc" value="<?=$row['shortDesc']?>"> 
                           <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Long Description</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="plongdesc" value="<?=$row['longDesc']?>">
                        <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Quantity avalible</label>
                          <input type="text" class="form-control" id="editCourse<?=$row["productID"]?>Name" aria-describedby="editproduct<?=$row["productID"]?>Help" name="pqty" value="<?=$row['qtyAvalible']?>">
                         <label for="editproduct<?=$row["productID"]?>Name" class="form-label">Item</label>
                        <div id="editproduct<?=$row["productID"]?>Help" class="form-text">Enter the product information.</div>
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
     </body>


    
    
