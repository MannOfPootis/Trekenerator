<?php
include "check/config.php";
echo "hello world";

    if(array_key_exists( "first_name",$_POST)&&
    array_key_exists( "last_name",$_POST)&&
    array_key_exists( "username",$_POST)&&
    array_key_exists( "password",$_POST)&&
    array_key_exists( "password2",$_POST) 


    ){
    if($_POST["password"]==$_POST["password2"])
    {
        $firstname=$_POST["first_name"];
        $lastname=$_POST["last_name"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($conn->query("select username from account where username='$username'")->num_rows>0)
        {
            echo "<br>wrong nejm<br>";
        }
        else
        {
        $sql = "INSERT INTO account(first_name  ,last_name  ,username   ,password)
        values('$firstname','$lastname','$username','$password')";
        if ($conn->query($sql)) {
            echo "<h1>New record created successfully</h1>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
        $conn->close();
        echo $_POST["first_name"];
    }
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
First Name: <input type="text" name="first_name"><br>
Last Name:<input type="text" name="last_name"><br>
Username: <input type="text" name="username"><br>
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