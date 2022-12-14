<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <title>MIS 4013 Final Project</title>
</head>
 <style>
.button{
  background-color: #F3E5D3;
  border: 10px;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.container{
  margin: auto;
  width: 60%;
  border: 1.5px solid black;
  padding: 10px;
  top: 35px;
  position: relative;
  background-color:white;
  text-align:center;
}
.body{
    background-color:#EEEAE4;
 }
 .names{
     text-align:left;
     position:relative;
     left:300px;
 }
</style>
<body class="body">
    <div class="container">

        <h1 style="color:blue;">MIS 4013 Group Project</h1>
        <button onclick="location.href='frontEndMain.php'" class="button" type="button">Front End</button>
        <button onclick="location.href='backEndLogin.php'" class="button" type="button">Back End</button>
        <h3 style="color:blue;">Created By:</h3>
        <ul class="names">
            <li>Valerie Joplin</li>
            <li>Andrew Soltis</li>
            <li>Sana Yari Hajatalou</li>
            <li>Trevor Riley</li>
        </ul>
    </div>
</body>
</html>
