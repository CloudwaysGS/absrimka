<?php
include_once("fonction.php");

echo($x1=rand(0,100)) ;
echo"<br>";
echo($y1=rand(0,100));
echo"<br>";
echo($x2=rand(0,100));
echo"<br>";
echo($y2=rand(0,100));
echo Distance($x1,$y1,$x2,$y2);


?>