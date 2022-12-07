<?php require_once("backendheader.php"); ?>

<h1>Add Product </h1>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">
        Add New
      </button>

<?php
$sql = "SELECT * from Product";
$result = $conn->query($sql);

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
        $sqlAdd = "insert into Product (name,price,shortDesc,longDesc,qtyavalible) value (?, ?,?,?)";
        $stmtAdd = $conn->prepare($sqlAdd);
        $stmtAdd->bind_param("sissi", $_POST['iprodname'], $_POST['iprice'], $_POST['ishortdesc'], $_POST['ilongdesc'],$_POST['iqty']);
        $stmtAdd->execute();   
      echo '<div class="alert alert-success" role="alert">New Item added.</div>';
      break;


      case 'Edit':
      $sqlEdit = "update Product set football_name=?, city_ID=? where city_ID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssi", $_POST['editteamname'], $_POST['editcityID'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Team edited.</div>';
      break;

  }
}
?>



<div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addInstructorLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addcityLabel">Add New Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Product Name</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["productID"]?>Help" name="iprodname">
                           <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Price</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["productID"]?>Help" name="iprice">
                          <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Short Desc</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["productID"]?>Help" name="ishortdesc">
                          <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Long Desc</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["productID"]?>Help" name="ilongdesc">
                          <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">QTY Available</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["productID"]?>Help" name="iqty">

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

  
<?php




    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
          
          <tr>
            <td><?=$row["productID"]?></td>
            <td><?=$row["name"]?></td>
            
            <td>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editfootball<?=$row["city_ID"]?>" style = "background-color:white;">
                Edit
              </button>
              <div class="modal fade" id="editfootball<?=$row["city_ID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editfootball<?=$row["city_ID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editfootball<?=$row["city_ID"]?>Label">Edit team</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Enter CityID</label>
                             <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["city_ID"]?>Help" name="editcityID" value="<?=$row['city_ID']?>">
                             <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Enter Team Name</label>
                             <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["city_ID"]?>Help" name="editteamname" value="<?=$row['football_name']?>">
                             <div id="editfootball<?=$row["city_ID"]?>Help" class="form-text">Enter the Teams CityID and Name.</div>
                            </div>
                        <input type="hidden" name="iid" value="<?=$row['city_ID']?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="iid" value="<?=$row["city_ID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <button type="submit" class="btn" onclick="return confirm('Are you sure?')"style = "background-color:white;"> Delete </button>
              </form>
            </td>
          </tr>
          
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
