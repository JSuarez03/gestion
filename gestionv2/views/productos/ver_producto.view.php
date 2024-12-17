<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require './views/templates/scripts.php';?>
</head>
<body>

<div class="flex wrapper">
    <?php require './views/templates/menu.php';?>   


<div class="page-content">
    <?php require './views/templates/header.php';?>  

<div>
    <div id="topbar-search-modal" class="fc-modal hidden w-full h-full fixed top-0 start-0 z-50">
        <div class="fc-modal-open:opacity-100 fc-modal-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-12 sm:mx-auto">
            <div class="mx-auto max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl transition-all dark:bg-slate-800">
                <div class="relative">
                    <div class="pointer-events-none absolute top-3.5 start-4 text-gray-900 text-opacity-40 dark:text-gray-200">
                        <i class="mgc_search_line text-xl"></i>
                    </div>
                    <input type="search" class="h-12 w-full border-0 bg-transparent ps-11 pe-4 text-gray-900 placeholder-gray-500 dark:placeholder-gray-300 dark:text-gray-200 focus:ring-0 sm:text-sm" placeholder="Buscar...">
                </div>
            </div>
        </div>
    </div>
</div>

<main class="flex-grow p-6">
    <div class="flex justify-between items-center mb-6">
        <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
            Tablero
        </p>
    </div>
    <div class="grid lg:grid-cols-4 gap-6">
    
    <div>
        <div class="card">
            <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/koku.jpg" alt="Image Description">  
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 dark:text-black">
                    Goku
                </h3>
                <p class="mt-1 text-gray-800 font-semibold">
                    Descripcion: <span class="font-extralight text-gray-400">Goku le gana</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Precio: <span class="font-extralight text-gray-400">25$</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Cantidad: <span class="font-extralight text-gray-400">700</span>
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Agregar al Carrito
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/koku.jpg" alt="Image Description">  
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 dark:text-black">
                    Goku
                </h3>
                <p class="mt-1 text-gray-800 font-semibold">
                    Descripcion: <span class="font-extralight text-gray-400">Goku le gana</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Precio: <span class="font-extralight text-gray-400">25$</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Cantidad: <span class="font-extralight text-gray-400">700</span>
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Agregar al Carrito
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/koku.jpg" alt="Image Description">  
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 dark:text-black">
                    Goku
                </h3>
                <p class="mt-1 text-gray-800 font-semibold">
                    Descripcion: <span class="font-extralight text-gray-400">Goku le gana</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Precio: <span class="font-extralight text-gray-400">25$</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Cantidad: <span class="font-extralight text-gray-400">700</span>
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Agregar al Carrito
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/koku.jpg" alt="Image Description">  
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 dark:text-black">
                    Goku
                </h3>
                <p class="mt-1 text-gray-800 font-semibold">
                    Descripcion: <span class="font-extralight text-gray-400">Goku le gana</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Precio: <span class="font-extralight text-gray-400">25$</span>
                </p>
                <p class="mt-1 text-gray-800 font-semibold">
                    Cantidad: <span class="font-extralight text-gray-400">700</span>
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Agregar al Carrito
                </a>
            </div>
        </div>
    </div>

        <div class="card">
            <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/love.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 dark:text-black">
                    Gleen y Jesus
                </h3>
                <p class="mt-1 text-gray-800 dark:text-gray-400">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Agregar al Carrito
                </a>
            </div>
        </div>
    </div>
</main>
</div>
</div>

<button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
<i class="mgc_arrow_up_line text-lg"></i>
</button>
<!-- Theme Settings -->
<?php require_once './views/templates/themeSettings.php';?>
</body>
</html>
