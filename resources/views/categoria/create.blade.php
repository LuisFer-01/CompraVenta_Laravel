@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Crear Categoria</h4>

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
                        <div class="container">
                            </br>
                            <h1 class="mb-4">Nueva Categoría</h1>

                            <form action="{{ route('categorias.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Descripción (Opcional)</label>
                                    <textarea name="description" class="form-control" id="description"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
                                </br>
                                </br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection