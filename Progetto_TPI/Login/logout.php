<?php 
    session_start();
    $_SESSION['username'] = '';
    $_SESSION['level'] = '';
    session_destroy();
    header("Location: ../index.php");
?>