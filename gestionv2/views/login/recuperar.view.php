<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/estilos.css">
    <link rel="stylesheet" href="src/css/app.min.css">
    <title>Recuperacion de Usuario</title>
</head>
<body class=" font-poppins">

    <div class=" bg-fondo">

        <div class="h-screen w-screen flex justify-center items-center">

            <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">
                        <div class="mb-4">
                            <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                                Iniciar Sesion
                            </p>

                        </div>

                        <div class="mb-4">
                            <input id="LoggingEmailAddress" class="form-input" type="text" placeholder="Ingresa tu Nombre..." >
                        </div>

                        <div class="mb-4">
                            <input id="LoggingEmailAddress" class="form-input" type="email" placeholder="Ingresa tu Correo..." >
                        </div>

                        <div class="flex justify-center mb-6">
                            <button class="btn w-full text-white bg-primary hover:bg-gradient-to-r hover:from-indigo-600 hover:to-violet-600"> Restablecer Contrasena </button>
                        </div>

                        <div class="flex items-center my-6">
                            <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"></div>
                            <div class="mx-4 text-secondary">O</div>
                            <div class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"></div>
                        </div>
                    
                        <p class="text-gray-500 dark:text-gray-400 text-center">Volver a<a href="<?php echo PATH?>login" class="text-primary ms-1"><b>Iniciar Sesion</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>