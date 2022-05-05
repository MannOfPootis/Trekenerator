<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="trekstil.css">
        <style>

            form{
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
            //echo "it should work";
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
<form action="" method="post">
<div class="borderp">
Please log in <br><br>
username:<br> <input type="text" name="username"><br>
password:<br>   <input type="password" name="password"><br>
<input type="submit" value="login">
</div>
</form>
<h2><a href="http://localhost/trekenerator/trekenerator/signup.php">Sign Up</a></h2>

';}

?>

</body>
</html>
