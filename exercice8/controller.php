<?php
include_once("fonction.php");


if(isset($_POST['btn_ok']))
{
    $n= $_POST['n'];
    $arrError=[];
    validNombre($n,"n",$arrError);
    estNombre($n);

    if(count($arrError)==0)
    {
        nombre($n);

    }
    else
    {

        header("location:index.php?ok");
        var_dump($tab);
    }

}else
    {
    header("location:index.php");
    exit();
    }

?>