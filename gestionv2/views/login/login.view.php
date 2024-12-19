<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo PATH ?>src/css/estilos.css">
  <link rel="stylesheet" href="<?php echo PATH ?>src/css/app.min.css">
  <title>Iniciar Sesion</title>
</head>

<body class=" font-poppins">

  <main class=" bg-fondo">

    <div class="h-screen w-screen flex justify-center items-center">

      <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
        <div class="card overflow-hidden sm:rounded-md rounded-none">
          <div class="p-6">
            <h1 class="mb-4">
              <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                Iniciar Sesion
              </p>

            </h1>
            <form class="form" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST">

              <div class="mb-4">
                <input id="LoggingEmailAddress" class="form-input" type="email" name="email" placeholder="Ingresa tu Correo" required autocomplete="off">
              </div>

              <div class="mb-4">
                <input id="loggingPassword" class="form-input" type="password" placeholder="Ingresa tu Contrasena" name="contrasena" required>
              </div>

              <div class="flex items-center justify-between mb-4">
                <a href="<?php echo PATH ?>recuperar" class="text-sm text-primary border-b border-dashed border-primary">Olvido su Contrasena?</a>
              </div>


              <div class="flex justify-center mb-6">
                <button class="btn w-full text-white bg-primary bg-gradient-to-r from-violet-600 to-indigo-600 hover:bg-gradient-to-r hover:from-indigo-600 hover:to-violet-600" type="submit"> Iniciar Sesión </button>
              </div>
            </form>
            <p class="text-gray-500 dark:text-gray-400 text-center">Aun no tienes una Cuenta?<a href="<?php echo PATH ?>register" class="text-primary ms-1"><b>Registrate</b></a></p>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>