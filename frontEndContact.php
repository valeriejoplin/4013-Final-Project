<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>Contact</title>

    </head>
   <style>
       h2{
           text-align:center;
           font-family:"Times New Roman", Times, serif;
       }
       h4{
           text-align:center;
           font-family:"Times New Roman", Times, serif;
       }
       .contact{
           float:right;
           border: 1px solid black;
           text-align:center;
           font-family:"Times New Roman", Times, serif;
       }
    </style>
<body>

                                                             
<div class="container">
 <?php require_once("frontEndHeader.php"); ?>
     <h2> We would love to hear your feedback and suggestions! </h2>
     <h4> Enter your email address and comments below. </h4>
             <form action="https://formsubmit.co/3cbd6087d29d14ef54538c6817c28eba" method="POST">

                <input type="hidden" name="_autoresponse" value="Thank you for your inquirie to VAST someone will never get back to you!">
                <input type="hidden" name="_next" value="https://project.asoltis.oucreate.com/frontEndMain.php">

                <p>Email</p>
                <input type="email" name="email" placeholder="Email Address">
                <p>Comment/Feedback</p>
                <input type="text" name="Feedback" required>
                <button type="submit">Send</button>
            </form>
    <div class="contact">
    <h3> Contact Information </h3>
    <h6> Phone Number: (405)-405-4054 </h6>
    <h6> Email Address: vastfashcontact@gmail.com </h6>
    </div>
            </div>
                 <?php require_once("frontendfooter.php"); ?>
            </body>
