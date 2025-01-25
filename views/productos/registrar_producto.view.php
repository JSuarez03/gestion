<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Registrar Producto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
  <meta content="coderthemes" name="author">
  <?php require './views/templates/scripts.php';?>
</head>

<body class="font-poppins">

  <!-- Begin page -->
  <div class="flex wrapper">
    <?php require_once './views/templates/menu.php'; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">
      <?php require_once './views/templates/header.php';?>
      <main class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
          <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
            Registrar Producto
          </p>
        </div>


        <!-- Page Title End -->
        <div class="flex flex-col gap-6">
          <div class="card">
            <div class="p-6">
              <form method="POST" action="<?php echo CompleteURL?>" class="grid lg:grid-cols-3 gap-6">
                <div>
                  <label for="input-nombre" class="text-gray-800 text-sm font-medium inline-block mb-2">Nombre del Producto:</label>
                  <input type="text" id="input-nombre" class="form-input" name="nombre">
                </div>

                <div>
                  <label for="input-descripcion" class="text-gray-800 text-sm font-medium inline-block mb-2">Descripcion:</label>
                  <input type="text" id="input-descripcion" class="form-input" name="descripcion">
                </div>

                <div>
                  <label for="input-cantidad" class="text-gray-800 text-sm font-medium inline-block mb-2">Cantidad:</label>
                  <input type="number" id="input-cantidad" class="form-input" name="cantidad">
                </div>

                <div>
                    <label for="input-precio" class="text-gray-800 text-sm font-medium inline-block mb-2">Precio:</label>
                    <input type="number" step="0.01" id="input-precio" class="form-input" name="precio">
                </div>

                <div>
                  <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Categoria</label>
                  <select class="form-select" id="example-select" name="categoria">
                    <option>Elige una Categoria</option>
                    <?php foreach($categorias as $categoria): ?>
                    <option value="<?php echo $categoria['id_categoria']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="col-span-3 text-center">
                  <button type="submit" class="btn bg-primary text-white hover:bg-blue-700" id="sweetalert-success">Registrar Producto</button>
                </div>

              </form>



            </div>
          </div>

      </main>

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
<?php require_once './views/templates/themeSettings.php';?>
</body>

</html>