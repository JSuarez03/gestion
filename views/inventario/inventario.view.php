<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: ../index.php');
    session_destroy();
    die();
}
?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Inventario</title>
</head>

<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="src/images/optisys.png" alt="">
                        <span class="nav-item">OptiSys</span>
                    </a></li>
                <li><a href="home.view.php">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Inicio</span>
                    </a></li>
                <li><a href="gestion.view.php">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Gestion de Citas</span>
                    </a></li>
                <li><a href="inventario.view.php">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-item">Inventario</span>
                    </a></li>
                <li><a href="clientes.view.php">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Clientes</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-item">Pendientes</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Opciones</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Ayuda</span>
                    </a></li>
                <li><a href="../config/cerrar.php" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Cerrar Sesion</span>
                    </a></li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Inventario</h1>
            </div>

            <section class="main-course">
                <h1>Coloca aqui lo que quieras xD</h1>
                <div class="course-box">

                </div>
            </section>
        </section>
    </div>

</body>

</html>