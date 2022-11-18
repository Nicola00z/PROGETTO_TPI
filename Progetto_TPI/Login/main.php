<?php 
    session_start();
    if(!empty($_SESSION['username'])){
        require_once("../Personal_area/personal_area.php");
    }else {
        require_once("login.php");
    }
?>