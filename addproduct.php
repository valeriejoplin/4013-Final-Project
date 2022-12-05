<?php require_once("backendheader.php"); ?>

<h1>Add Product </h1>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">
        Add New
      </button>


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
        $sqlAdd = "insert into Product (city_ID,football_name) value (?, ?)";
        $stmtAdd = $conn->prepare($sqlAdd);
        $stmtAdd->bind_param("is",$_POST['icityID'], $_POST['iteamname']);
        $stmtAdd->execute();   
      echo '<div class="alert alert-success" role="alert">New Team added.</div>';
      break;

  }