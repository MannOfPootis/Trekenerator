
<html>
    <head>
        <link rel="stylesheet" href="trekstil.css">

    </head>
<body class = "backstil">

<div class= "mainBackground">
  <ul class ="nav">
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">Add a location</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > Add a path </a></li></li>
  <li><a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> Trekenerate</a></li>
  <li><a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">Interweb</a></li>
</ul>
<div class = "window">
<h1>Welcome to the first Trekenerator made by me</h1>
<?php
include "modularLogin.php";
?>

<br>
<?php
if (array_key_exists( "username",$_SESSION)){
    echo'<a class = "logout" href = "http://localhost/trekenerator/trekenerator/modularLogout.php"><button>logout</button></a>';
}
?>

</div>
</div>

</body>
</html>
