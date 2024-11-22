<?php
require 'home.view.php';
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: ../index.php');
    session_destroy();
    die();
}
?>