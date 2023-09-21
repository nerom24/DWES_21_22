@extends('layouts.layout')

{{-- @section('titulo', 'Home Artículos') --}}

@section('contenido')
    @include('partials.alerts')
    @include('articulos.partials.menu')


    {{-- Lista de artículos --}}

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Modelo</th>
                <th>Categoría</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($articulos as $articulo) 
            <tr>
                <td scope="row">{{ $articulo['id']  }}</td>
                <td>{{ $articulo['descripcion']  }}</td>
                <td>{{ $articulo['modelo']  }}</td>
                <td>{{ $articulo->categoria->descripcion  }}</td>
                <td>{{ $articulo['unidades']  }}</td>
                <td>{{ $articulo['precio']  }}</td>
                <td>
                    <a href={{route('articulos.edit', $articulo->id)}} title="Editar"><i class="bi bi-pencil-square"></i></a>
                    <a href={{route('articulos.show', $articulo->id)}} title="Mostrar" ><i class="bi-eye"></i></a>
                    <a href={{route('articulos.delete', $articulo->id)}} title="Eliminar" onclick="return confirm('Confimar elimación del corredor')"><i class="bi-trash"></i></a>
                    

                </td>
            </tr>
        @empty 
            <li>No hay artículos registrados.</li> 
        @endforelse
        </tbody>
    </table>
    {{-- Fin lista --}}
    <br><br><br>

@endsection