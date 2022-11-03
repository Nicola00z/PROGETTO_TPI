<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/OSMain.css">
   

<?php
    include_once("../navbar.php");
   echo "<h1> Oggetti Smarriti </h1> ";
   echo "<a href='Login/login.php'> <button type='button'> TEST </button> </a>"

?>
    <ul class="list">
        <li> <div class="ItemList"> <p style='width: 33%'>Oggetto</p> &#9;&#9;&#9;<p style='width: 33%'> Aula </p> &#9;&#9;&#9;<p style='width: 33%'> Data </p> &#9;&#9;&#9;</div> </li>
        <?php 
            include_once("items.php");
        ?>
    </ul>
    <?php 
            include_once("../footer.php");
    ?>
</body>
</html>
