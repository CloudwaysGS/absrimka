<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="main.css">
   <title>langue</title>
</head>
<body>
   
<div class="container">


<form action="controller.php" method="POST">
<select class="select" name="selecte" >
    
   <option name="fr" value="<?php if(!isset($_SESSION['error']['fr']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['fr']; else ''  ?>">Français</option>
   <?php if(isset($_SESSION['error']['fr'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['fr'] ?></span>
      <?php endif?>
   <option name="en" value="<?php if(!isset($_SESSION['error']['en']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['en']; else ''  ?>">Anglais</option>
   <?php if(isset($_SESSION['error']['en'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['en'] ?></span>
      <?php endif?>
   <option name="aucun" value="<?php if(!isset($_SESSION['error']['aucun']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['aucun']; else ''  ?>">Aucun</option>
   <?php if(isset($_SESSION['error']['aucun'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['aucun'] ?></span>
      <?php endif?>

</select>
   
<input  class="button" type="submit" name="btn_ok" value="selectionner" />
</form>

</div>


</body>
</html>