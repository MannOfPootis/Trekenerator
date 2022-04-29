<?php
session_start();
if(array_key_exists("username",$_SESSION))
{
$username=$_SESSION["username"];
echo "$username";
}
else
{
    
    header("Location: http://localhost/trekenerator/trekenerator/mainPage.php");
    exit();
}
?>