<?php
    @session_start();
    if(empty($_SESSION['username'])){
        header("Location: ../login/main.php");
    }
?>
<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/login.css">
        
        <?php
            include_once("../navbar.php");
        ?>
        <div>
        <h1> REGISTER </h1> <br>
            <?php
                @session_start();
                
                if(isset($_SESSION['regerr'])){
                    echo "<div class='errordiv'> ";
                    switch($_SESSION['regerr']){
                        case 1: 
                            echo "<p> Password non corrispondenti </p>";
                            unset($_SESSION['regerr']);
                            break;
                        case 2:
                            echo "<p> Nome utente già in uso </p>";
                            unset($_SESSION['regerr']);
                            break;
                    }
                    echo "</div>";
                }
            ?>
            <div id="FormDiv">
                <form method="POST" action='registration.php' id="register">
                    <label for="name" > Nome Utente </label> <br>
                    <input type="text" id="name" name="name" placeholder="Nome Utente" class="input"> <br> <br>
                    <label for="passwd">Password </label> <br>
                    <input type="password" id="passwd" name="passwd" placeholder="Password" class="input"> <br> <br> 
                    <label for="passwdconf">Password </label> <br>
                    <input type="password" id="passwdconf" name="passwdconf" placeholder="Password" class="input"> <br> <br> 
                    <label for="level">Select priviledges</label>
                    <select name="level" id="level" form="register">
                        <option value="1">Reservation</option>
                        <option value="2">Oggetti Smarriti</option>
                        <option value="3">Tutto</option>
                    </select> <br> <br> 
                    <input type="submit" value="CREATE ACCOUNT" class="button">
                </form>    
            </div>
            <?php 
                
            ?>
        </div>  
    </body>
</html>