<?php
function sqli_takefirst($sqli){
    while ($row = $sqli->fetch_assoc()) {
        foreach($row as $first){
            return $first;
        }
      }
}
function get_session_user(){
    $username=$_SESSION["username"];
    $result=$conn->query("select* from ligma where username='$username'");
    return $result->fetch_assoc();

}



?>