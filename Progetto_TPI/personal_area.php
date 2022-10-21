<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
    </head>
    <body>
        <?php
            include_once("config.php");
            
            $username = $connessione->real_escape_string($_POST['name']);
            $password = $connessione->real_escape_string($_POST['passwd']);

            $sql = "INSERT INTO login (username, password) VALUES ('$username' , '$password')";

           
            
            
        ?>
    </body>
</html>