<nav class="app-menu">
    <a href="<?php echo PATH.'home'?>" class="logo-box">
                <div class="logo-light">
                    <img src="<?php echo PATH?>src/assets/images/name.png" class="logo-lg h-6" alt="Light logo">
                    <img src="<?php echo PATH?>src/assets/images/opty.png" class="logo-sm" alt="Small logo">
                </div>

                <div class="logo-dark">
                    <img src="<?php echo PATH?>src/assets/images/name.png" class="logo-lg h-6" alt="Dark logo">
                    <img src="<?php echo PATH?>src/assets/images/opty.png" class="logo-sm" alt="Small logo">
                </div>
            </a>

            <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
                <span class="sr-only">Menu Toggle Button</span>
                <i class="mgc_round_line text-xl"></i>
            </button>

    <div class="srcollbar bg-indigo-900" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item ">
                <a href="<?php echo PATH.'home'?>" class="menu-link">
                    <span class="menu-icon text-white"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text text-white">Dashboard</span>
                </a>
            </li>

            <li class="menu-title">Clientes</li>

            <li class="menu-item">
                <a href="javascript:void(0);" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text">Gestion de Clientes</span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="<?php echo PATH?>clientes/registrar" class="menu-link">
                            <span class="r">Registrar Cliente</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo PATH?>clientes" class="menu-link">
                            <span class="menu-text">Buscar Clientes</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-title">Citas</li>

            <li class="menu-item">
                <a href="javascript:void(0);" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                    <span class="menu-text">Gestion de Citas</span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="<?php echo PATH.'citas/create'?>" class="menu-link">
                            <span class="menu-text">Crear Citas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href= "<?php echo PATH.'citas'?>" class="menu-link">
                            <span class="menu-text">Modificar Citas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo PATH.'citas/history'?>" class="menu-link">
                            <span class="menu-text">Historial de Citas</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Inventario</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_classify_2_line"></i></span>
                    <span class="menu-text"> Inventario </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="<?php echo PATH?>productos/register" class="menu-link">
                            <span class="menu-text">Registrar Producto</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo PATH?>productos" class="menu-link">
                            <span class="menu-text">Consular Inventario</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo PATH?>productos/stock" class="menu-link">
                            <span class="menu-text">Alertas de Stock Bajo</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Compra</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                    <span class="menu-text"> Compras </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="<?php echo PATH?>productos" class="menu-link">
                            <span class="menu-text">Listado de Productos</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="carrito.html" class="menu-link">
                            <span class="menu-text">Carrito de Compras</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Ratings</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Lightbox</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Cerrar Sesion</li>

            <li class="menu-item">
                <a href="<?php echo PATH?>logout" data-fc-type="collapse" class="menu-link">
                    <span class="menu-text"> Cerrar Sesion </span>
                </a>
            </li>
        </ul>

    </div>
</nav>