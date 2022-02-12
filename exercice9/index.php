
<form action="controller.php" method="post">
        Entrer un nombre positif:
                <label for="">nombre:</label>
            <input type="text" name="nbre">
            <br><br>
            <input type="submit" name="btn_ok" value="ok">
            
    </form>
    <?php 
    if(isset($_GET['ok'])){

        echo "<p style=color:red;>Veuillez renseigner le champ</p>";
    }
   
   
   
?>
