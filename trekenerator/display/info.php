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
        if(isset($_GET["thing"])&&isset($_GET["ID"])){
            $ID=$_GET["ID"];
            $topic =$_GET["thing"];
            switch ($topic) 
            {
                case "location":
                    
                    
                    
                   // $row = mysql_fetch_row($res);
                   $allPlaces=$conn->query("SELECT* from location WHERE id='$ID' ");
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
                    
                    
                    
                   // $row = mysql_fetch_row($res);
                   $allPlaces=$conn->query("SELECT* from path  WHERE name='$name' ");
                   $sus=0;
                   while($place = mysqli_fetch_array(
                       $allPlaces,MYSQLI_ASSOC)){
                           $placeName=$place["name"];
                           $placeId=$place["id"];
                           $placeStart=$place["location1"];
                           $placeEnd=$place["location2"];
                           
                           if(strlen($place["comment"])>2){
                           $placeComment=$place["comment"];}
                           else{
                            $placeComment= "none";
                           }
                           echo "<div
                           class = '' id='$placeId'>
                               $placeName is the name <br>
                               $placeId is the id<br>
                               $placeStart is where you start<br>
                               $placeEnd is where you end<br>
                               $placeComment is the comment<br>
                               


                           </div>";
                   
                       }break;
            }
        }
        include "../commenting/commentPath.php";
        $comments=$conn->query("SELECT * from  comment where topic ='$topic' and towards = '$ID'");
        while($comment= mysqli_fetch_array(
            $comments,MYSQLI_ASSOC)){
                $posterId=$comment["poster"];
                $text =$comment["text"];
                //$towards
                //$topic=
                $postername= sqli_takefirst($conn->query("SELECT username from account where id = '$posterId'"));
                echo"<div>$postername says: $text </div>";
            }

    ?>
    </body>



</html>