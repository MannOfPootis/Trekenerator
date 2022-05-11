<html>
    <head>
        <link rel="stylesheet" href="../trekstil.css">
        <style>

            
        </style> 
        <script>
            function connect(div1, div2, color, thickness,name) {//this javascript code is from  the web note to make it in php and ore use this:https://web.archive.org/web/20130108020533/http://blog.stephenboak.com:80/2012/06/15/d3-flow-vis-tutorial.html
    var off1 = getOffset(div1);//the code was shamelessly nicked from https://thewebdev.info/2021/09/12/how-to-draw-a-line-between-two-divs-with-javascript/
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
    var htmlLine = "<a  href=http://localhost/trekenerator/trekenerator/display/info.php?thing=path&ID="+ name+" style='padding:0px; margin:0px; height:" + thickness +
     "px; background-color:" + color +
      "; line-height:1px; position:absolute; left:" + cx + 
      "px; top:" + cy + 
      "px; width:" + length +"px; -moz-transform:rotate(" + angle + "deg);-webkit-transform:rotate(" + angle + "deg); -o-transform:rotate(" + angle + "deg); -ms-transform:rotate(" + angle + "deg); transform:rotate(" + angle + "deg);' ></a>";
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

/*window.testIt = function() {
    var div1 = document.getElementById('div2');
    var div2 = document.getElementById('1');
    connect(div1, div2, "rgba(247, 247, 247, 0.562)", 10);
}*/
window.testI = function(k,l,name) {
    var div1 = document.getElementById(k);
    var div2 = document.getElementById(l);
    connect(div1, div2, "rgba(247, 247, 247, 0.562)", 10,name);
}



        </script>
    </head>
<body>

<?php
include "../nav.php";?>
<div class="grassyBackground">
<?php
//include "modularLogin.php";
include "../check/config.php";

$allPlaces=$conn->query("select* from location");
while($place = mysqli_fetch_array(
    $allPlaces,MYSQLI_ASSOC)){
        $placeName=$place["name"];
        $placeId=$place["id"];
        $randx=rand(10,80);
        $randy=rand(10,80);
        echo "<div style='position: absolute;
        left: $randx%;
        top: $randy%' 
         id='$placeId'><p>
            <a href='http://localhost/trekenerator/trekenerator/display/info.php?thing=location&ID=$placeId'>
                $placeName
            </a></p>
        </div>";//TO DO: add math to calc angles
        $sus++;
    }
?>
</div>
</div>
<?php
$allPaths=$conn->query("select* from path");
while($path=mysqli_fetch_array(
    $allPaths,MYSQLI_ASSOC))
    {
        $start=$path["location1"];
        $end=$path["location2"];
        $ID = $path["id"];
        echo"<script>testI('$start','$end',$ID);</script>";
    }?>
</body>
</html>