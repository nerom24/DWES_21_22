@extends('layouts.app') 


@section('title', 'Cuentas')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Cuentas</h1>
     
   </div>
</div>
@endsection

@section('content')
  <!-- Begin page content -->
  <main role="main" class="container">

    @include('flash::message')
    
    <!-- Menú del listado de clientes -->
    @include('cuentas.partials.navcuentas')


    
    <section>
        
          <table class="table">
            <thead>
              <!-- <legend>Tabla de Cuentas</legend> -->
              <tr>
                <th>#</th>
                <th>IBAN</th>
                <th>Cliente</th>
                <th>Ultimo Mov</th>
                <th>Saldo</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              
              @foreach ($cuentas as $cuenta)
                <tr>
                    <td>{{$cuenta->id}} </td>
                    <td>{{$cuenta->iban}}</td>

                    <td>    
                        {{$cuenta->cliente->apellidos}} 
                        {{$cuenta->cliente->nombre}}
                    </td>
                    
                    
                    <td>{{$cuenta->fechaUMov}}</td>
                    <td>{{$cuenta->saldo}}</td>

                    <!-- Botones de acción -->
                    <td>
                      
                    <div class="btn-group">

                    @if (Auth::user()->hasAnyRole(['admin']))
            
                        <a href="#" class="btn btn-link disabled" Title="Editar"><i class="material-icons md-18">edit</i></a>        
                    
                    @endif

                    @if (Auth::user()->hasAnyRole(['admin', 'user']))
                      
                        <a href="{{ route('cuentas.show', $cuenta->id) }}" class="btn btn-link" Title="Mostrar"><i class="material-icons md-18">remove_red_eye</i></a>  
                    
                    @endif
                            
                     @if (Auth::user()->hasAnyRole(['admin']))
                        
                        <a href="{{ route('cuentas.destroy', $cuenta->id) }}" onclick="return confirm('Confirmar eliminación de Cuenta')" 
                        class="btn btn-link" title="Eliminar"><i class="material-icons md-18">deleted</i></a>

                      
                    @endif 

                    @if (Auth::user()->hasAnyRole(['admin', 'user']))
                      
                        <a href="{{ route('movimientos.index', $cuenta) }}" class="btn btn-link " Title="Movimientos"><i class="material-icons md-18">format_list_bulleted</i></a>  
                    
                    @endif  

                    </div>   

                    </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>

          @include('cuentas.partials.paginado')
          
          <!-- @component('alert')
              <strong>Whoops!</strong> Something went wrong!
          @endcomponent -->
          
    </section>
  </main>
 
@endsection
