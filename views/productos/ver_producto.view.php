<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require './views/templates/scripts.php'; ?>
</head>

<body>

    <div class="flex wrapper">
        <?php require './views/templates/menu.php'; ?>


        <div class="page-content">
            <?php require './views/templates/header.php'; ?>


            <main class="flex-grow p-6">
                <div class="flex justify-between items-center mb-6">
                    <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        Tablero
                    </p>
                </div>
                <div class="grid lg:grid-cols-4 gap-6">
                    <?php foreach ($producto as $key => $producto): ?>
                        <div>
                            <div class="card">
                                <!-- <img class="w-full h-auto rounded-t-xl" src="../assets/images/small/koku.jpg" alt="Image Description"> -->
                                <div class="p-6">
                                    <form action="<?php echo PATH?>productos/actualizar" method="POST">
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200">
                                            <?php echo $producto['nombre_producto']?>
                                        </h3>
                                        <p class="mt-1 text-gray-800 font-semibold dark:text-gray-200">
                                            Descripcion: <span class="font-extralight text-gray-400 "><?php echo $producto['descripcion']?></span>
                                        </p>
                                        <p class="mt-1 text-gray-800 font-semibold dark:text-gray-200">
                                            Precio: <span class="font-extralight text-gray-400"><?php echo $producto['precio_unitario']?>$ (c/u)</span>
                                        </p>
                                        <p class="mt-1 text-gray-800 font-semibold dark:text-gray-200">
                                            Unidades displonible: <span class="font-extralight text-gray-400"><?php echo $producto['cantidad']?></span>
                                        </p>
                                        <button class="btn bg-primary text-white mt-2" formaction="<?php echo PATH?>productos/egreso" name="id_producto" value="<?php echo $producto['id_producto']?>">
                                            Egresar
                                        </button>
                                        <button class="btn bg-primary text-white mt-2" name="id_producto" value="<?php echo $producto['id_producto']?>">
                                            Editar Producto
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div>
                    <?php if($pagina > 1):?>
                    <a href="<?php echo $reference."1"?>" class="btn bg-primary text-white mt-2 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        inicio
                    </a>
                    <a href="<?php echo  $reference.$anterior?>" class="btn bg-primary text-white mt-2 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        anterior
                    </a>
                    <?php endif?>
                    <?php for($i=$pagina;$i <= $numeroPaginas;$i++):?>
                        <?php if($numeroPaginas == 1) break?>
                        <a href="<?php echo $reference."$i"?>" class="btn bg-primary text-white mt-2 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        <?php echo $i?>
                        </a>
                        <?php if($i == ($pagina+5)) break?>
                    <?php endfor?>
                    <?php if($pagina < $numeroPaginas):?>
                    <a href="<?php echo  $reference.$siguiente?>" class="btn bg-primary text-white mt-2 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-">
                        siguiente
                    </a>
                    <a href="<?php echo  $reference.$numeroPaginas?>" class="btn bg-primary text-white mt-2 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-" style='  '>
                        fin
                    </a>
                    <?php endif?>
                </div>
            </main>
        </div>
    </div>

    <button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
        <i class="mgc_arrow_up_line text-lg"></i>
    </button>
    <!-- Theme Settings -->
    <?php require_once './views/templates/themeSettings.php'; ?>
</body>

</html>