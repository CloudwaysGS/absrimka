<?php
//Charge mes fonctions ou inclure
include_once("fonction.php");

    
    
  //Generer un nbre de maniere 
  //aleatoire entre 1 et 100
    $x=rand(0,100) ;
    $y=rand(0,100);
    echo "Longueur du rectangle est ".  $x."<br>";
    echo "Largeur du rectangle est ".  $y."<br>";
    calculrectangle($x,$y);
    /*
    $p=perimetre($x,$y);
    $s=surface($x,$y);
   
    $d=diagonale($x,$y);
    */

  
    
?>




   