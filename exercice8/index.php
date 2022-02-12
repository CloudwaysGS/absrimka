<?php
echo"<center><h1><b>Saisir un nombre:</b></h1>";
?>
<form action="controller.php" method="post">
    <label for="">nombre</label>
    <input type="text" name="n">
    <input type="submit" name="btn_ok" value="valider">
    <?php
        if(isset($_GET['ok'])){

            echo "<p style=color:red;>Veuillez renseigner le champ</p>";
        }
    ?>





</form>