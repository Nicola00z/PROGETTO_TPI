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
            <a class="buttonDay" onClick="changeDay(0,'<?= trim($_GET['aula'], " ")?>')"> Lunedi </a>
            <a class="buttonDay" onClick="changeDay(1,'<?= trim($_GET['aula'], " ")?>')"> Martedi </a>
            <a class="buttonDay" onClick="changeDay(2,'<?= trim($_GET['aula'], " ")?>')"> Mercoledi </a>
            <a class="buttonDay" onClick="changeDay(3,'<?= trim($_GET['aula'], " ")?>')"> Giovedi </a>
            <a class="buttonDay" onClick="changeDay(4,'<?= trim($_GET['aula'], " ")?>')"> Venerdi </a>
        </div>
        <table>
        <td style="border: 1px #93aac5;background-color:#93aac5; width: 100px"></td><td id="title" style="border: 1px #93aac5; background-color:#93aac5;width: 250px;text-align:left;font-size:30px"></td>
            <tr><td>1^ ora</td><td id="1Ora" ></td></tr>
            <tr><td>2^ ora</td><td id="2Ora" ></td></tr>
            <tr><td>3^ ora</td><td id="3Ora" ></td></tr>
            <tr><td>4^ ora</td><td id="4Ora" ></td></tr>
            <tr><td>5^ ora</td><td id="5Ora" ></td></tr>
            <tr><td>6^ ora</td><td id="6Ora" ></td></tr>
            <tr><td>7^ ora</td><td id="7Ora" ></td></tr>
            <tr><td>8^ ora</td><td id="8Ora" ></td></tr>
        </table>
        <script>
        window.onload = function() {
            changeDay(0,'<?= trim($_GET['aula'], " ") ?>')};
        </script>
    </body>
</html>