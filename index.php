<?php

spl_autoload_register();
date_default_timezone_set('America/Caracas');

require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/config/router.php');

foreach($routes as $type => $typeRoutes){
  if(array_key_exists(URL, $typeRoutes)){
    require_once(__DIR__ ."/". $type.$typeRoutes[URL]);
    die();
  }
}
http_response_code(404);
require_once(__DIR__ ."/views/404.php");

?>