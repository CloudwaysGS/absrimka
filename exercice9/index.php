<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Multiplication</title>
</head>
<body>
    
<div class="container">


    <form action="controller.php" method="post">
   
   <label for="">Saisir un nombre:</label>
    <input type="text" name="nbre" value="<?php if(!isset($_SESSION['error']['nbre']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nbre']; else ''?>">
    <?php if(isset($_SESSION['error']['nbre'])):?>
    <span style="color:red"><?php echo $_SESSION['error']['nbre'] ?></span>
    <?php endif?>
    <br><br>
    <input class="button" type="submit" name="btn_ok" value="ok">
    </form>


</div>

</body>
</html>

<?php 
if(isset($_SESSION['error']))
{
    unset($_SESSION['error']);
}

?>
    

    
