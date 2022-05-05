<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="trekstil.css"> 
        <style>
            
            form{
                background-color:gray;
                width: fit-content;
                
                border-width:100px;
            }
        </style>

    </head>
<body>

<?php
include "check/config.php";
include "methods.php";
if(
    array_key_exists( "username",$_POST)&&
    array_key_exists( "password",$_POST)
    )
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $gotten_password=sqli_takefirst($conn->query("SELECT password from account where username ='$username'"));
        if(password_verify($password, $gotten_password))
        {
            echo "it should work";
            $_SESSION["username"]=$username;

        }
        else{
            echo "<p>bad login boyo</p>";
            session_destroy();

        }
    }
    //session_abort();
?>

<br>
<?php

if( !array_key_exists( "username",$_SESSION)){
echo'
please log in
<form action="" method="post">
username: <input type="text" name="username"><br>
password:   <input type="password" name="password"><br>
<input type="submit" value="login">
';}
else{echo "you are loged in";}
?>
<a href="http://localhost/trekenerator/trekenerator/signup.php"> would you like to sign up</a>

</form>
</body>
</html>