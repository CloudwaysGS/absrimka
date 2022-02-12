<?php

include_once("fonction.php");
if(isset($_POST['btn_ok']))
{
    $a=$_POST['selecte'];
    $arrError=[];
    
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
    header('location:index.php');
    exit();
}



?>