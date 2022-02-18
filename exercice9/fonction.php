

<?php


function validNombre($nbre,string $key,array &$arrError ):void
 {
    if(estVide($nbre))
    {
        $arrError[$key]="Veullez saisir une valeur";
    }
    else
    {
        if(!estNombre($nbre) or $nbre<0)
        {
            $arrError[$key]="Veullez saisir un nombre positif";
        }
    }
 }


   function estNombre($nbre):bool
   {
       return is_numeric($nbre); 
   }

   function estVide($nbre):bool
   {    
     return empty($nbre);
   }
    

    function multiplication($nbre)
    
     {
        for($i=1; $i<=10; $i++)
        {
         $p= $nbre * $i;
         echo" $nbre X $i = $p<br>";
        }
     
    }
    
    
    ?>

