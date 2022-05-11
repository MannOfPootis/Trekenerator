<?php

?>
<html>
    <head>
    <link rel="stylesheet" href="../trekstil.css">
        <style>
            
            
        </style>
    </head>
<body>

<?php
include "../check/config.php";
include "../nav.php";
?>
<div class="trekeneratorBackground">
    <div class="window2">
        <h1>This is where you trekenerate</h1><br>
        <p> input the desired length of your path and click trekenarate to automaticaly generate a path with such a length</p>
<br>
<form action = "http://localhost/trekenerator/trekenerator/display/trekenerated.php" method = "post"> 
    please input the length in meters
<input type = "text" name = "length">
<input type = "submit" value= 'tekenerate'>


</form>
</div>
</div>
</body>
</html>