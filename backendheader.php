<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        ?>
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
                    <a class="nav-link" href="backEndMain.php">Back End Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="addproduct.php">Add Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="backEndMain.php">View Sales History</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="backEndMain.php">Database Diagram</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
