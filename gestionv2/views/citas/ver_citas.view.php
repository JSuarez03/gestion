<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Modificar Cita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">
    <?php require "./views/templates/scripts.php";?>
</head>

<body class="font-poppins">

    <!-- Begin page -->
    <div class="flex wrapper">
        <?php require_once "./views/templates/menu.php";?>
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">
<?php require_once './views/templates/header.php';?>
            <main class="flex-grow p-6">
                <div class="flex justify-between items-center mb-6">
                    <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        Ver / Modificar Cita
                    </p>
                </div>
                <div class="mt-6">
                    <div class="card">
                        
                        <div class="relative overflow-x-auto">
                            <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                                <thead class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                                    <tr>
                                        <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Cliente</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Fecha</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Hora</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Servicio</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Estado</th>
                                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-200">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
                                    <tr>
                                        <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><b>#1</b></td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Jesus Suarez</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2024</td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">8:30AM</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Lentes</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="inline-flex items-center px-3 py-1 rounded text-xs bg-success/25 text-success font-bold">Confirmado</div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                                            <a href="<?php echo PATH?>citas/modificar" class="me-0.5"> <i class="mgc_edit_line text-lg"></i> </a>
                                            <a href="javascript:void(0);" class="ms-0.5"> <i class="mgc_delete_line text-xl"></i> </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><b>#2</b></td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Luis Marval</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2024</td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">8:30AM</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Examen Visual</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="inline-flex items-center gap-1.5 py-1 px-3 rounded text-xs font-bold bg-primary/25 text-primary">Pendiente</div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                                            <a href="<?php echo PATH?>citas/modificar" class="me-0.5"> <i class="mgc_edit_line text-lg"></i> </a>
                                            <a href="javascript:void(0);" class="ms-0.5"> <i class="mgc_delete_line text-xl"></i> </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><b>#3</b></td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Gleen Sanchez</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2024</td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">8:30AM</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Lentes</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="inline-flex items-center gap-1.5 py-1 px-3 rounded text-xs font-bold bg-danger/25 text-danger">Cancelada</div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                                            <a href="<?php echo PATH?>citas/modificar" class="me-0.5"> <i class="mgc_edit_line text-lg"></i> </a>
                                            <a href="javascript:void(0);" class="ms-0.5"> <i class="mgc_delete_line text-xl"></i> </a>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"><b>#4</b></td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="ms-4">
                                                    <div class="font-medium text-gray-900 dark:text-gray-200">Oscar Chavez</div>
                                                    <div class="text-gray-500"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2024</td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">8:30AM</div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Examen Visual</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="inline-flex items-center h-6 px-3 text-xs font-semibold text-sky-500 bg-sky-500/25 rounded">Fuera de Tiempo</div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
                                            <a href="<?php echo PATH?>citas/modificar" class="me-0.5"> <i class="mgc_edit_line text-lg"></i> </a>
                                            <a href="javascript:void(0);" class="ms-0.5"> <i class="mgc_delete_line text-xl"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
<?php require_once './views/templates/themeSettings.php';?>
</body>

</html>