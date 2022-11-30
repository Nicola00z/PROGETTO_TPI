<?php
    
    include_once("../config.php");
    

    if (isset($_SESSION['session_id'])) {
        header('Location: dashboard.php');
        exit;
    }

    $username = $connessione->real_escape_string($_POST['name']);
    $password = $connessione->real_escape_string($_POST['passwd']);
    
    
    if($username !== null){
        $stmt = $connessione->prepare("SELECT * FROM `login` WHERE username =?");

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result= $stmt->get_result();
        $row = $result->fetch_assoc();
        session_start();
        
        if(mysqli_num_rows($result) != 0){
            if(password_verify($password, $row['password'])){
                
                $_SESSION['start'] = 1;
                $_SESSION['username'] = $username;
                $_SESSION['passwd'] = $password;
                $_SESSION['level'] = $row['level'];

                include("../Personal_area/personal_area.php");
            }else{
                $_SESSION['error'] = 2;
                header("Location: ./main.php");
                exit;
            }  
        }else{
            $_SESSION['error'] = 1;
            header("Location: ./main.php");
            exit;
        }
        
        
    }
    
?>