<?php
    require("../config.php");

    $sql="SELECT * FROM oggetti";

    $result = $connessione->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>    
        <script src="index.js"></script>
        <?php 
            include("../navbar.php");
        ?>
            <h1> Modifica Oggetto</h1>
            <br>
            <form method="GET" action="edit_object.php" id="objinfo">
                <label for="ogg"> Oggetto: </label> <br>
                <select name="ogg" form="objinfo" id="ogg">
                    <?php
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."'> ". $row['id'] . " - ". $row['tipo'] ." </option>";
                        }
                    ?>
                </select> <br>
                <label for="type"> Oggetto </label> <br>
                <input type="text" id="type" name="type"> <br>
                <label for="aula"> Aula </label> <br>
                <select name="Aula" form="objinfo" id="aula">
                    <?php
                        $sql = "SELECT * FROM aule";

                        $result = $connessione->query($sql);

                        while($row = $result->fetch_assoc()){
                            echo"<option value='". $row['Codice']."'> ".$row['Codice']."</option>";
                        }
                    ?>
                </select>
                <label for="data"> Data </label> <br>
                <input id="data" name="data" type="date"> <br>
            <input type="submit" value="MODIFICA">
            </form>
            <form id="delete" action="delete.php" method="GET">
                <label for="id"> Oggetto da eliminare</label>
                <select name="id" form="delete" id="id">
                    <?php
                        $sql="SELECT * FROM oggetti";

                        $result = $connessione->query($sql);
                        
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."'> ". $row['id'] . " - ". $row['tipo'] ." </option>";
                        }
                    ?>
                </select> 
                <input type="submit" value="Elimina">
            </form>
            <script>
             window.onload = function() {
                setData();
             }
        </script>
    </body>
</html>