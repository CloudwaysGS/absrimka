<?php
include_once("fonction.php");

session_start();
if(isset($_POST['btn_ok']))
{
    $n= $_POST['n'];
    $arrError=[];
    $_SESSION['post']=$_POST;
    validNombre($n,"n",$arrError);
    

    if(count($arrError)==0)
    {
        nombre($n);

    }
    else
    {
        $_SESSION['error']=$arrError;
        header("location:index.php?ok");
        //var_dump($tab);
    }

}else
    {
    header("location:index.php");
    exit();
    }

?>