<?php 
session_start();
if(array_key_exists("username",$_SESSION))
{
$username=$_SESSION["username"];
//echo "$username";
}
else if($url!="http://localhost/trekenerator/trekenerator/mainPage.php" || $url=='http://localhost/trekenerator/trekenerator/signup.php')
{

    header("Location: http://localhost/trekenerator/trekenerator/mainPage.php");
    exit();
}
?>

