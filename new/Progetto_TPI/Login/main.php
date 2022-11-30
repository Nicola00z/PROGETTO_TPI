<?php 
    
    if(!empty($_SESSION['username'])){
        require_once("personal_area.php");
    }else {
        require_once("login.php");
    }
?>