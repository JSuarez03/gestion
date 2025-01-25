<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Buscar Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">
    <?php require "./views/templates/scripts.php"; ?>

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
                        Buscar Cliente
                    </p>
                </div>

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Lista de Clientes</h4>
                            </div>
                        </div>
                        <div class="p-6">
                            <div id="table-search-p">
                                <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                    <div class="gridjs-wrapper" style="height: auto;">
                                        <table role="grid" class="gridjs-table" style="height: auto;">
                                            <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="position" class="gridjs-th">
                                                        <div class="gridjs-th-content">cedula</div>
                                                    </th>
                                                    <th data-column-id="name" class="gridjs-th">
                                                        <div class="gridjs-th-content">nombre</div>
                                                    </th>
                                                    <th data-column-id="email" class="gridjs-th">
                                                        <div class="gridjs-th-content">apellido</div>
                                                    </th>
                                                    <th data-column-id="company" class="gridjs-th">
                                                        <div class="gridjs-th-content">telefono</div>
                                                    </th>
                                                    <th data-column-id="country" class="gridjs-th">
                                                        <div class="gridjs-th-content">direccion</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="gridjs-tbody">
                                                <?php foreach ($clientes as $cliente): ?>
                                                    <tr class="gridjs-tr">
                                                        <td data-column-id="name" class="gridjs-td"><?php echo $cliente['cedula'] ?></td>
                                                        <td data-column-id="email" class="gridjs-td"><?php echo $cliente['nombre'] ?></td>
                                                        <td data-column-id="position" class="gridjs-td"><?php echo $cliente['apellido'] ?></td>
                                                        <td data-column-id="company" class="gridjs-td"><?php echo $cliente['telefono'] ?></td>
                                                        <td data-column-id="country" class="gridjs-td"><?php echo $cliente['direccion'] ?></td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="gridjs-footer">
                                        <div class="gridjs-pagination">
                                            <div class="gridjs-pages">
                                            <?php if($pagina > 1):?>
                                                <a href="<?php echo $reference.'?page=1'?>"><button tabindex="0" role="button" title="Previous" aria-label="Previous" class="">Previous</button></a>
                                            <?php endif?>
                                            <?php foreach($nums as $num):?>
                                                <a href="<?php echo $reference.'?page='.$num?>"><button tabindex="0" role="button" title="1" aria-label="1" class=" gridjs-page gridjs-active"><?php echo $num?></button></a>
                                            <?php endforeach?>
                                            <?php if($pagina < $numeroPaginas):?>    
                                                <a href="<?php echo  $reference.$numeroPaginas?>"><button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button></div></a>
                                            <?php endif?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h4 class="card-title">Historial de Compras de Clientes</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <div id="table-pagination"></div>
                    </div>
                </div> -->
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
    <script src="src\assets\js\pages\table-gridjs.js"></script>
    <!-- Theme Settings -->
    <?php require_once './views/templates/themeSettings.php'; ?>
</body>

</html>