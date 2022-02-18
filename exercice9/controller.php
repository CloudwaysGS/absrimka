<?php
include_once("fonction.php");
session_start();
if(isset($_POST['btn_ok']))
{
    $a=$_POST['nbre'];
    $arrError=[];
    $_SESSION['post']=$_POST;
    validNombre($a,"nbre",$arrError);
    if(count($arrError)==0)
    {
        multiplication($a);
    }
    else
    {
        $_SESSION['error']=$arrError;
        header('location:index.php?ok'); 
        //var_dump($tab);
    }

}
else
{
    header('location:index.php');
    exit();
}



?>