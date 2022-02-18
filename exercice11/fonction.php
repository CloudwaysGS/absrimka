<?php


function validNombre($nbre,string $key,array &$tab):void
{
    if(estVide($nbre))
    {
        $tab[$key]="saisir une valeur";
    }
    if(estNombre($nbre))
    {
        if($nbre<20)
        {
            $tab[$key]="saisir un nombre superieur à 20";
        }
        
    }
    else
    {
        $tab[$key]="saisir un nombre";
    }

}

function estVide($nbre):bool
{
    return empty($nbre);
}

function estNombre($nbre):bool
{
    return is_numeric($nbre);
}


function premier($n):bool
{
    for($i=2;$i<$n;$i++)
    {
        if($n%$i==0)
        {
            return false;

        }
    }
    return true;

}
  




?>