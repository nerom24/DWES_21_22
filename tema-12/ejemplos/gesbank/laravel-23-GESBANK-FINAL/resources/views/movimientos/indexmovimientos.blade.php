@extends('layouts.app') 


@section('title', 'Movimientos')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Movimientos</h1>
     <h5> Cuenta: {{ $cuenta->iban}}</br>
          Cliente: {{$cliente->nombre}} {{$cliente->apellidos}} {{$cliente->dni}}</br>
          Saldo: {{$cuenta->saldo}}
     </h5>
     
   </div>
</div>
@endsection

@section('content')
  <!-- Begin page content -->
  <main role="main" class="container">

    @include('flash::message')
    
    <!-- Menú del listado de clientes -->
    @include('movimientos.partials.navmovimientos')

    <section>
        
          <table class="table">
            <thead>
              <!-- <legend>Tabla de Cuentas</legend> -->
              <tr>
                <th>#</th>
                <th>Fecha Hora</th>
                <th>Tipo</th>
                <th>Conecepto</th>
                <th>Cantidad</th>
                <th>Saldo</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              
              @forelse ($movimientos as $movimiento)

                <tr>
                    <td>{{$movimiento->numMovimiento}} </td>
                    <td>{{$movimiento->fechaHora}}</td>
                    <td>{{$movimiento->tipo}}</td>
                    <td>{{$movimiento->concepto}}</td>
                    <td>{{$movimiento->cantidad}}</td>
                    <th>{{$movimiento->saldo}}</th>



                    <!-- Botones de acción -->
                    <td>
                      
                    <div class="btn-group">

                    @if (Auth::user()->hasAnyRole(['admin']))
            
                        <a href="#" class="btn btn-link disabled" Title="Editar"><i class="material-icons md-18">edit</i></a>        
                    
                    @endif

                    @if (Auth::user()->hasAnyRole(['admin', 'user']))
                      
                        <a href="{{ route('movimientos.show', $movimiento) }}" class="btn btn-link" Title="Mostrar"><i class="material-icons md-18">remove_red_eye</i></a>  
                    
                    @endif
                            
                    @if (Auth::user()->hasAnyRole(['admin']))
                        
                        <a href="#" onclick="return confirm('Confirmar eliminación de Cuenta')" 
                        class="btn btn-link disabled" title="Eliminar"><i class="material-icons md-18">deleted</i></a>

                      
                    @endif 

                   

                    </div>   

                    </td>
                </tr>
              @empty
                <tr><td colspan="7">Sin movimientos..</td></tr>
              @endforelse
              
            </tbody>
          </table>

          @include('movimientos.partials.paginado')
          
          <!-- @component('alert')
              <strong>Whoops!</strong> Something went wrong!
          @endcomponent -->
          
    </section>
  </main>
 
@endsection
