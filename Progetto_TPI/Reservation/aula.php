<!DOCTYPE html>
<html>

    <head>
        <title> Aula <?= $_GET['aula'] ?></title>
        <script src="index.js"></script>
        <link rel="stylesheet" href="../stylesheet/aula.css">
    <?php 
        include("../navbar.php");
    ?>  
        <div class="title">
        <h1> AULA <?= $_GET['aula']?></h1>
        </div>
        <div class="dayBar">
            <a onClick="changeDay(0,'<?= trim($_GET['aula'], " ")?>')"> Lunedi </a>
            <a onClick="changeDay(1,'<?= trim($_GET['aula'], " ")?>')"> Martedi </a>
            <a onClick="changeDay(2,'<?= trim($_GET['aula'], " ")?>')"> Mercoledi </a>
            <a onClick="changeDay(3,'<?= trim($_GET['aula'], " ")?>')"> Giovedi </a>
            <a onClick="changeDay(4,'<?= trim($_GET['aula'], " ")?>')"> Venerdi </a>
        </div>
        <table>
            <tr id="head"><td></td><td id="title"></td></tr>
            <tr><td>1Ora</td><td id="1Ora"></td></tr>
            <tr><td>2Ora</td><td id="2Ora"></td></tr>
            <tr><td>3Ora</td><td id="3Ora"></td></tr>
            <tr><td>4Ora</td><td id="4Ora"></td></tr>
            <tr><td>5Ora</td><td id="5Ora"></td></tr>
            <tr><td>6Ora</td><td id="6Ora"></td></tr>
            <tr><td>7Ora</td><td id="7Ora"></td></tr>
            <tr><td>8Ora</td><td id="8Ora"></td></tr>
        </table>
        <script>
        window.onload = function() {
            changeDay(0,'<?= trim($_GET['aula'], " ") ?>')};
        </script>
    </body>
</html>