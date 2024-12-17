<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cita Modificada</title>
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
                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="p-6">
                            <form class="grid lg:grid-cols-3 gap-6">
                                
                                <div>
                                    <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Cliente</label>
                                    <select class="form-select" id="example-select">
                                        <option>Seleccione un Cliente</option>
                                        <option>Cliente 1</option>
                                        <option>Cliente 2</option>
                                        <option>Cliente 3</option>
                                    </select>
                                </div>
                
                                <div>
                                    <label for="example-date" class="text-gray-800 text-sm font-medium inline-block mb-2">Fecha</label>
                                    <input class="form-input" id="example-date" type="date" name="date">
                                </div>
                
                                <div>
                                    <label for="example-time" class="text-gray-800 text-sm font-medium inline-block mb-2">Hora de Atencion:</label>
                                    <input class="form-input" id="example-time" type="time" name="time">
                                </div>
                
                                <div>
                                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Servicio:</label>
                                    <input type="text" id="simpleinput" class="form-input">
                                </div>
                
                                <div>
                                    <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Estado</label>
                                    <select class="form-select" id="example-select">
                                        <option>Seleccione una Estado de la Cita</option>
                                        <option>Confirmada</option>
                                        <option>Pendiente</option>
                                        <option>Cancelada</option>
                                    </select>
                                </div>
                
                                <div>
                                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Apellido:</label>
                                    <input type="text" id="simpleinput" class="form-input">
                                </div>
                
                                <div>
                                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Numero de Telefono:</label>
                                    <input type="tel" id="simpleinput" class="form-input">
                                </div>
                
                                <div>
                                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Direccion:</label>
                                    <input type="text" id="simpleinput" class="form-input">
                                </div>
                                
                                <div class="col-span-3 text-center">
                                    <button type="button" class="btn bg-primary text-white hover:bg-blue-700" id="sweetalert-success">Actualizar Registro</button>
                                </div>
                            </form>
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