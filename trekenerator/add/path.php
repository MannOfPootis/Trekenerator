<?php

?>
<?php
include "../check/config.php";
include '../nav.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="../trekstil.css">
    </head>
<body  >
<div class="pathBackground">
    <div class='window2'>
<h1>Add a path</h1><br>
<?php
if(array_key_exists("name",$_POST))
{
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

    if($conn->query("SELECT name from path where name='$name'")->num_rows>0)
        {
            echo "<h1 style=' color : red;'>napačno ime</h1>";
        }
        else
        {
            $conn->query("INSERT INTO path(name,length, location1,location2,comment,poster)
                                      Values ('$name','$length','$location1','$location2', '$comment','$poster')");
            echo "<h1 style=' color : green;'>Dobra izbira</h1>";
        }
}
?><br>
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
</div>
</div>
</body>
</html>