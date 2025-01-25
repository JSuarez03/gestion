<?php
session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}

require_once 'views/home.view.php';
?>