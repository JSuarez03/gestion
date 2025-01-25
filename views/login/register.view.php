<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/estilos.css">
    <link rel="stylesheet" href="src/css/app.min.css">
    <title>Registrate</title>
</head>
<body class=" font-poppins">
    <?php if(isset($error)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error?>
    </div>
    <?php endif?>
    <div class=" bg-fondo">
        <div class="h-screen w-screen flex justify-center items-center">
            <main class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">
                        <h1 class="mb-4">
                            <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                                Registrate
                            </p>

                        </h1>
                        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
                        <div class="mb-4">
                            <input id="LoggingEmailAddress" class="form-input" type="text" placeholder="Ingresa tu Nombre" name="nombre" required>
                        </div>

                        <div class="mb-4">
                            <input id="LoggingEmailAddress" class="form-input" type="text" placeholder="Ingresa tu Apellido" name="apellido" required>
                        </div>

                        <div class="mb-4">
                            <input id="LoggingEmailAddress" class="form-input" type="email" placeholder="Ingresa tu Correo" name="email" required>
                        </div>

                        <div class="mb-4">
                            <input id="loggingPassword" class="form-input" type="password" placeholder="Ingresa tu Contrasena" name="contrasena" required>
                        </div>

                        <div class="mb-4">
                            <input id="loggingPassword" class="form-input" type="password" placeholder="Repite tu Contrasena" name="contrasena2" required>
                        </div>


                        <div class="flex justify-center mb-6">
                            <button type="sutmid" class="btn w-full text-white bg-primary hover:bg-blue-900">Registrate</button>
                        </div>
                    </form>
                        <p class="text-gray-500 dark:text-gray-400 text-center">Ya posees una Cuenta?<a href="<?php echo PATH?>login" class="text-primary ms-1"><b>Inicia Sesion</b></a></p>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
</body>
</html>
