<?php
include "../check/config.php";
//include "../methods.php";
//include "../check/login.php";
if(!isset($_SESSION['comment'])){
    $_SESSION['comment']='';
}

    if($_GET['thing']=='account'&&isset($_POST["comment"])&& ($_SESSION['comment'] !=$_POST["comment"]||!isset($_SESSION['comment']))){
    if(strlen($_POST["comment"])>1)
    {
        $comment=$_POST["comment"];
        $topic=$_GET["thing"];
        $idObject=$_GET["ID"];
        $username=$_SESSION["username"];
        $idUser=sqli_takefirst($conn->query("SELECT id FROM account where username = '$username'"));
       // $idObject=sqli_takefirst($conn->query("SELECT id FROM $topic where name = '$idObject'"));
        $conn->query("INSERT INTO comment(poster,text,topic,towards)
        values('$idUser','$comment','$topic','$idObject')
        ");
        $_SESSION['comment']=$comment;
        $_POST = array();
    }
    
}


?>
<html>
    <head>
        <style>
            form{
                background-color:gray;
                width: fit-content;
            }
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
<a href="http://localhost/trekenerator/trekenerator/login.php">go to login </a>
<a href="http://localhost/trekenerator/trekenerator/mainPage.php">main page</a>

</body>
</html>