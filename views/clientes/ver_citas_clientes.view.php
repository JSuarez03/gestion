<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Buscar Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">
    <?php require "./views/templates/scripts.php";?>

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
                        Buscar Cliente
                    </p>
                </div>

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Historial de Clientes</h4>
                            </div>
                        </div>
                        <div class="p-6">
                            <div id="table-search"></div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h4 class="card-title">Historial de Compras de Clientes</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <div id="table-pagination"></div>
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
<script src="./src/js/tableInfo.js"></script>
</body>

</html>