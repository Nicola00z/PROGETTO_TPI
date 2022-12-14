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
        <link rel="stylesheet" href="../stylesheet/OSEdit.css">
        <?php 
            include("../navbar.php");
        ?>
            <h1> Modifica Oggetti </h1>
            <br>
            
            <form method="GET" action="edit_object.php" id="objinfo">
                <table>
                    <tr><td>
                    <label for="ogg"> Oggetto da cambiare: </label></td>
                    <td> 
                    <select name="ogg" form="objinfo" id="ogg" class="input">
                        <?php
                            while($row = $result->fetch_assoc()){ // prendo tutti gli oggetti e li metto come opzione della select
                                echo "<option value='".$row['id']."'> ". $row['id'] . " - ". $row['tipo'] ." </option>";
                            }
                        ?>
                    </select> <br>
                        </td>
                        </tr>
                    <tr>
                        <td>
                    <label for="type"> Nome oggetto </label> </td>
                    <td>
                    <input type="text" id="type" name="type" > <br>
                        </td>
                        </tr>
                    <tr><td>
                    <label for="aula"> Aula </label> </td>
                    <td>
                    <select name="Aula" form="objinfo" id="aula" class="input">
                        <?php
                            $sql = "SELECT * FROM aule";

                            $result = $connessione->query($sql);

                            while($row = $result->fetch_assoc()){ // prendo tutte le aule e le metto come opzione della select
                                echo"<option value='". $row['Codice']."'> ".$row['Codice']."</option>";
                            }
                        ?>
                    </select><br> </td>
                    </tr>
                    <tr>
                        <td>
                    <label for="data"> Data </label> </td>
                    <td>
                    <input id="data" name="data" type="date" class="input"> <br>
                        </td>
                </tr>
                    
                        <td style="text-align:center; width: 100%;"></td>
                        <td><input type="submit" value="MODIFICA" class="modify" >
                        </td>
                    
                </table>
            </form>

            <form id="delete" action="delete.php" method="GET">

            <label id="id"> Oggetto da eliminare: </label>

                <select name="id" form="delete" id="sld">
                    <?php
                        $sql="SELECT * FROM oggetti";

                        $result = $connessione->query($sql);
                        
                        while($row = $result->fetch_assoc()){  // prendo tutti gli oggetti e li metto come opzione della select
                            echo "<option value='".$row['id']."'> ". $row['id'] . " - ". $row['tipo'] ." </option>";
                        }
                    ?>
                </select>
                
                <input class='modify'type="submit" style='width:5%; height:40px;margin-left: 1%' value="Elimina">

            </form>
            
            <script>
             window.onload = function() { // carico i dati di default ricevuti dall'url
                setData();
             }
        </script>
    </body>
</html>