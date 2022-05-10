<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";     
$url.= $_SERVER['HTTP_HOST'];   
$url.= $_SERVER['REQUEST_URI'];    

echo $url; 
session_start();
if(array_key_exists("username",$_SESSION))
{
$username=$_SESSION["username"];
//echo "$username";
}
else if($url!="http://localhost/trekenerator/trekenerator/mainPage.php")
{

    header("Location: http://localhost/trekenerator/trekenerator/mainPage.php");
    exit();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../trekstil.css">

    </head>
<body class = "backstil">
  <ul class ="nav">
        <li><a class = loc href = "http://localhost/trekenerator/trekenerator/mainPage.php">Home page</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">Add a location</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > Add a path </a></li></li>
  <li><a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> Trekenerate</a></li>
  <li><a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">Interweb</a></li>

  <li class="account">
<div>
  <?php
    echo"<a href = 'http://localhost/trekenerator/trekenerator/change/password.php' >susword</a>";
  ?>
  <div></li>
</ul>
<li class="account">
<div>
  <?php
    echo"<a href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' >$username</a>";
  ?>
  <div></li>
</ul>



</body>
</html>
