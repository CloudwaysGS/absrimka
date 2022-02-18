<?php

session_start();
include_once("fonction.php");
if(isset($_POST['btn_ok']))
{
    $a=$_POST['selecte'];
    $arrError=[];
    $_SESSION['post']=$_POST;
    
   if($a=="Anglais")
    {

        english();
    }
    else
    {
        
        french();
    }

}
else
{
    $_SESSION['error']=$arrError;
    header('location:index.php');
    exit();
}



?>