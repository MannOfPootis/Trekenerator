<html>
    <head>
        <link rel="stylesheet" href="trekstil.css">
        <style>
/* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
 
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
  top: 100%;
  left: 50%;
  margin-left: -60px;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
}
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
    session_start();
  include "methods.php";
  include "check/config.php";
  if (isset($_SESSION['username'])){
    $username =$_SESSION['username'];session_abort();
    $placeId= sqli_takefirst($conn->query("SELECT ID from account WHERE username ='$username'"));
    echo"<a href ='http://localhost/trekenerator/trekenerator/display/info.php?thing=account&ID=$placeId'>asdashdahh</a>";
  }
  
  
  ?>
  </li>
</ul>




</body>
</html>