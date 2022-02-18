<?php
include_once("fonction.php");
session_start();


if(isset($_POST["btn_ok"]))
{
    $_SESSION['post']=$_POST;
    $premier=[];
    $inferieur=[];
    $superieur=[];
    $tab=[];
    $val=$_POST["n"];
    
    validNombre($val,"n",$tab);
    if(count($tab)==0)
    {
        $i=0;$k=2;$somme=0;
        while($k<=$val)
        {
            if(premier($k))
            {
                $premier[$i]=$k;
                $somme=$somme+$premier[$i];
                $i++;
            }
            $k++;
        }
        $l=0;
        while($l<count($premier))
        {
            echo  "<br>$premier[$l] ";
            echo "<br>";
            $l++;

        }

        $moy=$somme/count($premier);

        echo "La moyenne est : $moy <br>";

        $m=1; $j=0 ; $f=0;
        echo"Les inferieurs sont ";
        while($m<=$val)
        {
            if($m<$moy)
            {
                $inferieur[$j]=$m;

                echo  "<br>$inferieur[$j] ";

                echo" ";

                echo"<br>";

                $j++;

            }
            else
            {
                $superieur[$f]=$m;
                $f++;
            }
            $m++;
        }
        $l=0;
        echo"Les superieurs sont : <br>";
        while($l<count($superieur))
        {
            echo  "<br>$superieur[$l] ";
            echo "<br>";
            $l++;

        }

        

    }
    else
    {
        $_SESSION['error']=$tab;
        header("location:index.php");
        exit();
        var_dump($tab);
    }

}
else
{
    header("location:indexa.php");
    exit();
}





?>