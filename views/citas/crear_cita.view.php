<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Crear Cita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
  <meta content="coderthemes" name="author">
  <?php require './views/templates/scripts.php' ?>
</head>

<body class="font-poppins">

  <!-- Begin page -->
  <div class="flex wrapper">
    <?php require_once './views/templates/menu.php'; ?>

    <div class="page-content">
      <?php require_once './views/templates/header.php'; ?>

      <main class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
          <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
            Crear Cita
          </p>
        </div>


        <!-- Page Title End -->
        <div class="flex flex-col gap-6">
          <div class="card">
            <div class="p-6">
              <form method="POST" action="<?php $_SERVER['REQUEST_URI']?>" class="grid lg:grid-cols-3 gap-6">

                <div>
                  <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Cliente</label>
                  <select class="form-select" id="example-select" name="cliente">
                    <option>Seleccione un Cliente</option>
                    <?php foreach ($listaClientes as $value): ?>
                        <option value="<?= $value['cedula']."-".$value['nombre']."-".$value['apellido']; ?>" ><?= $value['nombre']." ".$value['apellido']." : ".$value['cedula']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div>
                  <label for="example-date" class="text-gray-800 text-sm font-medium inline-block mb-2">Fecha</label>
                  <input class="form-input" id="example-date" type="date" name="fecha">
                </div>

                <div>
                  <label for="example-time" class="text-gray-800 text-sm font-medium inline-block mb-2">Hora de Atencion:</label>
                  <input class="form-input" id="example-time" type="time" name="hora">
                </div>

                <div>
                  <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Servicio:</label>
                  <input type="text" id="simpleinput" class="form-input" name="servicio">
                </div>

                <div>
                  <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Estado</label>
                  <select class="form-select" id="example-select" name="estado">
                    <option>Seleccione una Estado de la Cita</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="confirmada">Pendiente</option>
                    <option value="confirmada">Cancelada</option>
                  </select>
                </div>

                <div class="col-span-3 text-center">
                  <button type="submit" class="btn bg-primary text-white hover:bg-blue-700" id="sweetalert-success">Registrar Cita</button>
                </div>
              </form>
            </div>
      </main>



      <!-- Footer Start -->
      <footer class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800">
        <div class="flex md:justify-between justify-center w-full gap-4">
          <div>
            <script>
              document.write(new Date().getFullYear())
            </script> © Konrix - <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
          </div>
          <div class="md:flex hidden gap-4 item-center md:justify-end">
            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">About</a>
            <span class="border-e border-gray-300 dark:border-gray-700"></span>
            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">Support</a>
            <span class="border-e border-gray-300 dark:border-gray-700"></span>
            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">Contact Us</a>
          </div>
        </div>
      </footer>
      <!-- Footer End -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

  </div>

  <!-- Back to Top Button -->
  <button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
    <i class="mgc_arrow_up_line text-lg"></i>
  </button>

  <!-- Theme Settings -->
  <?php require_once './views/templates/themeSettings.php'; ?>
  </div>
</body>

</html>