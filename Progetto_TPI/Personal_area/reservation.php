<?php

include("../config.php");

$sql = "SELECT * FROM history";

$result = $connessione->query($sql);


$s = "

<div class='reservation'>
                    <a href='../reservation'><button class='btn'>  Make a reservation </button></a>
    <a href='../reservation/main.php'><button class='btn'> View class schedule </button></a>
    <div class='history'>
        <h3> Passate prenotazioni</h3>
        <ul>
            " ;
       
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $s . "<li>". $row['Data'] . " " . $row['Aula'] . " " . $row['Ora']." </li>";
    }
}

$s .
            "
            
        </ul>
    </div>
</div>";
    echo $s;
?>