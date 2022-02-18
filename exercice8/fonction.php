<?php

function validnombre($nbre,string $key,array &$arrError ):void
{
   if(estVide($nbre))
   {
       $arrError[$key]="Veullez saisir une valeur";
   }
   else
   {
       if(!estNombre($nbre))
       {
           $arrError[$key]="Veullez saisir un nombre";
       }
       else
       {
           if($nbre<0)
           {
            $arrError[$key]="Veullez saisir un nombre positif";
           }
       }
   }
   

}

function estNombre($nbre):bool{
   return is_numeric($nbre); 
}
function estVide($nbre):bool{    
return empty($nbre); 
}
   function nombre($n)
   {
       
       for($i = 1 ; $i <= $n ; $i++)
       {
           echo "<input name='input' $i++  />$i<br><br>";
       }
       
   }
