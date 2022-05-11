
<?php
include "../check/config.php";
include '../nav.php';
?>
<?php
include "../check/login.php";
$poster= $conn->query("SELECT id FROM account WHERE username = '$username' ")->fetch_object()->id;

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
            echo "<br>name taken<br>";
        }else
        {
            $conn->query("INSERT INTO location(name, height,poster,comment)
                                    Values ('$name','$height','$poster','$comment')");
        }

}
?>
<html>
<head>
    <link rel="stylesheet" href="../trekstil.css">
    
</head>
<body>

<div class ="locationBackground">
  <div class ="window2">
  <h1>Adding locations</h1><br>
  <p>locations need to be added to the database so that it can function properly so.. pick a location you have been to and add it to the database. perhaps it is a hill you have been on or a town. Whatever it is fell free to add it to our ever expanding library</p>
<br>
  <form action =""method ="post">

  <h2>Add a location</h2>
    name:<br><input type="text" name="name"><br>
    Height above sea level:<br><input type="text" name="height"><br>
    any comments?:<br><input type="text" name="comment"><br>
    <input type ="submit">

</form>
</div>
<div>
</body>
</html>
