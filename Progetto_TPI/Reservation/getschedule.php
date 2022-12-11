<?php
    include("../config.php");
    

    $tables = array(
        "orario_lunedi",
        "orario_martedi",
        "orario_mercoledi",
        "orario_giovedi",
        "orario_venerdi"
    );
    
    $aula = $_REQUEST["aula"];
    $out = "";
    $q = $_REQUEST["q"];
    $sql = "SELECT * FROM " . $tables[$q] ." WHERE Aula = '". $aula . "'";
    $result = $connessione->query($sql);
    while($row = $result->fetch_assoc()){
        for($x = 1; $x <= 8; $x++){
            $out .= $row[$x."Ora"];
            $out .= ",";
        }
    }
    
    echo $out;
?>