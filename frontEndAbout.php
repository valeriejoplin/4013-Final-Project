<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Front End Home</title>
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
       .about{
             font-family: "Times New Roman", Times, serif;
           text-align:center;
            border: 1.5px solid black;
           background-color: #FAD2A0;
         }
        .Val{
            height:300px;
            width: 250px;
        }

        .table h3{
              font-family: "Times New Roman", Times, serif;
         }
         .designers{
               font-family: "Times New Roman", Times, serif;
         }
        </style>
 <div class="about">
<h1> About Us </h1>
 <p> VAST fashion was founded in 2022 by four college students who have a passion for web design and fashion! Generic information about company and our founding members. </p>
        </div>
    <div class="table">
        <h3> Meet the designers </h3>
        <table class="designers">
  <tr>
    <th>Valerie Joplin</th>
    <th>Andrew Soltis</th>
    <th>Sana Yari Hajatalou</th>
    <th>Trevor Riley</th>

  </tr>
  <tr>
    <td><img src="ValeriePhoto.jpg" class="Val"></td>
    <td>Andrew Image</td>
    <td><img src="1629837912471.jpeg" class = "Val"</td>
    <td><img src="TrevorPhoto.jpg" class ="Val" ></td>

  </tr>
  <tr>
    <td>MIS Major, Class of 2023</td>
    <td>Info</td>
    <td>Info</td>
    <td>MIS Major, Class of 2022!</td>
  </tr>
 
</table>


 </body>

 <?php require_once("frontendfooter.php"); ?>
