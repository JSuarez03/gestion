<?php 

session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: '.PATH.'login');
    die();
}

use Controller\Citas;
$citas = new Citas();
try{
    $citasList = $citas->historia();
}catch (\Exception $err) {
    echo "error:" . $err->getMessage();
    die();
}



require_once 'views/citas/historia_citas.view.php';
?>