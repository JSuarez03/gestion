<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="src/assets/bacterias.ico" type="image/x-icon">
    <title>Iniciar Sesion</title>
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
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <p class="form-title">Inicia sesión en tu cuenta</p>
            <div class="input-container">
                <input type="text" placeholder="Ingresa tu Nombre" require autocomplete="off"  name="nombre" />
            </div>
            <div class="input-container">
                <input type="email" name="correo" placeholder="Ingresa tu Correo" required autocomplete="off" />
            </div>
            <div class="input-container">
                <input type="password" name="contrasena" required placeholder="Ingresa tu Contraseña" />
            </div>

            <button class="submit" type="submit">Iniciar Sesión</button>

            <p class="signup-link">
                ¿Aún no posees Cuenta?
                <a href="register.php">Regístrate</a>
            </p>

        </form>
    </div>

    <?php if (isset($_SESSION['registro_exitoso']) && $_SESSION['registro_exitoso'] == true) { 
        echo " <script> 
        Swal.fire({ 
        title: 'Registro exitoso', 
        text: 'El usuario ha sido registrado correctamente', 
        icon: 'success', 
        confirmButtonText: 'Aceptar' }); </script> "; unset($_SESSION['registro_exitoso']); } ?>
</body>

</html>