<?php
define('VIEWS_DIR', __DIR__.'/views');
define('PHP_DIR', __DIR__.'/php');
$routes = array(
    "views" => array(
      "/404" => "/404.php",
      "/prueba" => '/prueba.php',
    ),
    "php" => array(
      "/register" => '/register.php',
      "/login" => '/login.php',
      "/home" => '/home.php',
      "/logout" => '/cerrar.php',
      "/Citas" => '/citas.php',
      "/index" => '/index.php',
    )
);