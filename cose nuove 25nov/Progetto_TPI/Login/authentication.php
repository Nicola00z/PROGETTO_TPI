<?php
    
    include_once("../config.php");
    

    if (isset($_SESSION['session_id'])) {
        header('Location: dashboard.php');
        exit;
    }

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    
    
    if($username !== null){
        $sql = "SELECT * FROM `login` WHERE Username ='" . $username . "' AND Password = '" . $password . "'";
        
        $result = $connessione->query($sql);
        if(mysqli_num_rows($result) == 0){
            echo "Username o password invalidi";
        }else{
            
            session_start();
            $row = mysqli_fetch_row($result);
            $_SESSION['start'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['passwd'] = $password;
            $_SESSION['level'] = $row[3];

            include("personal_area.php");
        }
        
    }
    
?>