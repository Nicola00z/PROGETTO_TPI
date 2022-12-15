<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./stylesheet/index.css">
    <link rel="stylesheet" href="./stylesheet/data.css">
    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<?php
    include_once("navbar.php");
    include_once("home.php");
?>



<script type="text/javascript">
   window.onload = function(){date(),clock()};

   function date(){
       var data = new Date();
       var giorno = data.getDay();
       var day = data.getUTCDate();
       var month = data.getUTCMonth();
       var year = data.getFullYear();

       switch (giorno){
        case 0: giorno = 'DOM'; break;
        case 1: giorno = 'LUN'; break;
        case 2: giorno = 'MAR'; break;
        case 3: giorno = 'MER'; break;
        case 4: giorno = 'GIO'; break;
        case 5: giorno = 'VEN'; break;
        case 6: giorno = 'SAB'; break;
       }

       switch (month){
        case 0: month = 'Gennaio';   break;
        case 1: month = 'Febbraio';  break;
        case 2: month = 'Marzo';     break;
        case 3: month = 'Aprile';    break;
        case 4: month = 'Maggio';    break;
        case 5: month = 'Giugno';    break;
        case 6: month = 'Luglio';    break;
        case 7: month = 'Agosto';    break;
        case 8: month = 'Settembre'; break;
        case 9: month = 'Ottobre';   break;
        case 10: month = 'Novembre'; break;
        case 11: month = 'Dicembre'; break;
       }

       if (day < 10) {
           day = "0" + day;
       }

       document.getElementById("data").innerHTML = giorno + ' ' + day + ' ' + month + ' ' + year;
       
   }

   function clock() {

       var data = new Date();
       var ora = data.getHours();
       var min = data.getMinutes();
       var sec = data.getSeconds();


       if (ora < 10) {
           ora = "0" + ora;
       }
       if (min < 10) {
           min = "0" + min;
       }
       if (sec < 10) {
           sec = "0" + sec;
       }
 
       document.getElementById("ora").innerHTML = ora + ":" + min + ":" + sec;
       setTimeout("clock()", 1000);
   }

</script>
<div class="time">
    <b><p class='date' id='data'></p>
    <p class='clock' id='ora'></p></b>
</div>


<script>
window.onload = function() {
            changeClassStatus("0")};
</script>
</body>
</html>
