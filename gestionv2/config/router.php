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
      "/citas" => '/citas/ver_citas.php',
      "/citas/create" => '/citas/crear_cita.php',  
      "/index" => '/index.php',
      "/productos" => '/productos/ver_productos.php',
      "/productos/register" => '/productos/registrar_productos.php',
    )
);