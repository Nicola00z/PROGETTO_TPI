<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/OSMain.css">
   

<?php
    include_once("../navbar.php");
   echo "<h1> Oggetti Smarriti </h1> ";

?>
    <ul class="list">
        <li> <div class="ItemList"> <p style='width: 33%'>Oggetto</p><p style='width: 33%'> Aula </p><p style='width: 33%'> Data </p> </div> </li>
        <?php 
            include_once("items.php");
        ?>
    </ul>
</body>
</html>
