<?php
$servername = "my-database";
$username = "root";
$password = "";

try {
  $conexion = new PDO("mysql:=$servername;dbname=gestionv2", $username, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Conexion exitosa';

} catch(PDOException $e) {
  echo "Conexion Fallida: " . $e->getMessage();
}
?>