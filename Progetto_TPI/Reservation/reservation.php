<?php
    require("../config.php");
    session_start();
    
    $tables = array(
        "orario_lunedi",
        "orario_martedi",
        "orario_mercoledi",
        "orario_giovedi",
        "orario_venerdi"
    );

    $aula = $connessione->real_escape_string($_GET['Aula']);
    $data = $connessione->real_escape_string($_GET['data']);
    $ora = $connessione->real_escape_string($_GET['ora']);
    $id = $connessione->real_escape_string($_SESSION['userID']);


    $day = date("D", strtotime($data));
    $table;
    switch ($day){
        case "Mon": $table = $tables[0]; break;
        case "Tue": $table = $tables[1]; break;
        case "Wed": $table = $tables[2]; break;
        case "Thu": $table = $tables[3]; break;
        case "Fri": $table = $tables[4]; break;
    }

    $sql = "SELECT * FROM " . $table . " WHERE Aula = ?";
    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("s", $aula);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
        if($row[ $ora . 'Ora'] != ' '){
            header("Location: Reservation_FORM.php?e=2");
        }
    }

    $sql = "SELECT * FROM history WHERE AccID = ?";
    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("s", $_SESSION['userID']);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
        if($row['Data'] === $data && $row['Ora'] == $ora && $row['Aula'] === $aula){
            
            header("Location: Reservation_FORM.php?e=2");
        }
    }
    echo $_GET['data'];
    echo $_SESSION['userID'];
    

    $sql = "INSERT INTO history(AccID, Aula, Data, Ora) VALUES (?, ?, ?, ?) ";

    $stmt = $connessione->prepare($sql);
    $stmt-> bind_param("issi", $id, $aula, $data, $ora);
    $stmt->execute();


?>