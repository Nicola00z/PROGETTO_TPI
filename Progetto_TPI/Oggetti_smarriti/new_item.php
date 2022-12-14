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
            require("../navbar.php");
        ?>
        <div>
            <h1> Pubblica nuovo oggetto smarrito </h1> <br>
            <div id="FormDiv">
                <form method="GET" action='addItem.php' id="ogg">
                    <label for="TypeIN">Tipo di oggetto</label> <br>
                    <input type="text" id="TypeIN" class="input" name="Oggetto"> <br>
                    <label for="DateIN">Data del ritrovamento </label> <br>
                    <input type="date" id="DateIN" class="input" name="Date"> <br>
                    <label for="AulaIN"> Aula </label> <br>
                    <select name="Aula" id="Aula" form="ogg"> <br>
                    <?php
                        while($row = $result->fetch_assoc()){
                            echo "<option value='" . $row['Codice'] . "'>" . $row['Codice'] . "</option>";
                        }
                    ?>
                    </select> <br> <br>
                    <label for="details"> dettagli dell'oggetto </label>
                    <input type="text" id="details" name="details" class="input">
                    <input type="submit" value="INVIO" class="button">
                </form>    
            </div>
            <?php 
                
            ?>
        </div>  
    </body>
</html>