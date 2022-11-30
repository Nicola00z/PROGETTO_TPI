<?php 
    
    $_SESSION['username'] = '';
    $_SESSION['level'] = '';
    session_destroy();
    header("Location: ../index.php");
?>