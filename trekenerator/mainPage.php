
<html>
    <head>
        <link rel="stylesheet" href="sus.css"> 

    </head>
<body>

<h1>welcome to the first trekenerator made by me</h1>
<?php
include "modularLogin.php";
?>
<a href="http://localhost/trekenerator/signup.php"> would you like to sign up</a>
<br>
<?php
if (array_key_exists( "username",$_SESSION)){
    echo'<a class = "logout" href = "http://localhost/trekenerator/modularLogout.php">logout</a>';
}
?>

<div class ="nav">   
<a class = "loc" href="http://localhost/trekenerator/add/location.php">ada a location</a>
<a class = "loc" href="http://localhost/trekenerator/add/path.php" > add a path </a>
<a class = "loc" href ="http://localhost/trekenerator/display/paths.php"> display paths</a>
<a class = "loc" href ="http://localhost/trekenerator/display/trekLength.php"> trekenerate</a>
<a class = loc href = "http://localhost/trekenerator/display/interweb.php">interweb</a>
</div>


</body>
</html>