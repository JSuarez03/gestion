<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Bajo stock</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
  <meta content="coderthemes" name="author">
  <?php require "./views/templates/scripts.php"; ?>
</head>

<body class="font-poppins">

  <!-- Begin page -->
  <div class="flex wrapper">
    <?php require_once "./views/templates/menu.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">
      <?php require_once './views/templates/header.php'; ?>
      <main class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
          <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
          Pocos Productos
          </p>
        </div>
        <div class="mt-6">
          <div class="card">

            <div class="relative overflow-x-auto">
            <?php if(empty($producto)):?>
              <div class="flex items-center justify-center h-96">
                <p class="text-xl font-bold text-gray-500">No hay productos con stock bajo</p>
              </div>
            <?php else:?>
              <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                <thead class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                  <tr>
                    <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Nombre</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Precio</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Stock</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Actualizar</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
                    
                  <?php foreach ($producto as $key => $value): ?>
                    <form method="POST" action="<?php echo PATH ?>productos/actualizar">
                      <tr>
                        <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><b>#<?php echo $key + 1 ?></b></td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                          <div class="flex items-center">
                            <div class="font-medium text-gray-900 dark:text-gray-200 ms-4"><?php echo $value["nombre_producto"]?></div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><?php echo $value["precio_unitario"] ?></td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                          <div class="flex items-center">
                            <div class="font-medium text-gray-900 dark:text-gray-200 ms-4"><?php echo $value["cantidad"] ?></div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                          <button type="submit" name="id_producto" value="<?php echo $value["id_producto"] ?>" class="me-0.5"> <i class="mgc_edit_line text-lg"></i> </button>
                        </td>
                      </tr>
                    </form>
                  <?php endforeach; ?>
                </tbody>
              </table>
            <?php endif;?>
            </div>
          </div>
        </div>


      </main>



      <!-- Footer Start -->

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
</body>

</html>