<?php
    require("../config.php");

    $sql="SELECT * FROM oggetti";

    $result = $connessione->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>    
        <?php 
            include("../navbar.php");
        ?>
            <h1> Modifica Oggetto</h1>
            <br>
            <form method="GET" action="edit_object.php" id="objinfo">
                <label> </label>
                <select name="ogg" form="objinfo">
                    <?php
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."'> ". $row['id'] . " - ". $row['tipo'] ." </option>";
                        }
                    ?>
                </select>
                <select name="Aula" form="objinfo">
                    
                </select>
            <input type="submit" value="MODIFICA">
            </form>

</html>