<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="assets/javascript/w3.js"></script>
    <title>Catalog</title>

    <style>
    .products {
    float: left;
    width: 75%;
    padding: 1rem;
    height: 630px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
}

    .adSpace {
    float: left;
    width: 10%;
    height: 630px;
}

    .adSpace img {
        width: 100%;
        height: 100%;
    }

.filters {
    width: 15%;
    float: left;
    padding-top: 80px;
}

    .filters button {
        float: right;
        margin: 10px;
    }

.dropdown {
    margin-top: 10px;
    float: right;
}

.product {
    border-radius: 25px;
    border: 2px solid lightgrey;
    background-color: rgb(128, 128, 128, 15%);
    text-align: center;
    margin: .5rem;
    padding: 1rem;
    height: fit;
    overflow: hidden;
}
    .product h1 {
        font-size: 16px;
        height: 40px;
        padding: 5px;
}
    .product h2 {
        font-size: 16px;
        height: 40px;
        padding: 5px;
}

    .product img {
        height: 300px;
        float: left;
        border-radius: 19px;
        width: 45%;
        height: auto;
    }
    .product p {
        width: 55%;
        float: left;
        padding: 1 rem;

    }

footer {
    padding-top: 15px;
    text-align: center;
    width: 100%;
    position: relative;
    clear: both;
}

.footericon {
    margin-left: 10px;
    text-decoration: none;
}

    </style>
</head>

<body>
    <div class="container">
        <h1>Company Name</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="frontEndMain.html">Front End Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="frontEndCatalog.php">Catalog</a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="frontEndCatalog.php">Shipping Map</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="frontEndMain.html">Cart</a>
                    </li>
                </ul>
            </div>
        </nav>
                                            <?php
                        $servername = "localhost";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$iid = $_GET['id'];
//echo $iid;
$sql = "Select * From product Where productID =".$iid;
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
        <div class="content">
            <div class="products">
                <div class="product">

                <h1><?=$row["name"]?></h1>
                <h2><?=$row["shortDesc"]?> </h2>
                <img src="assets/<?=$row["img"]?>.png" </img>
                <p><?=$row["longDesc"]?> </p>
                </div>
                <div class="reviews">
                    <h1>Cutomer Reviews</h1>
                    <p>Rating</p>
                    <p>Text</p>
                </div>

            </div>
            <div class="filters">
                                <h1><?=$row["price"]?></h1>
                <p>Qty Avalible</p>
                <p>Buy Now Button</p>
                <p>Add to cart Button</p>
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
                        <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

        <footer>
            <div class="icons">
                <img class="footericon" src="assets/send-mail.svg" />
                <img class="footericon" src="assets/phone.svg" />
                <img class="footericon" src="assets/message-text.svg" />
                <a class="footericon" href="https://www.facebook.com/" target="_blank">
                    <img src="assets/facebook.svg" />
                </a>
                <a class="footericon" href="https://www.twitter.com/" target="_blank">
                    <img src="assets/twitter.svg" />
                </a>
                <a class="footericon" href="https://www.instagram.com/" target="_blank">
                    <img src="assets/instagram.svg" />
                </a>
            </div>
            <p>Company Name<p>
        </footer>
    </div>
</body>

</html>