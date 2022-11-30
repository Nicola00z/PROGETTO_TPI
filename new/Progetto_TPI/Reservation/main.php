<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/reservation.css">
    <title> Aule </title>

<?php
    include_once("../navbar.php");
   echo "<h1> Aule </h1> ";

?>  
    <a href="http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/reservation.php"> <button> Fai una prenotazione </button></a>
    <ul class="list">
        <?php 
            include_once("aule.php");
        ?>
    </ul>
    <?php 
            include_once("../footer.php");
    ?>
</body>
</html>
