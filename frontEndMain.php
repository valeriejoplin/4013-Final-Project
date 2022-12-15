<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Home</title>

</head>
<style>
.frontpage{
	text-align:center;
	border: 1.5px solid black;
	font-family: "Times New Roman", Times, serif;
	background-color:#F9E9D8;
	}
.logo{        

	width:100px;
	height:100px;
	}
.img{
  display: block;
  margin-left: auto;
  margin-right: auto;	
  border: 1px solid black;
 height: 375px;
width: 800px;
	}
.card img{
	width:300px;
	height:300px;
	}
.promo{
	text-align:center;
	border:1px solid black;
	width: 400px;
	height: 400px;
	font-family:"Mongolian Baliti", Times, serif;
	align: center;
	float: left;
	background-color: #E7FAFC;
	}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
 height: 300px
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.text {
  font-weight: bold;
  font-family: "Times New Roman", Times, serif;
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
<body>
    <div class="container">
                <?php require_once("frontEndHeader.php"); ?>
<div class="frontpage">
        <h1>VAST Fashion</h1>
        <h3>Since 2022</h3>
	    </div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
	 <a href="frontEndCatalog.php">
  <img class="img" src="https://wallpapershome.com/images/pages/pic_h/5211.jpg" style="width:100%">
	</a>
  <div class="text" src="frontEndCatalog.php">Shop Now</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
	<a href="frontEndCatalog.php">
  <img class="img" src="http://picture-cdn.wheretoget.it/h5689f-i.jpg" style="width:100%">
	</a>
  <div class="text" src="frontEndCatalog.php">Shop Now</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
 <a href="frontEndCatalog.php">
  <img class="img" src="https://firstclasse.com.my/wp-content/uploads/2020/11/Boarini-Milanesi-bag-featured.jpg" style="width:100%">
	 	</a>
  <div class="text" src="frontEndCatalog.php">Shop Now</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>
	    
	 
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style media="screen">
    	*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: white;
}
.popup{
	float: center;
	border: 2.5px solid white;
    background-color: #c54245;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
display: none;
    text-align: center;
	font-family: "Times New Roman", Times, serif;


}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #c54245;
    text-weight: bold;
		background:white;
		border-radius: 100%;
		width: 40px;
		height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
	margin-top: -20px;
	color:white;
	font-weight:bold;
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
    text-align:center;
	    }
.popup h9{
	text-align:center;
	color:white;
	    }
.popup h4{
	color: white;
	    }
input[type=submit]{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #0f72e5;
    border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="popup">
            <button id="close">&times;</button>
            <h2>Happy Holidays!</h2>
            <h4> Want to save 15%? </h4>
            <p> Save BEFORE the Holidays and use code <span style="background-color:#00FEFE">DECEMBER15</span> at checkout.</p>
		<h9> Valid through 01/01/2023 </h9>

        </div>
        <script type="text/javascript">
            window.addEventListener("load", function () {
                setTimeout(
                    function open(event) {
                        document.querySelector(".popup").style.display = "block";
                    },
                    2000
                )
            });

            document.querySelector("#close").addEventListener("click", function () {
                document.querySelector(".popup").style.display = "none";
            });
            function submitFunction() {
                alert('Thank you! You have been added to our email list.');
            }
        </script>

        <div class="promo">
            <h4> Sign up for special offers and promotional emails </h4>
            <form action="https://formsubmit.co/3cbd6087d29d14ef54538c6817c28eba" method="POST">

                <input type="hidden" name="_autoresponse" value="Thank you for signing up!">
                <input type="hidden" name="_next" value="https://project.asoltis.oucreate.com/frontEndMain.php">
                <p>Name:</p>
                <input type="text" name="name" required>
                <p>Email</p>
                <input type="email" name="email" placeholder="Email Address">
                <button style="width:80%;margin: 10px;padding-bottom: 20px;border-top-width: 2px;" type="submit">Sign Up!</button>
            </form>
        </div>
	 
        <div class="featured">
		    <?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   
						

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM product where productID=8";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                            ?>
            <h1> Featured products: Comming Soon<h1> 
      <div class="card">
	    <h1><?=$row["name"]?></h1>
            <a href="./frontEndProduct.php?id=<?=$row["productID"]?>">
            <img src="assets/<?=$row["img"]?>.png" />
            </a>
		    </div>
		    <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
 <?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   
						

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM product where productID=2";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                            ?>
      <div class="card">
	    <h1><?=$row["name"]?></h1>
            <a href="./frontEndProduct.php?id=<?=$row["productID"]?>">
            <img src="assets/<?=$row["img"]?>.png" />
            </a>
		    </div>
			    <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
 <?php
                        $servername = "165.227.18.177";
                        $username = "asoltiso_project";
                        $password = "Project1243";
                        $dbname = "asoltiso_project";   
						

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM product where productID=5";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                            ?>
      <div class="card">
	    <h1><?=$row["name"]?></h1>
            <a href="./frontEndProduct.php?id=<?=$row["productID"]?>">
            <img src="assets/<?=$row["img"]?>.png" />
            </a>
</div>
		    <?php
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
		                    <script>
                    w3.slideshow(".card", 6000);
                </script>
    </div>
      <?php require_once("frontendfooter.php"); ?>
</body>
</html>
