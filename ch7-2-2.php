<h1>SID:C112181129<br>
    NAME:黃亭睿</h1><hr> 

<?php 

$arr = array( "color"=>"紅色", "name"=> "黃亭睿", 
              "shape"=>"Circle");

foreach($arr as $key=>$value) echo "$key~$value~<br><hr>";
echo "<br/>";
$arr["color"] = "紅色"; 
$arr["name"] = "黃亭睿";
$arr["shape"] = "Circle";
unset($arr["type"]);   

print_r($arr); echo "<br/>";

