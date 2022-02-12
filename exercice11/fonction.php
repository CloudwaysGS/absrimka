<?php


function validNombre($nbre,string $key,array &$arrError):void
{
    if(estVide($nbre))
    {
        $arrError[$key]="saisir une valeur";
    }
    if(estNombre($nbre))
    {
        if($nbre<20)
        {
            $arrError[$key]="saisir un nombre superieur à 20";
        }
        
    }
    else
    {
        $arrError[$key]="saisir un nombre";
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