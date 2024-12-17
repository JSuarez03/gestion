<?php 

session_start();
session_destroy();
$_SESSION = array();
header("Location: /gestion/gestionv2/login");
die();

?>