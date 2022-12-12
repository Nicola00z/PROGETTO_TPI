<?php

    require("../config.php");
    session_start();
    if(empty($_SESSION['username'])){
        header("Location: ../login/main.php");
    }

    $sql = "SELECT * FROM aule";

    $result = $connessione->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Make a reservation</title>
        <link rel="stylesheet" href="../stylesheet/reservation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script src="index.js"></script>
    </head>
    <body>
        <?php
            include("../navbar.php")
        ?>
        <h1>Make a reservation</h1>
        <form mehtod="GET" action="Reservation_FORM.php" id="reserv" onsubmit="return checkDate(event);">
            <label for="Data">Giorno della prenotazione</label>
            <br> <br>
            <input id="Data" type="date" name="data" placeholder="Inserisci la data" min=<?php echo"'" . date("Y-m-d")."'" ?>> <br>
            <span id="dateNotSet"></span>
            <br> 
            <label> Ora della prenotazione</label>
            <br> <br>
            <select name="ora" id="ora" form="reserv">
                <option value="1">1° Ora</option>
                <option value="2">2° Ora</option>
                <option value="3">3° Ora</option>
                <option value="4">4° Ora</option>
                <option value="5">5° Ora</option>
                <option value="6">6° Ora</option>
                <option value="7">7° Ora</option>
                <option value="8">8° Ora</option>
            </select> <br> <br>  
            <label for="aula">Aula</label> <br>
            <select name="Aula" id="Aula" form="reserv">
                <?php
                    while($row = $result->fetch_assoc()){
                        echo "<option value='" . $row['Codice'] . "'>" . $row['Codice'] . "</option>";
                    }
                ?>
            </select> <br> <br>
            <input type="submit" value="submit" class="button">
            
        </form>
        <script>
             window.onload = function() {
                setValues();
             }
        </script>
    </body>
</html>