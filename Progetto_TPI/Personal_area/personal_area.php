<?php 
    include("../config.php");
    @session_start();
    $sql = "SELECT Aula, Data, Ora, Username FROM `history`  INNER JOIN login ON history.AccID = login.ID WHERE Username = ?";

    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $result= $stmt->get_result();
    

?>



<!DOCTYPE html>   
<html>
    <head>
        <title> Personal area </title>
        <link rel="stylesheet" href="../stylesheet/personal_area.css">
        <script src="index.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <?php
            include_once("../navbar.php");
        ?>
    <body>
        <?php
            echo "<h1> Ciao " . $_SESSION['username'] . "</h1>";
        ?>
        <div id="notific">
            <span></span>
        </div>
        <?php
            switch($_SESSION['level']){
                case 1: include("reservtable.php");break;
                case 2: include("OStable.php");break;
                case 3: echo "<div class='tables'>";include("reservtable.php"); include("OStable.php"); echo"</div>"; include("addUser.php");
            }
        ?>
        
        

        <!-- <?php
            //$reserv = "<div class='reservations'><a href='../reservation'><button> Reservation </button></a></div>";
           // $OS = "<div class='OggSmarriti'><a href='../Oggetti_Smarriti'><button> Oggetti Smarriti </button></a></div>";
            
            // switch($_SESSION['level']){
            //     case 1 :
            //         echo $reserv;
            //     case 2 :
            //         echo $OS;
            //     case 3 :
            //         echo $reserv;
            //         echo $OS;
            //         echo "<div class='creat'><a href='register.php'><button> Crea account </button></a></div>";
            // }



        ?> -->
        <script>
             window.onload = function() {
                notification();
             }
        </script>
    </body>
</html>