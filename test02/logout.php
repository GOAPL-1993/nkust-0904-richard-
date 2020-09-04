<?php 
    session_start();
    session_destroy();
    header("Location: test02.php");
    exit;
?>