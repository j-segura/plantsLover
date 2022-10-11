@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de plantas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="card-header pl-0">
                <a href="{{ route('admin.plants.create') }}" class="btn btn-secondary">Agregar nueva planta</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plants as $plant)
                        <tr>
                            <td>{{ $plant->id }}</td>
                            <td>
                                <img src="/img/products/{{ $plant->foto }}" class="img_foto_admin">
                            </td>
                            <td>{{ $plant->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.plants.edit', $plant) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.plants.destroy', $plant) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<style>
    .img_foto_admin {
        width: 150px;
        height: 190px;
        object-fit: cover;
    }
</style>