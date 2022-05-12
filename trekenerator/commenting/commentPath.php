<?php
include "../check/config.php";
//include "../methods.php";
//include "../check/login.php";
if(!isset($_SESSION['comment'])){
    $_SESSION['comment']='';
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
<form action="" method="post">
<textarea class="textcoom" name="comment" id="comments" placeholder="any comments?" >
</textarea><br>
<input type="submit" value="comment" >';}?>
</form>

</body>
</html>
