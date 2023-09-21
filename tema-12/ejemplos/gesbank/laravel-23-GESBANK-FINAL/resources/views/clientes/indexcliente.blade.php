@extends('layouts.app') 


@section('title', 'Listado de Clientes')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Listado de Clientes</h1>
     
   </div>
</div>
@endsection

@section('content')
  <!-- Begin page content -->
  <main role="main" class="container">

    @include('flash::message')
    
    <!-- Menú del listado de clientes -->
    @include('clientes.partials.navindexcliente')


    
    <section>
        
          <table class="table">
            <thead>
              <!-- <legend>Tabla de Clientes</legend> -->
              <tr>
                <th>#</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              
              @foreach ($clientes as $key =>$cliente)
                <tr>
                    <td>{{$cliente->id}} </td>
                    <td>{{$cliente->apellidos}} </td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->ciudad}}</td>
                    <td>{{$cliente->email}}</td>

                    <!-- Botones de acción -->
                    <td>
                      
                        <div class="btn-group">

                    @if (Auth::user()->hasAnyRole(['admin']))
            
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-link" Title="Editar"><i class="material-icons md-18">edit</i></a>        
                    
                    @endif

                    @if (Auth::user()->hasAnyRole(['admin', 'user']))
                      
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-link" Title="Mostrar"><i class="material-icons md-18">remove_red_eye</i></a>  
                    
                    @endif
                            
                     @if (Auth::user()->hasAnyRole(['admin']))
                        
                        <a href="{{ route('clientes.destroy', $cliente->id) }}" onclick="return confirm('Confirmar eliminación de Cliente')" 
                        class="btn btn-link" title="Eliminar"><i class="material-icons md-18">deleted</i></a>

                      </div> 
                    @endif     

                    </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>

          @include('clientes.partials.paginado')
          
          <!-- @component('alert')
              <strong>Whoops!</strong> Something went wrong!
          @endcomponent -->
          
    </section>
  </main>
 
@endsection
