<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/OSMain.css">
    <script src="https://kit.fontawesome.com/e4dd0c0f42.js" crossorigin="anonymous"></script> <!-- importazione delle icone -->

<?php
    include_once("../navbar.php");
   echo "<h1> Oggetti Smarriti </h1> ";

?>
    <ul class="list">
       
        <?php 
        if(!empty($_SESSION['username'])){
        if($_SESSION['level'] >= 2){ // intestazione della tabella
            echo "<li> <div class='ItemList'> <p style='width: 30%'>Oggetto</p><p style='width: 30%'> Aula </p><p style='width: 30%'> Data </p> <div style='width:10%'><p>Modifica</p></div></div> </li>";

        }else{
            echo "<li> <div class='ItemList'> <p style='width: 33%'>Oggetto</p><p style='width: 33%'> Aula </p><p style='width: 33%'> Data </p> </div> </li>";
        }
    }else{
        echo "<li> <div class='ItemList'> <p style='width: 33%'>Oggetto</p><p style='width: 33%'> Aula </p><p style='width: 33%'> Data </p> </div> </li>";
    }
            include_once("items.php");
        ?>
    </ul>
</body>
</html>
