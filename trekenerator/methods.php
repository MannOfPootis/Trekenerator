<?php
function sqli_takefirst($sqli){
    while ($row = $sqli->fetch_assoc()) {
        foreach($row as $first){
            return $first;
        }
      }
}



?>