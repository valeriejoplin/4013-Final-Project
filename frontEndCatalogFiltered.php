<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the selected values from the form fields
  $selectedBrand = $_POST["brands"];
  $selectedCategory = $_POST["categories"];
  $selectedItem = $_POST["items"];

  // Output the selected values or a default message if no options were selected
  echo "You selected the following options:<br>";
  echo "Brand: ";
  switch ($selectedBrand) {
    case "":
      echo "None";
      break;
    default:
      echo $selectedBrand;
      break;
  }
  echo "<br>";

  echo "Category: ";
  switch ($selectedCategory) {
    case "":
      echo "None";
      break;
    default:
      echo $selectedCategory;
      break;
  }
  echo "<br>";

  echo "Item: ";
  switch ($selectedItem) {
    case "":
      echo "None";
      break;
    default:
      echo $selectedItem;
      break;
  }
}
?>
  <!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/catalogStyle.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="assets/javascript/w3.js"></script>
    <title>Catalog</title>

</head>
<style>
	.logo{
		width: 100px;
		height:100px;
	}
	.container{
		font-family: "Times New Roman", Times, serif;
	}
	</style>
	
<body>
    <div class="container">
                <?php require_once("frontEndHeader.php"); ?>
   

        <div class="filters">
            <form action="frontEndCatalogFiltered.php" method="post">
                <div class="dropdown">
                    <label for="brands">Brand:</label>
                                       
                    <select name="brands" id="brands">
                        <option value="">None</option>
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
                                $conn->close();
                                ?>
                    </select>
                </div>
            <div class="dropdown">
                <label for="categories">Category:</label>
                <select name="categories" id="categories">
                    <option value="">None</option>
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
                            $conn->close();
                            ?>
                </select>
            </div>
            <div class="dropdown">
                <label for="items">Item:</label>
                <select name="items" id="items">
                    <option value="">None</option>
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
                            $conn->close();
                            ?>
                </select>
            </div>
            <input type="Submit" value="Submit">
            </form>
        </div>
            <div class="content">
                <div class="products">
                    <h1>Products</h1>
                
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

                                if ($selectedBrand == "" && $selectedCategory == "" && $selectedItem == ""){
                                $sql = "SELECT * FROM product join productBrand on product.productID=productBrand.productID join brand on productBrand.brandID=brand.brandID join productItem on product.productID=productItem.productID JOIN item ON productItem.itemID=item.itemID";
                                //echo $sql;
                                }
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                ?>
                                  <div class=product>
				          <a href="./frontEndProduct.php?id=<?=$row["productID"]?>">
                            <img src="assets/<?=$row["img"]?>.png" />
                        </a>
				          <h1><?=$row["name"]?></h1>
				      	
                                  </div>
                                <?php
                                  }
                                } else {
                                  echo "0 results";
                                }
                                $conn->close();
                                ?>
                </div>
                <div class="adSpace">
                    <img class="ad" src="https://images.unsplash.com/photo-1558391743-ca83be23f286?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1976&q=80" />
                    <img class="ad" src="https://images.unsplash.com/photo-1570439694914-0c41d72f1547?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=592&q=80" />
                    <img class="ad" src="https://images.unsplash.com/photo-1565946802455-e22f77e72a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" />
                    <script>
                        w3.slideshow(".ad", 6000);
                    </script>
                </div>
            </div>
        
        
    </div>

    <?php require_once("frontendfooter.php"); ?>
</body>

</html>
