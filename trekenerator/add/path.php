<?php

?>
<?php
include "../check/config.php";
include "../check/login.php";
//$poster= $conn->query("SELECT id FROM account WHERE username = '$username' ")->fetch_object()->id;
//$locations=mysqli_query($conn,"SELECT * FROM location ");
//echo "$locations";

//$works=$_SESSION["works"];
//echo "$works";
if(array_key_exists("name",$_POST))
{
    //echo "<h1>less go</h1>";
    $name= $_POST["name"];
    $location1 = $_POST["location1"];
    $location2 = $_POST["location2"];
    $length = $_POST["length"];
    
    if(array_key_exists("comment",$_POST))
    {
        $comment= $_POST["comment"];
    }
    else
    {
        $comment = "0";
    }
    $poster= $conn->query("SELECT id FROM account WHERE username = '$username' ")->fetch_object()->id;
    echo "$poster";
    //$poster = 3;
    if($conn->query("SELECT name from path where name='$name'")->num_rows>0)
        {
            echo "<br>wrong nejm<br>";
        }
        else
        {
            echo "<br>$poster";
            $conn->query("INSERT INTO path(name,length, location1,location2,comment,poster)
                                      Values ('$name','$length','$location1','$location2', '$comment','$poster')");
            echo "<h1>submitted</h1>";
        }
    
    //$sql = "INSERT INTO account(name  ,height  ,poster   ,password)
     //   values('$firstname','$lastname','$username','$password')";
}
?>
<html>
<body>

<h1>add a path</h1>
<a href="http://localhost/trekenerator/signup.php">go to signup </a>
<a href="http://localhost/trekenerator/mainPage.php">gsag</a>

<form action =""method ="post">
    start locaton:<select name ="location1">
    <?php 
        $locations=mysqli_query($conn,"SELECT * FROM location ");
                while ($category = mysqli_fetch_array(
                        $locations,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["name"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
            </select>
            <br>
        end locaton:<select name ="location2">
    <?php 
    $locations=mysqli_query($conn,"SELECT * FROM location ");
                while ($category = mysqli_fetch_array(
                        $locations,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["name"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
            </select>
            <br>
               
            


    length of the path (in meters):<input type="text" name="length"><br>
    what do you wanna call it: <input type="text" name="name"><br>
    any comments?<input type= "text" name ="comment"><br>
    <input type ="submit">
</form>

</body>
</html>