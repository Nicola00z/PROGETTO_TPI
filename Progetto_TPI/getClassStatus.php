<?php
    require("config.php");
    $tables = array(
        "orario_lunedi",
        "orario_martedi",
        "orario_mercoledi",
        "orario_giovedi",
        "orario_venerdi"
    );

    

    $aula = $_REQUEST['piano'];
    $q = $_REQUEST['q'];
    $ora = $_REQUEST['ora'];
    $out = "";
    if($ora == 10){
        exit();
    }

    $ora = $ora."Ora";
    $sql = "SELECT Aula, ".$ora." FROM ". $tables[$q - 1]. "";
    
    $count = 0;
    $result = $connessione->query($sql);
    
   while($row = $result->fetch_assoc()){
    if($row['Aula'][1] == $aula){
        if($count >= 1){
            $out .= ";";
        }
        if($row[$ora] == " "){
            $out .= $row['Aula'] . ", true";
            $count = 1;
        }else{
            $out .= $row['Aula'] . ", false";
            $count = 1;
        }
        
    }
   }
   echo $out;
   
?>