<html>
    <head>
        <link rel="stylesheet" href="trekstil.css">
        <style>
</style>

    </head>
<body class = "backstil">
  <ul class ="navl">
        <li><a class = loc href = "http://localhost/trekenerator/trekenerator/mainPage.php">Home page</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">Add a location</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > Add a path </a></li></li>
  <li><a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> Trekenerate</a></li>
  <li><a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">Interweb</a></li>

  <li class="account">
  <?php
  include "methods.php";
  include "check/config.php";
  include "check/login.php";
  if (isset($_SESSION['username'])){
    $username =$_SESSION['username'];
    $placeId= sqli_takefirst($conn->query("SELECT ID from account WHERE username ='$username'"));
    echo"<a href ='http://localhost/trekenerator/trekenerator/display/info.php?thing=account&ID=$placeId'>$username</a>";
  }


  ?>
  </li>
</ul>




</body>
</html>
