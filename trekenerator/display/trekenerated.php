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
        //$real=$path[$dex]->fetch_object()->length;
        //$start= $path[$dex]->fetch_object()->location2;
       
        $why=$path[$dex]->fetch_object();
        $start =$why->location1;
        $end = $why->location2;
        $length = $why->length;
        $real+= $length;
        //$end=$path[$dex]->fetch_object()->location2;
        //$startName=$path[$dex]->fetch_object()->comment;
        echo "<br>
        <p>we start at <i>$start</i> for $length m  and end at <i>$end</i>";
        $sum+=$length;
        //$start = 5;
        $dex++;
        
        //echo $start;
        $path[$dex]=$conn->query("select * from path where location1 != location2 and location1=$start or location2=$start
        order by RAND()
        limit 1");
        //$real++;
        //$goal=-1;
    }
    echo "for a total of $sum meters";
    /*foreach($path as $ligma){
        //$pathlist= mysqli_fetch_array($ligma);
        //$name=$pathlist['name'];
        //$location1=$pathlist['location1'];
        $name = $ligma->fetch_object()->name;
        $location1 = $ligma->fetch_object()->location1;

        echo "<p>$name  $location1</p><br>";
    
    }*/
?>


</form>
</body>
</html>