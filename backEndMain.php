<?php
  session_start();

  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    break();
  } else {
    // User is not logged in, redirect to login page
    header("Location: backEndLogin.php");
  }
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Back End</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="backEndMain.html">Back End Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="addproduct.php">Add Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="backEndMain.html">View Sales History</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="backEndMain.html">Database Diagram</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        body {
            background-image: url('https://www.vestian.com/blog/wp-content/uploads/vestian-marathalli-6.jpg');
        }

        h1 {
            font-weight: bold;
        }

        .container {
            background-color: white;
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            margin: auto;
            width: 60%;
            border: 1.5px solid black;
            padding: 10px;
            top: 50px;
            position: relative;
        }
    </style>
    <div class="container">
        <h1> VAST Fashion Back End </h1>
        <p> Navigate the back end of our website by using the navigation bar at the top of the screen. View our database diagram, sales history, and add a new product </p>
    </div>
</body>



</html>
