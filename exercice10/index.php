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
    <title>Document</title>
</head>
<body>

<div class="container">


    <form action="controller.php" method="post" >
    <label for="">nombre</label>
    <input type="text" name="n" value="<?php if(!isset($_SESSION['error']['n']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['n']; else ''?>">
    <?php if(isset($_SESSION['error']['n'])):?>
        <span style="color:red"><?php echo $_SESSION['error']['n'] ?></span>
      <?php endif?>
      
    <input class="button" type="submit" name="btn_ok" value="valider">

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