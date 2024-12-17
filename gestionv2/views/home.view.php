    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require "./views/templates/scripts.php";?>
        <title>Inicio</title>
    </head>
    <body>

        <div class="flex wrapper">
            <!--
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        -->
            <?php require_once "./views/templates/menu.php";?>
    <!--
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        TODO: BARRA DE NAVEGACION
        -->
    

    
    
    <div class="page-content">
        <!--
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        -->
        <?php require_once './views/templates/header.php';?>
    <!--
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        ? ESTA PARTE DE AQUI PARA ABAJO ES EL HEADER
        -->


    
    <main class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
            <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                Tablero
            </p>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">  
            <div class="card">
                <div class="p-5 bg-blue-700 rounded">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center text-sky-500 bg-sky-500/25">
                            <i class="mgc_tag_line text-4xl text-primary"></i>
                        </div>
                        <div class="text-right ">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-white">3947</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-white">Total Tickets</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="p-5 bg-yellow-400 rounded">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-yellow-100">
                            <i class="mgc_alarm_2_line text-4xl text-yellow-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-black">624</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-black">Pending Tickets</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="p-5 bg-green-700 rounded">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-green-100">
                            <i class="mgc_check_line text-4xl text-green-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-white">3195</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-white">Closed Tickets</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="p-5 bg-red-700 rounded">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-red-100">
                            <i class="mgc_delete_line text-4xl text-red-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-white">128</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-white">Deleted Tickets</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="grid lg:grid-cols-2 gap-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line with Data Labels</h4>
                </div>
                <div class="p-6">

                    <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dashed Line</h4>
                </div>
                <div class="p-6">
                    <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Spline Area</h4>
                </div>
                <div class="p-6">

                    <div id="spline_area" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column Chart</h4>
                </div>
                <div class="p-6">
                    <div id="column_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column with Data Labels</h4>
                </div>
                <div class="p-6">
                    <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bar Chart</h4>
                </div>
                <div class="p-6">
                    <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line, Column & Area Chart</h4>
                </div>
                <div class="p-6">
                    <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Radial Chart</h4>
                </div>
                <div class="p-6">
                    <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pie Chart</h4>
                </div>
                <div class="p-6">
                    <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title   ">Donut Chart</h4>
                </div>
                <div class="p-6">
                    <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

        
    </main>
</div>
</div>

<button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
    <i class="mgc_arrow_up_line text-lg"></i>
</button>

</body>
</html>
