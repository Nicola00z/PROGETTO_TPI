<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/login.css">
        
        <?php
            include_once("../navbar.php");
        ?>
        <div>
        <h1> LOGIN </h1> <br>
            <div id="FormDiv">
                <form method="POST" action='personal_area.php'>
                    <label for="name" > Nome Utente </label> <br>
                    <input type="text" id="name" name="name" placeholder="Nome Utente" class="input"> <br> <br>
                    <label for="passwd">Password </label> <br>
                    <input type="password" id="passwd" name="passwd" placeholder="Password" class="input"> <br> <br> 
                    <input type="submit" value="LOGIN" class="button">
                </form>    
                
                <a href="../index.php">
                    <button style="float: left" type="button" class="button"> BACK </button>
                </a>
            </div>
        </div>
        
    </body>
</html>
