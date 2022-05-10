<?php
//session_start();
include "../check/config.php";
include "../check/login.php";
include "../methods.php";

    if(
    array_key_exists( "originalPassword",$_POST)&&
    array_key_exists( "password",$_POST)&&
    array_key_exists( "password2",$_POST) 


    ){
        $username = $_SESSION["username"];
    if($_POST["password"]==$_POST["password2"]&&password_verify($_POST['originalPassword'],sqli_takefirst($conn->query("SELECT password from account where username = '$username'"))))
    {
        
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql = "UPDATE account SET password = '$password' WHERE account.username ='$username'";
        if ($conn->query($sql)) {
            echo "<h1>New record created successfully</h1>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
        $conn->close();
    }

?>
<html>
    <head>
        <style>
            form{
                background-color:gray;
                width: fit-content;
            }
        </style>
    </head>
<body>
    <script type="text/javascript">
        //function submitcheck
        function checkok(){
            var password = document.getElementById("password");
            var password1 = document.getElementById("password1");
            if(password.value!=(password1.value)){
                document.getElementById("problem").innerHTML="ligmaballs";
            }
            else{
                document.getElementById("problem").innerHTML="isok";
            }
            //document.getElementById("problem").innerHTML=password.value;
        }
    </script>
<div class = "box">
<form action="" method="post">

original Password<input type="password" name="originalPassword"><br>
Password<input type="password" name="password"id ="password" onchange="checkok()"><br>
Password again<input type = "password" name="password2" id ="password1" onchange="checkok()">

<input type="submit" >
<div id ="problem"></div>
</div>
</form>
<a href="http://localhost/trekenerator/trekenerator/login.php">go to login </a>
<a href="http://localhost/trekenerator/trekenerator/mainPage.php">main page</a>

</body>
</html>