<?php 
    $server = "localhost";
    $username = "admin";
    $passwd = "NNpSSaFMjNP1Uv3Z";
    $db = "progettotpi";

    $connessione = new mysqli($server , $username , $passwd , $db);

    if($connessione->connect_error){
        die("Error during database conncetion: " . $connessione->connect_error);
    }

?>