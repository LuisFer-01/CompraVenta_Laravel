@extends('layouts.app')

@section('title', 'Mantenimiento de Categorías')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Listar Categorias</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                <li class="breadcrumb-item active">Categoria</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            </br>
                            <h1 class="mb-4">Categorías</h1>

                            <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nueva Categoría</a>
                            
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <table id="categoriasTable" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorias as $categoria)
                                        <tr>
                                            <td>{{ $categoria->id }}</td>
                                            <td>{{ $categoria->name }}</td>
                                            <td>{{ $categoria->description ?? 'Sin descripción' }}</td>
                                            <td>
                                                <span class="badge bg-{{ $categoria->status == 'active' ? 'success' : 'danger' }}">
                                                    {{ $categoria->status == 'active' ? 'Disponible' : 'No Disponible' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                                @if($categoria->status == 'active')
                                                    <button class="btn btn-danger btn-sm" onclick="confirmarEliminacion({{ $categoria->id }})">Deshabilitar</button>
                                                @else
                                                    <form action="{{ route('categorias.activar', $categoria->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-success btn-sm">Habilitar</button>
                                                    </form>
                                                @endif
                                                
                                                <form id="delete-form-{{ $categoria->id }}" action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection

@push('scripts')
    <!-- Script para inicializar DataTables -->
    <script>
        $(document).ready(function () {
            $('#categoriasTable').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay datos disponibles",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ categorías",
                    "infoEmpty": "Mostrando 0 a 0 de 0 categorías",
                    "infoFiltered": "(filtrado de _MAX_ categorías totales)",
                    "lengthMenu": "Mostrar _MENU_ categorías",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron coincidencias",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });

        //SweetAlert2 para eliminar categoria
        function confirmarEliminacion(id) {
            Swal.fire({
                title: "¿Desactivar esta categoría?",
                text: "Podrás reactivarla cuando quieras.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Sí, desactivar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("delete-form-" + id).submit();
                }
            });
        }
    </script>
@endpush
