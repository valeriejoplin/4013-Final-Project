<?php   
  $selectedBrand = $_POST["brands"];
  $selectedCategory = $_POST["categories"];
  $selectedItem = $_POST["items"];

  // Output the selected values
  echo "You selected the following options:<br>";
  echo "Brand: " . $selectedBrand . "<br>";
  echo "Category: " . $selectedCategory . "<br>";
  echo "Item: " . $selectedItem;
  ?>