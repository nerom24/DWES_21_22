@extends('layouts.app') 


@section('title', 'Añadir Movimiento')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Añadir Movimiento</h1>
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
      {{ Form::open(['route'=>'movimientos.store', 'method'=>'POST']) }}
     
      
      <div class="large-6 small-12 columns">

          {{ Form::hidden('cuenta_id', $cuenta->id) }}
          
          <div class="form-group">
            
            {{Form::label('tipo', 'Seleccione Tipo de Operación:')}}
           
            </br>

            {{Form::radio('tipo', 'I', true, ['class' => 'form-group', 'required' => 'required'] )}}
            {{Form::label('tipo', 'Ingreso' )}}

            </br>
            
            {{Form::radio('tipo', 'R', false, ['class' => 'form-group'] )}}
            {{Form::label('tipo', 'Rintegro' )}}
            
              
          </div>

        

          <div class="form-group">
          {{Form::label('concepto', 'Concepto:')}}
          {{Form::text('concepto', old('concepto'), ['class' => 'form-control', 'required' => 'required'])}}
          </div>
          
          
          </div>
          <div class="form-group">
          {{Form::label('cantidad:', 'Cantidad:')}}
          {{Form::number('cantidad', old('cantidad'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          
          <div class="form-group">
          <button type="button" class="btn btn-default"> <a href="{{ route('movimientos.index', $cuenta->id) }}">Cancelar</a></button>
         
          {{Form::reset('Borrar', ['class' => 'btn btn-default']) }}
          {{Form::submit('Registrar', ['class' => 'btn btn-primary']) }}
          
          </div>
      </div>
      {{ Form::close() }}

    
    
          
          
    </section>
  </main>
 
@endsection
