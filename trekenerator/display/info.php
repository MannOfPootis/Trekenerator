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
                    $allL=$conn->query("SELECT*
                        from location
                        WHERE name=$name");
                   // $row = mysql_fetch_row($res);
                    while($location=mysqli_fetch_array(
                        
                        $allL,MYSQLI_ASSOC))
                        {
                            $locationName=$location["name"];
                            echo "$locationName";
                    
                    }
                    break;
            }
        }
    ?>
    </body>



</html>