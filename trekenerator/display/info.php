<html>
    <head>
            <link rel="stylesheet" href="../trekstil.css">
            <style>

                
            </style> 
        <script>




        </script>
    </head>
    <body>

        
        <?php
        include "../check/config.php";
        include "../nav.php";?>
        <div class= "infoBackground">
            <div class="window2">
        
        <?php
        if(isset($_GET["thing"])&&isset($_GET["ID"])){
            $ID=$_GET["ID"];
            $topic =$_GET["thing"];
            switch ($topic) 
            {
                case "location":
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
                               <h1>$placeName</h1><br>
                            <p>$placeComment</p><br>
                               

                           </div>";
                   
                       }break;
                case "path":
                    
                    
                    
                   // $row = mysql_fetch_row($res);
                   $allPlaces=$conn->query("SELECT* from path  WHERE id='$ID' ");
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
                               <h1>$placeName</h1><br>
                               <p>$placeComment</p><h2>
                               <a href ='http://localhost/trekenerator/trekenerator/display/info.php?thing=location&ID=$placeStart'>this is the start<a> <br><br>
                               <a href ='http://localhost/trekenerator/trekenerator/display/info.php?thing=location&ID=$placeEnd'>this is the end<a>    </h2>                        


                           </div>";
                   
                       }break;
                case "account":
                    $Account_sqli=$conn->query("SELECT* from account  WHERE id='$ID'");
                    if($Accray=mysqli_fetch_array(
                        $Account_sqli,MYSQLI_ASSOC))
                        $firstname=$Accray["first_name"];
                        $lastname=$Accray["last_name"];
                        $username=$Accray["username"];
                        if($username == $_SESSION['username']){
                            echo'<br><br><br><br><br><br><a href="http://localhost/trekenerator/trekenerator/modularLogout.php"> logout?</a>';
                        }
                        echo"<div>
                        <h1>$username</h1>
                        <p>$firstname<br>
                        $lastname</p><br>
                        <a href ='http://localhost/trekenerator/trekenerator/change/password.php'> change password?</a>
                        
                        </div>";
                        


                
            }
        }
        include "../commenting/commentPath.php";
        $comments=$conn->query("SELECT * from  comment where topic ='$topic' and towards = '$ID'");
        while($comment= mysqli_fetch_array(
            $comments,MYSQLI_ASSOC)){
                $posterId=$comment["poster"];
                $text =$comment["text"];
                $postername= sqli_takefirst($conn->query("SELECT username from account where id = '$posterId'"));
                echo"<p><b>$postername says:</b> $text </p>";
            }
    ?>
    </div>
    </div>
    </body>



</html>