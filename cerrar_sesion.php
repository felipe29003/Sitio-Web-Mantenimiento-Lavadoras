<?php
    session_start();
    session_destroy();
    
    if (headers_sent()) {
        echo "<script>window.location.href='login.php';</script>";
    } else {
        header("Location: login.php"); 
        exit();
    }
    ?>