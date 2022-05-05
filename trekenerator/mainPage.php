
<html>
    <head>
        <link rel="stylesheet" href="trekstil.css">

    </head>
<body class = "backstil">
<div class= "mainBackground">
<div class = "window">
<h1>Welcome to the first Trekenerator made by me</h1>
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
<a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">Add a location</a>
<a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > Add a path </a>
<a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> Trekenerate</a>
<a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">Interweb</a>

</div>
</div>
</div>

</body>
</html>
