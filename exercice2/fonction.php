<?php
function calculrectangle(float $x,float $y):void
{
    $p=($x+$y)*2;
    $s=$x*$y;
    $d=sqrt(pow($x,2)+pow($y,2));
    echo"<br>Le perimetre du rectangle:<br>".$p;
    echo"<br>La surface du rectangle:<br>".$s;
    echo"<br>Le diametre du rectangle:".$d;

}
/*
function perimetre(int $x,int $y):int
{
    return ($x+$y)*2;

}
function surface(int $x,int $y):int
{
    return $x*$y;

}
function diagonale(int $x,int $y):float
{
    return ($x*$x+$y*$y);

}
*/

?>