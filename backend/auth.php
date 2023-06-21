<?php
    session_start();
    if(!isset($_SESSION['users'])){
        header("Location: ../infoSavvy/index.php?err=Please Login First");
    }
?>