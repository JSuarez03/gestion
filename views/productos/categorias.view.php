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
                        Lista de categorias
                    </p>
                </div>
                <div class="mt-6">
                    <div class="card">

                        <div class="relative overflow-x-auto">
                            <?php if (empty($categorias)): ?>
                                <div class="flex items-center justify-center h-96">
                                    <p class="text-xl font-bold text-gray-500">No hay productos con stock bajo</p>
                                </div>
                            <?php else: ?>
                                <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                                    <thead class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                                        <tr>
                                            <th scope="col" class="text-center py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID</th>
                                            <th scope="col" class="text-center px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Nombre</th>
                                            <th scope="col" class="text-center px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">

                                        <?php foreach ($categorias as $key => $value): ?>
                                            <form method="GET" action="<?php echo PATH ?>productos/categorias">
                                                <tr>
                                                    <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-center text-gray-900 dark:text-gray-200"><b>#<?php echo $key + 1 ?></b></td>
                                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                        <div class="flex justify-center items-center text-center">
                                                            <div class="text-center font-medium text-gray-900 dark:text-gray-200 ms-4"><?php echo $value["nombre_categoria"] ?></div>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                                                    <button type="submit" name="id_categoria" value='<?php echo $value["id_categoria"]?>' class="ms-0.5"> <i class="mgc_delete_line text-xl"></i> </button>
                                                </tr>
                                            </form>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6 mt-6">
                    <div class="card">
                        <div class="p-6">
                            <form method="POST" action="<?php echo CompleteURL ?>" class="grid lg:grid-cols-3 gap-6">
                                <div class="row-1 col-2 col-span-1"></div>
                                <div class="row-3 col-2 col-span-1">
                                    <label for="input-nombre" class="text-gray-800 text-sm font-medium inline-block mb-2">Nombre de la categoria:</label>
                                    <input type="text" id="input-nombre" class="form-input" name="nombre">
                                </div>
                                <div class="row-3 col-span-3 text-center">
                                    <button type="submit" name="id_Categoria"  class="btn bg-primary text-white hover:bg-blue-700" id="sweetalert-success">Crear Categoria</button>
                                </div>
                            </form>
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