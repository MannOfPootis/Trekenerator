<html>
    <head>
            <link rel="stylesheet" href="../sus.css">
            <style>

                div{
                    background-color:grey;
                    margin:5px;
                    width:fit-content;
                }
            </style> 
        <script>




        </script>
    </head>
    <body>

        <h1>welcome to the first trekenerator made by me</h1>
        <?php
        include "../check/config.php";
        include "../check/login.php";
        if(isset($_GET["thing"])&&isset($_GET["name"])){
    
            switch ($_GET["thing"]) 
            {
                case "location":
                    echo "ligmaballs";
                    $name=$_GET["name"];
                    
                   // $row = mysql_fetch_row($res);
                   $allPlaces=$conn->query("SELECT* from location WHERE name='$name' ");
                   $sus=0;
                   while($place = mysqli_fetch_array(
                       $allPlaces,MYSQLI_ASSOC)){
                           $placeName=$place["name"];
                           $placeId=$place["id"];
                           if(isset($place["comment"])){
                           $placeComment=$place["comment"];}
                           else{
                            $placeComment= "none";
                           }
                           echo "<div
                           class = '' id='$placeId'>
                               $placeName is the name<br>
                               $placeId is the id<br>
                               $placeComment is the comment<br>

                           </div>";
                   
                       }break;
                case "path":
                    echo "ligmaballs";
                    $name=$_GET["name"];
                    
                   // $row = mysql_fetch_row($res);
                   $allPlaces=$conn->query("SELECT* from path WHERE name='$name' ");
                   $sus=0;
                   while($place = mysqli_fetch_array(
                       $allPlaces,MYSQLI_ASSOC)){
                           $placeName=$place["name"];
                           $placeId=$place["id"];
                           $placeStart=$place["location1"];
                           $placeEnd=$place["location2"];
                           if(isset($place["comment"])){
                           $placeComment=$place["comment"];}
                           else{
                            $placeComment= "none";
                           }
                           echo "<div
                           class = '' id='$placeId'>
                               $placeName is the name
                               $placeId is the id
                               $placecomment is the comment


                           </div>";
                   
                       }break;
            }
        }
    ?>
    </body>



</html>