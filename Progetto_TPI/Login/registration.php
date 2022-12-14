


<?php 
    session_start();
    include_once("../config.php");
    if(!($_POST['passwd'] === $_POST['passwdconf'])){
        $_SESSION['regerr'] = 1;
        header("location: ./register.php");
        exit;
    }

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    $level = $connessione->real_escape_string($_POST['level']);
    
    $stmt = $connessione->prepare("SELECT * FROM `login` WHERE username = ?"); // guardo se esiste il nome utente inserito
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) >= 1 ){
        $_SESSION['regerr'] = 2;
        header("location: ./register.php"); // ritorno sul form perchè il nome utente è gia in uso
        exit;
    }

    $stmt = $connessione->prepare("INSERT INTO login(username, password, level) VALUES (?, ?, ?)");
    $passwd =  password_hash($password, PASSWORD_DEFAULT); // creo la password criptata

    $stmt->bind_param("ssi", $username, $passwd, $level);

    $stmt->execute();
    
    header("Location: ../Personal_area/personal_area.php?e=2"); //ritorna all'area personale.
?>