<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/reservation.css">
    <title> Aule </title>

<?php
    include_once("../navbar.php");
   echo "<h1> Aule </h1> ";

?>  
    <?php 
    if(!empty($_SESSION['username'])){
        if($_SESSION['level'] == 1 || $_SESSION['level'] == 3){
            echo "<a href='reservation.php'> <button> Fai una prenotazione </button></a>"; 
        
        }
    }
    ?>
    <form method="GET" action="aula.php" target="_blank">

        <ul class="list">
            <?php 
                include_once("aule.php");
            ?>
        </ul>
    </form>
</body>
</html>
