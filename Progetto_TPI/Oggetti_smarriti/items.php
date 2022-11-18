<?php 
    include("../config.php");

    $sql = "SELECT *FROM oggetti";

    $result = $connessione->query($sql);


    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "
            <li> <div class='ItemList'> <p style='width: 33%'>" . $row['tipo'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['aula'] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $row['data'] . "</p> &#9;&#9;&#9;</div> </li>";
        
        }
    }
  
        
?>