<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Front End Home</title>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>
    <div class="container">
                <?php require_once("frontEndHeader.php"); ?>

<body>
     <style>
       .logo{
           width:100px;
           height:100px;
         }
         .about h1{
             text-align:center;
             font-weight:bold;
         }
       .about{
             font-family: "Times New Roman", Times, serif;
           text-align:center;
            border: 1.5px solid black;
           background-color: #FAD2A0;
         }
        .Val{
            height:400px;
        }

        .table h3{
              font-family: "Times New Roman", Times, serif;
         }
         .designers{
               font-family: "Times New Roman", Times, serif;
         }

         .card{
             text-align: center;
             font-family: "Times New Roman", Times, serif;
         }
        </style>
 <div class="about">
<h1> About Us </h1>
 <p> VAST fashion was founded in 2022 by four college students who have a passion for web design and fashion! We are all currently studying at Price College of Businesses working in similar degree programs. </p>
        </div>
    <div class="table">

<h1> Meet the Designers <h1>
  <div class="cards">
      <div class="card">
            <h1>Valerie Joplin</h1>
            <img src="ValeriePhoto.jpg" style="height:400px; width:fit-content">
            <h3>MIS</h3>
            <h4>Class of 2023</h4>
      </div>
      <div class="card">
            <h1>Andrew Soltis</h1>
            <img src="AndrewPhoto.jpeg" class="Val">
            <h3>MIS & MIT</h3>
            <h4>Class of 2024</h4>
      </div>
      <div class="card">
            <h1>Sana Yari Hajatalou</h1>
            <img src="1629837912471.jpeg" class="Val">
            <h3>Major</h3>
            <h4>Class of </h4>
      </div>
      <div class="card">
            <h1>Trevor Riley</h1>
            <img src="TrevorPhoto.jpg" class="Val">
            <h3>MIS</h3>
            <h4>Class of 2022!</h4>
      </div>
      <script>
        w3.slideshow(".card", 1800);
      </script>
  </div>
 
</table>


 </body>

 <?php require_once("frontendfooter.php"); ?>
