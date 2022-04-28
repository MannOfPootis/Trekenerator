<?php
session_start();
?>
<html>
<head>
        <style>
            form{
                background-color:gray;
                width: fit-content;
                
                border-width:100px;
            }
        </style>

    </head>
<body>

<?php
include "../check/config.php";
include "../check/login.php";
$allp=$conn-query("select * from path");
while ($allpArray=mysqli_fetch_array($allp)){
    echo "$allpArray['location1']";
}
?>



</form>
</body>
</html>