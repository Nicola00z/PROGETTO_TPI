<?php
    include("../config.php");

    $id = $connessione->real_escape_string($_GET['id']);

    $sql = "DELETE FROM oggetti WHERE id = ?";

    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: ../Personal_area/personal_area.php?e=4");
?>