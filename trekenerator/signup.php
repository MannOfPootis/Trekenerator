<?php
include 'nav.php';
include "check/config.php";
echo "hello world";




?>
<html>
    <head>
        <style>
            
        </style>
    </head>
<body>
    <script type="text/javascript">
        //function submitcheck
        function checkok(){
            var password = document.getElementById("password");
            var password1 = document.getElementById("password1");
            if(password.value!=(password1.value)){
                document.getElementById("problem").innerHTML="The passwords don't mactch";
                document.getElementById("problem").style.color="red";
                //document.getElementById("problem").style.border-color="red";
            }
            else{
                document.getElementById("problem").innerHTML="they match";
                document.getElementById("problem").style.color="green";
            }
            //document.getElementById("problem").innerHTML=password.value;
        }
    </script>
<div class = "trekeneratorBackground">
    <div class="window2">
        <h1>Here you will sign up to our web page</h1><br>
        
<form action="" method="post"><b>
First Name: <input type="text" name="first_name"><br>
Last Name:  <input type="text" name="last_name"><br>
Username:   <input type="text" name="username"><br>
Password:   <input type="password" name="password"id ="password" onchange="checkok()"><br>
Password again<input type = "password" name="password2" id ="password1" onchange="checkok()">
    </b>
<input type="submit" >
<div id ="problem"></div>
<?php
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
                $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
                if($conn->query("select username from account where username='$username'")->num_rows>0)
                {
                    echo "<h1 style ='color: red;'>Username already taken</h1>";
                }
                else
                {
                $sql = "INSERT INTO account(first_name  ,last_name  ,username   ,password)
                values('$firstname','$lastname','$username','$password')";
                if ($conn->query($sql)) {
                    echo "<h1 style ='color: green;'>New record created successfully</h1>";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }
                $conn->close();
            }
        }
        ?>
</div>
</form>
</body>
</html>