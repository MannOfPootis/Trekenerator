<?php
session_start();
session_destroy();
header("Location:http://localhost/trekenerator/trekenerator/mainPage.php");
?>
