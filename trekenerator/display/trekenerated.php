<?php

?>
<html>
<head>
<link rel="stylesheet" href="../trekstil.css">
        <style>
            form{
                background-color:gray;
                width: fit-content;
                
                border-width:100px;
            }
            .line{
                width: 100px;
                background-color:#000000;
                transform:rotate(120deg);
                height:10px;

            }
        </style>
        <script>
        </script>
    </head>
<body>
<div class ="trekeneratedBackground">
<?php

include "../check/config.php";
include "../nav.php";
$allp=$conn->query("select * from path where location1 != location2 
order by RAND()
limit 1
");

while ($allpArray=mysqli_fetch_array($allp)){
    $cum=$allpArray['location1'];
    echo "<h1>$cum</h1>";
}
?>
<?php
    echo $_POST["length"];
    $goal = (int)$_POST["length"];
    $dex =0;
    $path[$dex]= $conn->query("select * from path
    order by RAND()
    limit 1");
    $real =0;
    $sum=0;
    while($real<$goal){
        $why=$path[$dex]->fetch_object();
        $start =$why->location1;
        $end = $why->location2;
        $length = $why->length;
        $real+= $length;
        $nameStart=sqli_takefirst($conn->query("SELECT name FROM location where id ='$start'"));
        $nameEnd=sqli_takefirst($conn->query("SELECT name FROM location where id ='$end'"));
        echo "<br>
        <p>we start at <i>$nameStart</i> for $length m  and end at <i>$nameEnd</i></p><br>";
        $sum+=$length;
        $dex++;
        $path[$dex]=$conn->query("select * from path where location1 != location2 and location1=$start or location2=$start
        order by RAND()
        limit 1");
    }
    echo "for a total of $sum meters";
?>
</div>

</form>
</body>
</html>