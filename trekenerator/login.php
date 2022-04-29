<?php
include "config.php";
//echo "hello world";
if(
    array_key_exists( "username",$_POST)&&
    array_key_exists( "password",$_POST)
    )
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        echo"$username";
        if($conn->query("select username from account where username='$username' and password='$password'")->num_rows>0)
        {
            echo "it should work";
            session_start();
            $_SESSION["username"]=$username;

        }
        else{
            echo "<p>bad login boyo</p>";
            session_destroy();
        }
    }
    else{
        echo "<p>ligma</p>";
    }
    /*unset($_POST);
    $_POST = array();*/
    session_abort();
?>
<html>
<body>

<form action="" method="post">
username: <input type="text" name="username"><br>
password:   <input type="password" name="password"><br>
<input type="submit">

</form>
<a href="http://localhost/trekenerator/trekenator/signup.php">go to signup </a><br>
<a href="http://localhost/trekenerator/trekenator/mainPage.php">back home</a>



</body>
</html>