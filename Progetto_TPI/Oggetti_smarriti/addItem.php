<?php


    require("../config.php");

    $aula = $connessione->real_escape_string($_GET['Aula']);
    $data = $connessione->real_escape_string($_GET['Date']);
    $tipo = $connessione->real_escape_string($_GET['Oggetto']);
    $details = $connessione->real_escape_string($_GET['details']);

    $sql = "INSERT INTO oggetti(tipo, data, aula, details) VALUES (?, ?, ?, ?)";

    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("ssss", $tipo, $data, $aula, $details );
    $stmt->execute();
    header("Location: ../Personal_area/personal_area.php?e=1");
?>