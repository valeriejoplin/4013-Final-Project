<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Front End Home</title>
</head>
<style>
.frontpage{
	text-align:center;
	border: 1.5px solid black;
	font-family: "Times New Roman", Times, serif;
	}
.logo{
	width:100px;
	height:100px;
	}
<style>
.frontpage{
	text-align:center;
	border: 1.5px solid black;
	font-family: "Times New Roman", Times, serif;
	}
img{
  display: block;
  margin-left: auto;
  margin-right: auto;	
  border: 1px solid black;
 height: 375px;
width: 800px;
	}

.promo{
	text-align:center;
	border:1px solid black;
	width: 400px;
	height: 400px;
	font-family:"Mongolian Baliti", Times, serif;
	align: center;
	float:center;
	background-color: #E7FAFC;
	}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
 height: 300px
  max-width: 1000px;
  position: relative;
  margin: auto;
}
body{
	background-color: #F8E7D2;
	}

/* Caption text */
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

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
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

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
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
  <img src="https://wallpapershome.com/images/pages/pic_h/5211.jpg" style="width:100%">
	</a>
  <div class="text">Shop Now</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
	<a href="frontEndCatalog.php">
  <img src="http://picture-cdn.wheretoget.it/h5689f-i.jpg" style="width:100%">
	</a>
  <div class="text">Shop Now</div>
</div>

<div class="mySlides fade">
 <a href="frontEndCatalog.php">
  <div class="numbertext">3 / 3</div>
	</a>
  <img src="https://firstclasse.com.my/wp-content/uploads/2020/11/Boarini-Milanesi-bag-featured.jpg" style="width:100%">
  <div class="text">Shop Now</div>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
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
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
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
    <div class="popup">
        <button id="close">&times;</button>
        <h2>Happy Holidays!</h2>
	    <h4> Want to save 15%? </h4>
        <p style =text-align:center;>
           Save BEFORE the Holidays and use code DECEMBER15 at checkout!
        </p>

    </div>
<script type="text/javascript">


 $(document).ready(function() {
     if ($.cookie('pop') == null) {
         document.querySelector(".popup").style.display = "block";
         $.cookie('pop', '1');
     }
 });
document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
	function submitFunction()
{
  alert('Thank you! You have been added to our email list.');
}
    </script>

<div class="promo">
	<h4> Sign up for special offers and promotional emails </h4>
	<form id="promoform" onsubmit="submitFunction()">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
<label for="email">Email Address:</label><br>
  <input type="email" id="email" name="email"><br>
  <input type="submit" value="Submit">
</form>
	</div>
    </div>


</body>

<?php require_once("frontendfooter.php"); ?>

</html>
