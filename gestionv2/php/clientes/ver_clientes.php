<?php

session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: /gestion/gestionv2/login');
  die();
}

require_once './views/clientes/ver_citas_clientes.view.php';

