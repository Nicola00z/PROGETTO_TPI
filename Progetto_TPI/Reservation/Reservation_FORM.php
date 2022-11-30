<!DOCTYPE html>

<html>
    <head>
        <title>Make a reservation</title>
        <link rel="stylesheet" href="../stylesheet/reservation.css">
    </head>
    <body>
        <?php
            include("../navbar.php")
        ?>
        <h1>Make a reservation</h1>
        <form mehtod="GET" action="reservation.php" id="reserv">
            <label for="Data">Giorno della prenotazione</label>
            <br> <br>
            <input id="Data" type="date" name="data" placeholder="Inserisci la data">
            <br> <br>
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
            <input type="submit" value="submit" class="button">
            
        </form>
    </body>
</html>