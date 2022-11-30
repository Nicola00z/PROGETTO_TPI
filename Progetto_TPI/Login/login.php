

<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/login.css">
        
        <?php
            echo "
            <link rel='stylesheet' href='http://localhost/PROGETTO_TPI/Progetto_TPI/stylesheet/navbar.css'>
            </head>
            <body>
            <div class='navbar'>
            
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/index.php'>Home</a>
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Oggetti_smarriti/main.php'>Oggetti smarriti</a>
            <a href='http://localhost/PROGETTO_TPI/Progetto_TPI/Reservation/main.php'> Aule e Prenotazioni </a>
            <a href='#contact'>Contact</a>
            <a class='right' href='http://localhost/PROGETTO_TPI/Progetto_TPI/Login/main.php'>Login</a>
          </div>"
        ?>
        <div>
            <h1> LOGIN </h1> <br>
            
                <?php if(isset($_SESSION['error'])){
                    echo "<div class='errordiv'> ";
                    switch($_SESSION['error']){
                        case 1: echo "<p> Nome utente non trovato </p>";
                                unset($_SESSION['error']);
                                break;
                        case 2: echo "<p> Passowrd errata</p>";
                                unset($_SESSION['error']);
                                break;
                    } 
                    echo "</div>";
                } 
            ?>
            <div id="FormDiv">
                <form method="POST" action='authentication.php'>
                    <label for="name" > Nome Utente </label> <br>
                    <input type="text" id="name" name="name" placeholder="Nome Utente" class="input"> <br> <br>
                    <label for="passwd">Password </label> <br>
                    <input type="password" id="passwd" name="passwd" placeholder="Password" class="input"> <br> <br> 
                    <input type="submit" value="LOGIN" class="button">
                </form>    
            </div>
            <?php 
                
            ?>
        </div>  
    </body>
</html>