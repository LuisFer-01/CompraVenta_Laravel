@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card crm-widget">
                        <div class="card-body p-0">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">

                                <!-- Total Categorías -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Categorías</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-database-2-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalCategorias">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Menús -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Menús</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-layout-masonry-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalMenus">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Platos -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Platos</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-restaurant-2-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalPlatos">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Productos -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Productos</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-shopping-cart-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalProductos">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Recetas -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Recetas</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-book-open-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalRecetas">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Proveedores -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Proveedores</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-truck-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalProveedores">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Clientes -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Clientes</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-group-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalClientes">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Compras -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Compras</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-wallet-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalCompras">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Ventas -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Ventas</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-money-dollar-circle-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalVentas">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Usuarios -->
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Total Usuarios</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-user-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" id="totalUsuarios">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Ventas</h5>
                            <h2 id="totalVentas1">0</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Compras</h5>
                            <h2 id="totalCompras1">0</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Comparación de Ventas y Compras (Últimos 6 meses)</h4>
                            <div id="ventasComprasChart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Gráfico de Ventas por Producto -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Distribución de Ventas por Producto</h4>
                            <div id="ventasProductosChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Gráfico de Compras por Producto -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Distribución de Compras por Producto</h4>
                            <div id="comprasProductosChart"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Gráfico de Top Clientes -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Top 5 Clientes con Mayor Monto de Ventas ($)</h4>
                            <div id="topClientesChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Gráfico de Top Proveedores -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Top 5 Proveedores con Mayor Monto de Compras ($)</h4>
                            <div id="topProveedoresChart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
