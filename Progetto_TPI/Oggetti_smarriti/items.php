<?php 
    include("../config.php");
    @session_start();
    $sql = "SELECT *FROM oggetti";

    $result = $connessione->query($sql);


    if($result->num_rows>0){

        while($row = $result->fetch_assoc()){
            if(!empty($_SESSION['username'])){
                if($_SESSION['level'] >= 2){ // riga con possibilità di modifica dovuta al livello dell'account
                    echo" 
                    
                    <li> <div class='ItemList'> <p style='width: 20%'>" . $row['tipo'] . "</p> <p style='width: 20%'>" . $row['aula'] . "</p><p style='width: 20%'>" . $row['data'] . "</p> <a href='modify_file.php?id=".$row['id']."&aula=".$row['aula']."'><div style='width:20% margin-top:4%'><i class='fa-solid fa-pen-to-square fa-2xl' style='margin-top: 70%;'></i></div> </a></div> </li>
                    
                    ";
                }else{ // riga normale senza possibilità di modifica
                
                    echo "
                    <li> <div class='ItemList'> <p style='width: 20%'>" . $row['tipo'] . "</p> &#9;&#9;&#9;<p style='width: 20%'>" . $row['aula'] . "</p> &#9;&#9;&#9;<p style='width: 20%'>" . $row['data'] . "</p> &#9;&#9;&#9;</div> </li>";
                      
                }
            }else{
                
                echo "
                <li> <div class='ItemList'> <p style='width: 20%'>" . $row['tipo'] . "</p> &#9;&#9;&#9;<p style='width: 20%'>" . $row['aula'] . "</p> &#9;&#9;&#9;<p style='width: 20%'>" . $row['data'] . "</p> &#9;&#9;&#9;</div> </li>";
                  
            }
        }
    }
  
        
?>