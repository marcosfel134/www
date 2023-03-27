<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    // header('location: index.php');
    die(include("pages_components/protect.php"));
}

?>