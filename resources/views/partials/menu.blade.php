<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="20">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span>Dashboard</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i class="ri-honour-line"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title"><span>Mantenimiento</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="bx bx-notepad"></i> <span>Categoria</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="bx bx-box"></i> <span>Producto</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-passport-line"></i> <span>Menu</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="{{-- ri-restaurant-2-line --}}bx bx-bowl-hot"></i> <span>Plato</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class=" {{-- ri-scales-2-line --}}bx bx-receipt"></i> <span>Receta</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="bx bx-baguette"></i> <span>Ingrediente</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-user-5-line"></i> <span>Cliente</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-user-2-line"></i> <span>Proveedor</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="{{-- ri-shield-user-line --}}bx bx-id-card"></i> <span>Usuario</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-shield-user-line"></i> <span>Rol</span>
                    </a>
                </li>

                <li class="menu-title"><span>Compra</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-git-repository-line"></i> <span>Listado de Compras</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-shopping-cart-2-line"></i> <span>Nueva Compra</span>
                    </a>
                </li>

                <li class="menu-title"><span>Ventas</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class=" ri-file-list-3-line"></i> <span>Listado de Ventas</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-file-edit-line"></i> <span>Nueva Venta</span>
                    </a>
                </li>

                <li class="menu-title"><span>Inventario</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-book-2-line"></i> <span>Listado Inventario</span>
                    </a>
                </li>

                <li class="menu-title"><span>Transaccion</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-file-mark-line"></i> <span>Listado Transaccion</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
