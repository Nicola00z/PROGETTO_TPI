<?php 
    $server = "localhost";
    $username = "admin";
    $passwd = "admin_root123";
    $db = "progettotpi";

    $connessione = new mysqli($server , $username , $passwd , $db);

    if($connessione === false){
        die("Error during database conncetion: " . $connessione->connect_error);
    }

?>