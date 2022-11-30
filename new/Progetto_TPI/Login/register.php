<?php
            include_once("config.php");
            
            $username = $connessione->real_escape_string($_POST['name']);
            $password = $connessione->real_escape_string($_POST['passwd']);

            $sql = "INSERT INTO login (username, password) VALUES ('$username' , '$password')";

            if($connessione->query($sql) === true){
                echo "Registrazione effettuata con successo " ;  
            }else{
                echo "Errore durante la registrazione $sql. " . $connessione->error;
            }
          
?>