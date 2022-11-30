


<?php 

    include_once("../config.php");

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    $level = $connessione->real_escape_string($_POST['level']);

    $stmt = $connessione->prepare("INSERT INTO login(username, password, level) VALUES (?, ?, ?)");

    $stmt->bind_param("ssi", $username, $passowrd, $level);

    $stmt->execute();
    
?>