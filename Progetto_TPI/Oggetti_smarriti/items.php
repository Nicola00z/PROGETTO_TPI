<?php 
    include("../config.php");
    @session_start();
    $sql = "SELECT *FROM oggetti";

    $result = $connessione->query($sql);


    if($result->num_rows>0){

        while($row = $result->fetch_assoc()){
            if(!empty($_SESSION['username'])){
                if($_SESSION['level'] >= 2){
                    echo"
                    
                    <li> <div class='ItemList'> <p style='width: 30%'>" . $row['tipo'] . "</p> <p style='width: 30%'>" . $row['aula'] . "</p><p style='width: 30%'>" . $row['data'] . "</p> <a href='modify_file.php?id=".$row['id']."&aula=".$row['aula']."'><div style='width:10% margin-top:4%'><i class='fa-solid fa-pen-to-square fa-2xl' style='margin-top: 70%;'></i></div> </a></div> </li>
                    
                    ";
                }else{
                
                    echo "
                    <li> <div class='ItemList'> <p style='width: 33%'>" . $row['tipo'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['aula'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['data'] . "</p> &#9;&#9;&#9;</div> </li>";
                      
                }
            }else{
                
                echo "
                <li> <div class='ItemList'> <p style='width: 33%'>" . $row['tipo'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['aula'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['data'] . "</p> &#9;&#9;&#9;</div> </li>";
                  
            }
        }
    }
  
        
?>