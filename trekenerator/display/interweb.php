<html>
    <head>
        <link rel="stylesheet" href="sus.css">
        <style>

            div{
                background-color:grey;
                margin:5px;
                width:fit-content;
            }
        </style> 
        <script>
            function connect(div1, div2, color, thickness) {
    var off1 = getOffset(div1);
    var off2 = getOffset(div2);
    // bottom right
    var x1 = off1.left + off1.width;
    var y1 = off1.top + off1.height;
    // top right
    var x2 = off2.left + off2.width;
    var y2 = off2.top;
    // distance
    var length = Math.sqrt(((x2-x1) * (x2-x1)) + ((y2-y1) * (y2-y1)));
    // center
    var cx = ((x1 + x2) / 2) - (length / 2);
    var cy = ((y1 + y2) / 2) - (thickness / 2);
    // angle
    var angle = Math.atan2((y1-y2),(x1-x2))*(180/Math.PI);
    // make hr
    var htmlLine = "<div style='padding:0px; margin:0px; height:" + thickness +
     "px; background-color:" + color +
      "; line-height:1px; position:absolute; left:" + cx + 
      "px; top:" + cy + 
      "px; width:" + length +"px; -moz-transform:rotate(" + angle + "deg);-webkit-transform:rotate(" + angle + "deg); -o-transform:rotate(" + angle + "deg); -ms-transform:rotate(" + angle + "deg); transform:rotate(" + angle + "deg);' />";
    //
    //alert(htmlLine);
    document.body.innerHTML += htmlLine; 
}

function getOffset( el ) {
    var rect = el.getBoundingClientRect();
    return {
        left: rect.left + window.pageXOffset,
        top: rect.top + window.pageYOffset,
        width: rect.width || el.offsetWidth,
        height: rect.height || el.offsetHeight
    };
}

window.testIt = function() {
    var div1 = document.getElementById('div2');
    var div2 = document.getElementById('1');
    connect(div1, div2, "#0F0", 10);
}
window.testI = function(k,l) {
    var div1 = document.getElementById(k);
    var div2 = document.getElementById(l);
    connect(div1, div2, "#0F0", 1);
}



        </script>
    </head>
<body>

<h1>welcome to the first trekenerator made by me</h1>
<?php
//include "modularLogin.php";
include "../check/config.php";
include "../check/login.php";
$allPlaces=$conn->query("select* from location");
$sus=0;
while($place = mysqli_fetch_array(
    $allPlaces,MYSQLI_ASSOC)){
        $placeName=$place["name"];
        $placeId=$place["id"];
        $randx=rand(1,80);
        $randy=rand(1,80);
        echo "<div style='position: absolute;
        left: $randx%;
        top: $randy%' 
        class = '' id='$placeId'>
            <a href='http://localhost/trekenerator/trekenerator/display/info.php?thing=location&name=$placeName'>
                $placeName
            </a>
        </div>";//TO DO: add math to calc angles

        $sus++;

    }
    $allPaths=$conn->query("select* from path");
    while($path=mysqli_fetch_array(
        $allPaths,MYSQLI_ASSOC))
        {
            $start=$path["location1"];
            $end=$path["location2"];
            echo"<script>testI('$start','$end');</script>";
           // echo"<h1>wuss</h1>";
        }
    


?>

</div>
&nbsp;
</div>
<br/><br/>



&nbsp;
</div>
<?php

echo "<script>testI('1','10');</script>";
?>
<input type="button" onclick="testIt();" value="Draw Line" />



</body>
</html>