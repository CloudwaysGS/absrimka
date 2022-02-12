<?php
function calcul($x,$y):void
{
    
    $som=$x+$y;
    $exp=$x**$y;
    $diff=$x-$y;
    $p=$x*$y;
    $mod=$x%$y;
    $div=$x/$y;
    $car=pow($x,2);
    echo"<br>Somme=".$som;
    echo"<br>Exponentielle=".$exp;
    echo"<br>Difference=".$diff;
    echo"<br>Produit=".$p;
    echo"<br>Module=".$mod;
    echo"<br>Division=".$div;
    echo"<br>Carre=".$car;

}
/*
function somme($x,$y)
{
    return $x+$y;
}
function exponentielle($x,$y)
{
    return exp($x);
}
function expo($x,$y)
{
    return exp($y);
}
function difference($x,$y)
{
    return $x-$y;
}
function produit($x,$y)
{
    return $x*$y;
}
function modulo($x,$y)
{
    return $x%$y;
}
function division($x,$y)
{
    return $x/$y;
}
function carre($x,$y)
{
    return pow($x,2);
}
*/
?>