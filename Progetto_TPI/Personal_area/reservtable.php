<?php
  include("../config.php");
  @session_start();
  $sql = "SELECT Aula, Data, Ora, Username FROM `history`  INNER JOIN login ON history.AccID = login.ID WHERE Username = ?";

  $stmt = $connessione->prepare($sql);
  $stmt->bind_param("s", $_SESSION['username']);
  $stmt->execute();
  $result= $stmt->get_result();
  
?>


<div class='reservations'>
            <h2> Reservations </h2>
            <?php
                if(mysqli_num_rows($result) == 0){
                    echo "<h3> Sembra che tu non abbia mai prenotato </h3> 
                        <br>
                        <a href='../Reservation/Reservation_FORM.php'><button> PRENOTA ORA</button></a>
                        ";
                        exit;
                    
                }else{
                    ?> 
                    <div>
                        <a href="../Reservation/Reservation_FORM.php"><button id="newreserv"> make a new reservation</button></a>

                    </div>
                    <table class="PastReserv" border=1 frame=void rules=row>
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
                        echo "<td><a href='../Reservation/Reservation_FORM.php?Aula=". $row['Aula'] . "&ora=". $row['Ora']."'><button> repeat </button> </a> </td>";
                        echo "</tr>";
                    }
                    ?>
                    </table>
                    <?php
                }
            ?>
        


        </div>