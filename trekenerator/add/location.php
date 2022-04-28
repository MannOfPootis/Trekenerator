
<?php
include "../check/config.php";
?>
<?php
include "../check/login.php";
$poster= $conn->query("SELECT id FROM account WHERE username = '$username' ")->fetch_object()->id;

//$works=$_SESSION["works"];
//echo "$works";
if(array_key_exists("name",$_POST))
{
    $name= $_POST["name"];
    if(array_key_exists("height",$_POST))
    {
        $height= $_POST["height"];
    }
    else
    {
        $height = -100;
    }

    
    if(array_key_exists("comment",$_POST))
    {
        $comment= $_POST["comment"];
    }
    else
    {
        $comment = "0";
    }
    
    echo "$poster";
    if($conn->query("SELECT name from location where name='$name'")->num_rows>0)
        {
            echo "<br>wrong nejm<br>";
        }else
        {
            $conn->query("INSERT INTO location(name, height,poster,comment)
                                    Values ('$name','$height','$poster','$comment')");
        }
    
    //$sql = "INSERT INTO account(name  ,height  ,poster   ,password)
     //   values('$firstname','$lastname','$username','$password')";
}
?>
<html>
<body>

<h1>add a location</h1>
<a href="http://localhost/trekenerator/signup.php">go to signup </a>
<a href="http://localhost/trekenerator/mainPage.php">gsag</a>

<form action =""method ="post">
    name:<input type="text" name="name"><br>
    Height above sea level:<input type="text" name="height"><br>
    any comments?:<input type="text" name="comment"><br>
    <input type ="submit">
</form>

</body>
</html>