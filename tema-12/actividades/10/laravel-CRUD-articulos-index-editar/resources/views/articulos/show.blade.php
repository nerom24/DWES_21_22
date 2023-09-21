@extends('layouts.layout')

{{-- @section('titulo', 'Home Artículos') --}}

@section('contenido')
    @include('partials.alerts') 
    <div class="card">
        <div class="card-header">
          Formulario Mostrar Artículo
        </div>
        <div class="card-body">
           <!-- Formulario  -->

            <form>
              
                <!-- Descripción  -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ $articulo->descripcion }}" readonly>
                   
                </div>
                <!-- Modelo  -->
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" name="modelo" value="{{ $articulo->modelo }}" readonly>
                    
                </div>
                <!-- Código  -->
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" value="{{ $articulo->codigo }}" readonly>
                   
                </div>

                <!-- categoria  -->
                <div class="mb-3">
                    <label for="codigo" class="form-label">Categoria</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $articulo->categoria->descripcion }}" readonly>
                   
                </div>

                <!-- Stock  -->
                <div class="mb-3">
                    <label for="stock" class="form-label">Unidades</label>
                    <input type="number" class="form-control" name="unidades" value="{{ $articulo->unidades }}" readonly>
                    
                </div>
                <!-- Precio  -->
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio (€)</label>
                    <input type="number" class="form-control " name="precio" step="0.01" value="{{ $articulo->precio }}" readonly>
                   
                </div>
        

        {{-- Fin Formulario --}}
    
            </div>
        
        <div class="card-footer text-muted">
             <!-- Botones de acción --------------------------------------------------->
            <a class="btn btn-secondary" href="{{ route ('articulos')}}" role="button">Volver</a>
        </div>
        <br><br><br><br>
    </form>
    </div>



@endsection