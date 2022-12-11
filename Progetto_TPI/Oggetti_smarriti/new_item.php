<?php
    require("../config.php");

    $sql = "SELECT * FROM aule";

    $result = $connessione->query($sql);

?>

<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/login.css">
        
        <?php
            echo "
            <link rel='stylesheet' href='http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/navbar.css'>
            </head>
            <body>
            <div class='navbar'>
            
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/index.php'>Home</a>
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Oggetti_smarriti/main.php'>Oggetti smarriti</a>
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php'> Aule e Prenotazioni </a>
            <a href='#contact'>Contact</a>
            <a class='right' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Login/main.php'>Login</a>
          </div>"
        ?>
        <div>
            <h1> Pubblica nuovo oggetto smarrito </h1> <br>
            <div id="FormDiv">
                <form method="GET" action='authentication.php'>
                    <label for="TypeIN">Tipo di oggetto</label>
                    <input type="text" id="TypeIN" class="input" name="Oggetto">
                    <label for="DateIN">Data del ritrovamento </label>
                    <input type="date" id="DateIN" class="input" name="Date">
                    <label for="AulaIN"> Aula </label>
                    <select name="Aula" id="Aula" form="reserv">
                    <?php
                        while($row = $result->fetch_assoc()){
                            echo "<option value='" . $row['Codice'] . "'>" . $row['Codice'] . "</option>";
                        }
                    ?>
                    </select> <br> <br>
                    <input type="submit" value="INVIO" class="button">
                </form>    
            </div>
            <?php 
                
            ?>
        </div>  
    </body>
</html>