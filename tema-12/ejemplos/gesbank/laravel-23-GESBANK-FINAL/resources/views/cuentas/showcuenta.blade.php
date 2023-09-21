@extends('layouts.app') 


@section('title', 'Detalles de Cuenta')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Detalles de Cuenta</h1>
     
   </div>
</div>
@endsection

@section('content')

  <!-- Begin page content -->
  <main role="main" class="container">

      <!-- Formulario -->
      {{ Form::open() }}
 
          <div class="large-6 small-12 columns">

          <div class="form-group">
          {{Form::label('cliente_id:', 'Id Cliente:')}}
          {{Form::number('cliente_id', $cuenta->cliente_id, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>


          <div class="form-group">
          {{Form::label('cliente', 'Cliente:')}}
          {{Form::text('cliente', $cuenta->Cliente->apellidos. ', '. $cuenta->cliente->nombre, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>

          <div class="form-group">
          {{Form::label('iban', 'IBAN:')}}
          {{Form::text('iban', $cuenta->iban, ['class' => 'form-control', 'readonly' => 'readonly'])}}
          </div>
         
          <div class="form-group">
          {{Form::label('fechaUMov:', 'Fecha Último Movimiento:')}}
          {{Form::tel('fechaUMov', $cuenta->fechaUMov, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>

          <div class="form-group">
          {{Form::label('numMvtos:', 'Número de Movimientos:')}}
          {{Form::number('NumMvtos', $cuenta->numMvtos , ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
          </div>

          <div class="form-group">
          {{Form::label('saldo:', 'Saldo:')}}
          {{Form::number('saldo', $cuenta->saldo , ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
          </div>

          <div class="form-group">
          <a href="{{ route('cuentas.index') }}" class="btn btn-default">Volver</a>
          
          
          </div>
      </div> 
  {{ Form::close() }}

    
    
          
          
    </section>
  </main>
 
@endsection
