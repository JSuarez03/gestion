<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="src/assets/bacterias.ico" type="image/x-icon">
    <title>Registrarse</title>
</head>

<body>

    <div class="container">
        <?php if(!empty($error)): ?>
        <div class="error">
            <h3>
                <?php echo $error; ?>
            </h3>
        </div>
        <?php endif; ?>

        <form class="form" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST">
            <p class="form-title">Regístrate</p>
            <div class="input-container">
                <input type="text" placeholder="Ingresa tu Nombre" require autocomplete="off" pattern="[A-Za-zÀ-ÿ\s]+"
                    title="Solo se permiten letras y acentos" name="nombre" />
            </div>
            <div class="input-container">
                <input type="text" placeholder="Ingresa tu Apellido" require autocomplete="off" pattern="[A-Za-zÀ-ÿ\s]+"
                    title="Solo se permiten letras y acentos" name="apellido" />
            </div>
            <div class="input-container">
                <input type="email" name="correo" placeholder="Ingresa tu Correo" require autocomplete="off" />
            </div>
            <div class="input-container">
                <input type="password" name="contrasena" placeholder="Ingresa tu Contraseña" require
                    autocomplete="off" />
            </div>
            <div class="input-container">
                <input type="password" name="contrasena2" placeholder="Repite tu Contraseña" require
                    autocomplete="off" />
            </div>

            <button class="submit" type="submit">Iniciar Sesión</button>

            <p class="signup-link">
                ¿Ya posees Cuenta?
                <a href="/gestion/gestionv2/login">Inicia Sesion</a>
            </p>
        </form>
    </div>



</body>

</html>