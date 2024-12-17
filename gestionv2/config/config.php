<?php 
  $folderPath = dirname($_SERVER['SCRIPT_NAME']);
  $urlPath = $_SERVER['REQUEST_URI'];
  $url = substr($urlPath,strlen($folderPath));
  

  define('PATH',"/gestion/gestionv2/");
  define('URL', $url);