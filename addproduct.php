<?php require_once("backendheader.php"); ?>

<h1>Add Product </h1>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">
        Add New
      </button>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
        $sqlAdd = "insert into Product (name,price,shortDesc,longDesc) value (?, ?)";
        $stmtAdd = $conn->prepare($sqlAdd);
        $stmtAdd->bind_param("is",$_POST['icityID'], $_POST['iteamname']);
        $stmtAdd->execute();   
      echo '<div class="alert alert-success" role="alert">New Item added.</div>';
      break;

  }
}



<div class="modal fade" id="addInstructor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addInstructorLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addcityLabel">Add Football Team</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">Team Name</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["city_ID"]?>Help" name="iteamname">
                          <div id="editfootball<?=$row["city_ID"]?>Help" class="form-text">Enter the basketball team name.</div>
                           <label for="editfootball<?=$row["city_ID"]?>Name" class="form-label">City_ID</label>
                          <input type="text" class="form-control" id="editfootball<?=$row["city_ID"]?>Name" aria-describedby="editfootball<?=$row["city_ID"]?>Help" name="icityID">
                        </div>
                <input type="hidden" name="saveType" value="Add">
                <button type="submit" class="btn btn-primary">Submit</button>
  ?>