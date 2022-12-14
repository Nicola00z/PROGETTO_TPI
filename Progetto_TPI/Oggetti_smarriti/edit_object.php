<?php
    require("../config.php");

    $sql = "UPDATE oggetti SET tipo = ?, data = ?, aula = ? WHERE id = ? ";

    $aula = $connessione->real_escape_string($_GET['Aula']);
    $data = $connessione->real_escape_string($_GET['data']);
    $ogg = $connessione->real_escape_string($_GET['ogg']);
    $tipo = $connessione->real_escape_string($_GET['type']);

    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("ssss", $tipo, $data, $aula, $ogg);
    $stmt->execute();

    header("Location: ../Personal_area/personal_area.php?e=3");
    


?>