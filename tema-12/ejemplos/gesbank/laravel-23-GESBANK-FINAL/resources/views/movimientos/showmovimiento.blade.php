@extends('layouts.app') 


@section('title', 'Detalles de Movimiento')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Detalles de Movimiento</h1>
      <h5>Cuenta....: {{$cuenta->id}} </br>
          IBAN.......: {{ $cuenta->iban}}</br>
          Cliente....: {{$cliente->nombre}} {{$cliente->apellidos}} {{$cliente->dni}}</br>
          Saldo......: {{$cuenta->saldo}}
     </h5>
   </div>
</div>
@endsection

@section('content')

  <!-- Begin page content -->
  <main role="main" class="container">

      <!-- Incluye errores si existen -->
      @include('partials/errors')

      <!-- Formulario -->
      {{ Form::open() }}
      
      <div class="large-6 small-12 columns">

          <!-- <div class="form-group">
          {{Form::label('cuenta', 'Cuenta:')}}
          {{ Form::number('cuenta_id', $movimiento->cuenta_id, ['class' => 'form-control', 'readonly' => 'readonly']) }}
          </div>
           -->
          <div class="form-group">
          {{Form::label('numMovimiento:', 'Número de Movimiento:')}}
          {{Form::number('saldo', $movimiento->numMovimiento, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>

          <div class="form-group">
          {{Form::label('fecha', 'Fecha Operación:')}}
          {{Form::text('fechahora', $movimiento->fechaHora, ['class' => 'form-control', 'readonly' => 'readonly']) }}
          </div>
          
          <div class="form-group">
            
            @php

              if ($movimiento->tipo == "I")
                  $operacion = "Ingreso";
              else
                  $operacion = "Reintegro";
           

            @endphp
          
          {{Form::label('tipo', 'Tipo de Operación:')}}
          {{Form::text('tipo', $operacion, ['class' => 'form-control', 'readonly' => 'readonly'])}} 
              
          </div>

        

          <div class="form-group">
          {{Form::label('concepto', 'Concepto:')}}
          {{Form::text('concepto', $movimiento->concepto, ['class' => 'form-control', 'readonly' => 'readonly'])}}
          </div>
          
          
         
          <div class="form-group">
          {{Form::label('cantidad:', 'Cantidad:')}}
          {{Form::number('cantidad', $movimiento->cantidad, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>

        
          <div class="form-group">
          {{Form::label('saldo:', 'Saldo:')}}
          {{Form::number('saldo', $movimiento->saldo, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>
          
          <div class="form-group">
          <button type="button" class="btn btn-default"> <a href="{{ route('movimientos.index', $cuenta->id) }}">Volver</a></button>
          </div>
      </div>
      {{ Form::close() }}
          
    </section>
  </main>
 
@endsection
