<?php  
    require("../config.php");

    $sql = "SELECT * FROM oggetti LIMIT 5";

    $result = $connessione->query($sql);

?>

<div class="OStable">
    <table>
        <tr> <h3> Ultimi oggetti trovati</h3></tr>
        <table class="newItems" border=1 frame=void rules=row>
        <tr> <td> Tipo </td> <td> Data </td> <td> Classe </td></tr>
        <?php
            while($row = $result->fetch_assoc()){
                echo"<tr> <td> ". $row['tipo'] ."</td><td> " . $row['data'] . "</td> <td>" . $row['aula'] . "</td>";
            }
        ?>
        </table>
        <tr> <a href="../Oggetti_smarriti/new_item.php"><h4> Aggiungi oggetto </h4></a></tr>
        <tr> <a href="../Oggetti_smarriti/main.php"><h4> Modifica o Elimina oggetti </h4></a></tr>
    </table>
</div>
