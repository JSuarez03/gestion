<?php

spl_autoload_register();
date_default_timezone_set('America/Caracas');

require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/config/router.php');

foreach($routes as $type => $typeRoutes){
  if(array_key_exists($url, $typeRoutes)){
    require_once(__DIR__ ."/". $type.$typeRoutes[$url]);
    die();
  }
}require_once(__DIR__ ."/views/404.php");

?>