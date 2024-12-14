<?php

session_start();
require 'home.view.php';

if(!isset($_SESSION['usuario'])){
    header('Location: ../index.php');
    session_destroy();
    die();
}
?>
