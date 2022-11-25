<?php 
    include("../config.php");

    $sql = "SELECT * FROM aule order by substring(Codice, 2, 2) ";

    $result = $connessione->query($sql);





    if($result->num_rows>0){
        $current_level= 5;
        $count = 0;
        
        while($row = $result->fetch_assoc()){
            $piano = substr($row['Codice'], 1, 1);
            if($piano != $current_level){
                $count++;
                $current_level = $piano;
                
                
                if($count != 1){
                    echo "</div> <div";
                }
                echo "<div class='level'> <h2>" . (($current_level==0)?'Piano terra': $current_level . "° piano"). " </h2> ";
            }
            
            echo "
            <li> <a href='aula.php' ><div class='aule'> <p> " . $row['Codice'] . " </p> </div> </a> </li>";
        
        }
    }
  
        
?>