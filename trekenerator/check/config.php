<?php
$servername = "localhost";
$username = "joe1";
$password = "kys";

// Create connection
$conn = new mysqli($servername, $username, $password,"trekenerator");
//$connection=mysqli_connect("localhost","joe","kys","phone");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>