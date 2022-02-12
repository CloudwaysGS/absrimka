<?php
include_once("fonction.php");
if(isset($_POST['btn_ok']))
{
    $a=$_POST['nbre'];
    $arrError=[];
    validNombre($a,"nbre",$arrError);
    if(count($arrError)==0)
    {
        multiplication($a);
    }
    else
    {
        
        header('location:index.php?ok'); 
        var_dump($tab);
    }

}
else
{
    header('location:index.php');
    exit();
}



?>