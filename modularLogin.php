<?php
session_start();
?>
<html>
<head>
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
if(
    array_key_exists( "username",$_POST)&&
    array_key_exists( "password",$_POST)
    )
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($conn->query("select username from account where username='$username' and password='$password'")->num_rows>0)
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
<input type="submit">
';}
else{echo "you are loged in";}
?>

</form>
</body>
</html>