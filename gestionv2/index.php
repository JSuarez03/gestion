<?php

require 'config/conexionbd.php';

session_start();

if(isset($_SESSION['usuario'])){
    header('Location: views/home.php');
}else{
    header('Location: login.php');
}

?>