<?php
    
    include_once("../config.php");

    if (isset($_SESSION['session_id'])) {
        header('Location: dashboard.php');
        exit;
    }

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    
    if($username !== null){
        $sql = "SELECT * FROM `login` WHERE Username = 'admin' AND Password = 'admin';
        
        $result = $connessione->query($sql);
        if(mysqli_num_rows($result){
            echo "Username o password invalidi";
        }else{
            header("personal_area.php");
        }
        
    }
    
    
    
?>