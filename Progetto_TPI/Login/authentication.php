<?php
    
    include_once("../config.php");
    

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    
    
    if($username !== null){ // Guardo se l'input dell'utente è stato settato
        $stmt = $connessione->prepare("SELECT * FROM `login` WHERE username =?");

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result= $stmt->get_result();
        $row = $result->fetch_assoc();
        session_start();
        
        if(mysqli_num_rows($result) != 0){ // guardo se risulta un username associato
            if(password_verify($password, $row['password'])){ // controllo la password inserita
                
                $_SESSION['userID'] = $row['id'];
                $_SESSION['start'] = 1;
                $_SESSION['username'] = $username;
                $_SESSION['passwd'] = $password;
                $_SESSION['level'] = $row['level'];

                include("../Personal_area/personal_area.php"); // includo l'area personale
            }else{
                $_SESSION['error'] = 2;
                header("Location: ./main.php"); // ritorna password sbagliata
                exit;
            }  
        }else{
            $_SESSION['error'] = 1;
            header("Location: ./main.php"); // ritorna username non trovato
            exit;
        }
        
        
    }
    
?>