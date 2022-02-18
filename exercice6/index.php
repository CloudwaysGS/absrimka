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

    <form action="controller.php" method="post">
        <label for="">Entrer a</label>
        <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> 
        <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
        <?php endif?>
        <br>

        <label for="">Entrer b</label>
        <input type="text" name="b" id="" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>" >
        <?php if(isset($_SESSION['error']['b'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
        <?php endif?>
        <br>

        <label for="">Entrer c</label>
      <input type="text" name="c" id="" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>">
        <?php if(isset($_SESSION['error']['c'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
        <?php endif?>
       <br>

      <input class="button" type="submit" name="btn_ok" id="" value="ok">
    </form>
</div>
  
</body>
</html>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>