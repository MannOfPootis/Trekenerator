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
  z-index: -10;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
    
    </head>
<body class = "backstil">
  <ul class ="nav">
        <li><a class = loc href = "http://localhost/trekenerator/trekenerator/mainPage.php">Home page</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/location.php">Add a location</a></li>
  <li><a class = "loc" href="http://localhost/trekenerator/trekenerator/add/path.php" > Add a path </a></li></li>
  <li><a class = "loc" href ="http://localhost/trekenerator/trekenerator/display/trekLength.php"> Trekenerate</a></li>
  <li><a class = loc href = "http://localhost/trekenerator/trekenerator/display/interweb.php">Interweb</a></li>

  <li class="account">
  <div class="tooltip">Hover over me        <br>
  <div class="tooltiptext"><a href="http://localhost/trekenerator/trekenerator/change/password.php">change password</a></span>
  
</div></li>
</ul>




</body>
</html>