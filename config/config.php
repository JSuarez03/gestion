<?php 
  $folderPath = dirname($_SERVER['SCRIPT_NAME']);
  $urlPath = $_SERVER['REQUEST_URI'];
  $url = substr($urlPath,strlen($folderPath));
  if (strpos($url, '?') !== false) {
    $url = strstr($url, '?', true);
  }

  define('PATH',"/gestion/");
  define('URL', $url);
  define('CompleteURL', "/gestion".$url);
  define('CompletePath', $urlPath);
  