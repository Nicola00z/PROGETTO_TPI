<?php 
    include("../config.php");
    @session_start();
    $sql = "SELECT * FROM `history` WHERE Professore = ?";

    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $result= $stmt->get_result();
    

?>



<!DOCTYPE html>   
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="../stylesheet/personal_area.css">
        <?php
            include_once("../navbar.php");
        ?>
    <body>
        <?php
            echo "<h1> Ciao " . $_SESSION['username'] . "</h1>";
        ?>
        
        <div class='reservations'>
            <h2> Reservations </h2>
            <?php
                if(mysqli_num_rows($result) == 0){
                    echo "<h3> Sembra che tu non abbia mai prenotato </h3> 
                        <br>
                        <a href='../Reservations/reservation.php/'><button> PRENOTA ORA</button></a>
                        ";
                        exit;
                    
                }else{
                    ?> 
                    <div>
                        <a href="../Reservation/Reservation_FORM.php"><button id="newreserv"> make a new reservation</button></a>

                    </div>
                    <table class="PastReserv">
                    <tr>
                        <h3>Past Reservation</h3>
                    </tr>
                    <tr>
                        <td>Aula</td>
                        <td>Data</td>
                        <td>Ora</td>
                        <td>Repeat</td>
                    </tr>
                    <?php 
                    if(mysqli_num_rows($result) > 5){
                        $nrows = 5;
                    }else{
                        $nrows = mysqli_num_rows($result);
                    }
                    for($i = 0; $i < $nrows ; $i++){
                        $row = $result->fetch_assoc();
                        echo "<tr>";
                        echo "<td> ". $row['Aula'] . "</td>";
                        echo "<td> ". $row['Data'] . "</td>";
                        echo "<td> ". $row['Ora'] . "</td>";
                        echo "<td><a href='../Reservation/reservation.php/'><button> repeat </button> </a> </td>";
                        echo "</tr>";
                    }
                    ?>
                    </table>
                    <?php
                }
            ?>
        


        </div>
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
    </body>
</html>