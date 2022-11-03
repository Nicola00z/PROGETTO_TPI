<?php
    session_start();
    include_once("../config.php");

    if (isset($_SESSION['session_id'])) {
        header('Location: dashboard.php');
        exit;
    }

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    $sql = "SELECT * FROM login WHERE username = $username AND password = $password";

?>