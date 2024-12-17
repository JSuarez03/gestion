<?php
session_start();

if(isset($_SESSION['usuario'])){
    header('Location: /gestion/gestionv2/home');
}

require 'views/login/recuperar.view.php';

