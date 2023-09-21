@extends('layouts.app') 


@section('title', 'Nuevo Cuenta')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Añadir Cuenta</h1>
     
   </div>
</div>
@endsection

@section('content')

  <!-- Begin page content -->
  <main role="main" class="container">

      <!-- Incluye errores si existen -->
      @include('partials/errors')

      <!-- Formulario -->
      {{ Form::open(['route'=>'cuentas.store', 'method'=>'post']) }}
     
   
      <div class="large-6 small-12 columns">
          
          <div class="form-group">
          {{Form::label('cliente', 'Seleccione Cliente:')}}
          {{Form::select('cliente_id', $clientes, null, ['class' => 'form-control', 'required' => 'required'] )}}
          </div>

          <!-- <div class="form-group">
          {{Form::label('cliente_id:', 'Cliente:')}}
          {{Form::number('cliente_id', old('cliente_id'), ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div> -->

          <div class="form-group">
          {{Form::label('iban', 'IBAN:')}}
          {{Form::text('iban', old('iban'), ['class' => 'form-control', 'required' => 'required'])}}
          </div>
          
          
          
          </div>
          <div class="form-group">
          {{Form::label('saldo:', 'Saldo:')}}
          {{Form::number('saldo', old('saldo'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          
          <div class="form-group">
          <button type="button" class="btn btn-default"> <a href="{{ route('cuentas.index') }}">Cancelar</a></button>
         
          {{Form::reset('Borrar', ['class' => 'btn btn-default']) }}
          {{Form::submit('Registrar', ['class' => 'btn btn-primary']) }}
          
          </div>
      </div>
  {{ Form::close() }}

    
    
          
          
    </section>
  </main>
 
@endsection
