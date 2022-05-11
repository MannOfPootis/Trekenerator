<?php
$servername = "localhost";
$username = "joe1";//ime računa
$password = "sadabsdhgavdz";// geslo

$conn = new mysqli($servername, $username, $password,"trekenerator");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>