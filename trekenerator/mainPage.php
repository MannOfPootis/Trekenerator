
<html>
    <head>
        <link rel="stylesheet" href="trekstil.css"> 

    </head>
<body class = "backstil">
<div class= "mainBackground">
<div class = "window">
<h1>welcome to the first trekenerator made by me</h1>
<?php
include "modularLogin.php";
?>

<br>
<?php
if (array_key_exists( "username",$_SESSION)){
    echo'<a class = "logout" href = "http://localhost/trekenerator/trekenerator/modularLogout.php">logout</a>';
}
?>

<div class ="nav">   
<a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">ada a location</a>
<a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > add a path </a>
<a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/paths.php"> display paths</a>
<a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> trekenerate</a>
<a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">interweb</a>

</div>
</div>
</div>

</body>
</html>