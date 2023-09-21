@extends('layouts.app') 


@section('title', 'Nuevo Cliente')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Crear Cliente</h1>
     
   </div>
</div>
@endsection

@section('content')

  <!-- Begin page content -->
  <main role="main" class="container">

      <!-- Incluye errores si existen -->
      @include('partials/errors')

      <!-- Formulario -->
      {{ Form::open(['route'=>'clientes.store', 'method'=>'post']) }}
     
   
      <div class="large-6 small-12 columns">
          <div class="form-group">
          {{Form::label('nombre', 'Nombre:')}}
          {{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'required' => 'required'])}}
          </div>
          <div class="form-group">
          {{Form::label('apellidos:', 'Apellidos:')}}
          {{Form::text('apellidos', old('apellidos'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('telefono:', 'Teléfono:')}}
          {{Form::tel('telefono', old('telefono'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('ciudad', 'Ciudad:')}}
          {{Form::text('ciudad', old('ciudad'), ['class' => 'form-control'] )}}
          </div>
          <div class="form-group">
          {{Form::label('dni:', 'DNI:')}}
          {{Form::text('dni', old('dni'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('email:', 'Email:')}}
          {{Form::email('email', old('email'), ['class' => 'form-control', 'placeholder'=>'nombre@email.es', 'required' => 'required' ])}}
          </div>
          <!--  <div class="form-group">
          {{Form::label('fechaalta', 'Fecha Alta:')}}
          {{Form::date('fechaalta', old('fechaalta'), ['class' => 'form-control'] )}}
          </div> -->
          
          <div class="form-group">
          <button type="button" class="btn btn-default"> <a href="{{ route('clientes.index') }}">Cancelar</a></button>
         
          {{Form::reset('Borrar', ['class' => 'btn btn-default']) }}
          {{Form::submit('Registrar', ['class' => 'btn btn-primary']) }}
          
          </div>
      </div>
  {{ Form::close() }}

    
    
          
          
    </section>
  </main>
 
@endsection
