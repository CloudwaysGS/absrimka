<?php
include_once("fonction.php");

session_start();
if(isset($_POST['btn_ok']))
{
    $n= $_POST['n'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($n,"n",$arrError);
    estNombre($n);

    if(count($arrError)==0)
    {
        nombre($n);

    }
    else
    {
        $_SESSION['error']=$arrError;
        header("location:index.php?ok");
        exit();
        //var_dump($tab);
    }

}else
    {
    header("location:index.php");
    exit();
    }

?>