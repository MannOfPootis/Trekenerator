<?php
include "../check/config.php";
//include "../methods.php";
//include "../check/login.php";
session_start();
if(!isset($_SESSION['comment'])){
    $_SESSION['comment']='x';
}

    if($_GET['thing']!='account'&&isset($_POST["comment"])&& $_SESSION['comment'] !=$_POST["comment"])
{
    if(strlen($_POST["comment"])>1)
    {
        $comment=$_POST["comment"];
        $topic=$_GET["thing"];
        $idObject=$_GET["ID"];
        $username=$_SESSION["username"];
        $idUser=sqli_takefirst($conn->query("SELECT id FROM account where username = '$username'"));
        $sql = "INSERT INTO comment(poster,text,topic,towards)
        values('$idUser','$comment','$topic','$idObject')";
        if ($conn->query($sql)) {
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
    $_SESSION['comment']=$comment;
}
 



?>
<html>
    <head>
        <style>
            
        </style>
    </head>
<body>
    <script type="text/javascript">
        
    </script>
    <?php
    if($_GET['thing']!='account')
    {
    echo'
<div class = "box">
<form action="" method="post">
<input type ="text" name="comment"/>
<input type="submit" >
<div id ="problem"></div>
</div>';}?>
</form>

</body>
</html>