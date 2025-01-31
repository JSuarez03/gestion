<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: '.PATH.'login');
        die();
    }
    use Controller\Categorias;
    use Controller\Usuario;
    require_once('./php/evaluar.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuarioId = (new Usuario)->getId($_SESSION['usuario']);
        $datos = array(
            'nombre_categoria' => sanear($_POST['nombre']),
            'id_usuario' => $usuarioId
        );
        $res = (new Categorias)->agregar($datos);
        header('Location: '.PATH.'productos/categorias');
    }else if(strpos(CompletePath , '?') !== false){
        $datos = array(
            'id_categoria' => $_GET['id_categoria'],
            'status' => 1 
        );
        $res = (new Categorias)->actualizar($datos);
        header('Location: '.PATH.'productos/categorias');
    }
    
    $categorias = (new Categorias)->lista();
    $categorias = array_filter($categorias, function($categoria){
        if($categoria['status'] == 0){
            return $categoria;
        }
    });
    require_once 'views/productos/categorias.view.php';

?>