<?php
echo"<center><h1><b>Remplir le formulaire ci-dessous</b></h1>";
?>

<form action="controller.php" method="post">
    <br><label for="">Jours</label>
    <br><br><input type="text" name="jours"><br><br>
    <label for="">mois</label>
    <br><br><input type="text" name="mois"><br><br>
    <label for="">annee</label>
    <br><br><input type="text" name="annee"><br><br>
    <br><input type="submit" name="btn_ok" value="valider">
</form>