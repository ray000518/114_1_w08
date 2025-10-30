<h1>SID:C112181129<br>
    NAME:黃亭睿</h1> 
<?php 

$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $element) {
   echo "$element ";
   $total += $element;
}
echo "<br/>得分總和: ". $total. "<br/>";
print_r($scores);   // 顯示小費
echo "<br/>";
