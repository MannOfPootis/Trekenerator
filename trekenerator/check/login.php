<?php
session_start();
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
      $url = "https://";
 else{
      $url = "http://";}
 // Append the host(domain name, ip) to the URL.
 $url.= $_SERVER['HTTP_HOST'];

 // Append the requested resource location to the URL
 $url.= $_SERVER['REQUEST_URI'];

if(array_key_exists("username",$_SESSION))
{
$username=$_SESSION["username"];
}else


if($url!="http://localhost/trekenerator/trekenerator/mainPage.php" && $url!='http://localhost/trekenerator/trekenerator/signup.php')
{
    header("Location: http://localhost/trekenerator/trekenerator/mainPage.php");
    exit();
}
?>
