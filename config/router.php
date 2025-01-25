<?php

$routes = array(
    "views" => array(
      "/404" => "/404.php",
      "/prueba" => '/prueba.php',
    ),
    "php" => array(
      "/register" => '/login/register.php',
      "/login" => '/login/login.php',
      "/home" => '/home.php',
      "/logout" => '/login/cerrar.php',
      "/citas" => '/citas/ver_citas.php',
      "/citas/create" => '/citas/crear_cita.php',  
      "/index" => '/index.php',
      "/productos" => '/productos/ver_productos.php',
      "/productos/register" => '/productos/registrar_productos.php',
      "/productos/stock" => '/productos/low_productos.php',
      '/productos/actualizar' => '/productos/actualizar_productos.php',
      '/productos/completar' => '/productos/completar_actualizacion.php',
      '/productos/categorias' => '/productos/categoria.php', 
      '/productos/egreso' => '/productos/Egresar_producto.php', 
      '/productos/list' => '/productos/Egresar_producto.php', 
      "/recuperar" => '/login/recuperar.php',
      "/clientes" => '/clientes/ver_clientes.php',
      "/clientes/registrar" => '/clientes/registrar_clientes.php',
      "/citas/modificar" => '/citas/modificar_citas.php',
      "/citas/completar" => '/citas/completar_cita.php',
      "/citas/eliminar" => '/citas/eliminar_cita.php',
      "/citas/history" => '/citas/historia_cita.php',
    )
);