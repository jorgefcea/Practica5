<?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit;
    }
    header("Location: home.php");
    exit;
?>