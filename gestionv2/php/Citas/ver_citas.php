<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: register');
  die();
}
require_once 'views/citas/ver_citas.view.php';
?>