<?php
    session_start();
    extract($_POST);
    $color = "green";
    $_SESSION['i'] = isset($_SESSION['i']) ? $_SESSION['i']+1 : 1;
    $i = $_SESSION['i'];
    if (isset($btn)) {
        $_SESSION['n'] = $corrige;
        echo $corrige;
            echo "Tra";
        if (empty($corrige)) {
            $color = "red";

        }
    
    }else{
        
    }
    var_dump($_SESSION);
    $msg = ($i > $_SESSION['n']) ? "disabled" : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Text <?= $i ?></label><br>
        <input type="text" name="corrige" id="" <?= $msg ?> style ="border:5px solid <?= $color ?>"><br>
        <input type="submit" value="OK" name="btn">
        <small><?= $msg ?></small>
    </form>
</body>
</html>