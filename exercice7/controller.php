<?php

include_once("fonction1.php");

if(isset($_POST["btn_ok"]))
{
    $jour=$_POST['jours'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    $tab=[];
    jourvalide($jour,"jours",$tab);
    moisvalide($mois,"mois",$tab);
    anneevalide($annee,"annee",$tab);
    datevalide($jour,$mois,$annee,"jours",$tab);
    
    if(count($tab)==0)
    {
        dateprecedent($jour,$mois,$annee);
        echo"<br>";
        datesuivante($jour,$mois,$annee);
    }
    else
    {
        var_dump($tab);
    }

}
else
{
    header("location:index.php");
    exit();
}


?>