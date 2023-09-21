@extends('layouts.app') 


@section('title', 'Mostrar Cliente')

@section('cabecera')
<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">Mostrar Cliente</h1>
     
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
          {{Form::label('nombre', 'Nombre:')}}
          {{Form::text('nombre', $cliente->nombre, ['class' => 'form-control', 'readonly' => 'readonly'])}}
          </div>
         <div class="form-group">
          {{Form::label('apellidos:', 'Apellidos:')}}
          {{Form::text('apellidos', $cliente->apellidos , ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
          </div>
          <div class="form-group">
          {{Form::label('telefono:', 'Teléfono:')}}
          {{Form::tel('telefono', $cliente->telefono, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>
          <div class="form-group">
          {{Form::label('ciudad', 'Ciudad:')}}
          {{Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control', 'readonly' => 'readonly'] )}}
          </div>
          <div class="form-group">
          {{Form::label('dni:', 'DNI:')}}
          {{Form::text('dni', $cliente->dni, ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
          </div>
          <div class="form-group">
          {{Form::label('email:', 'Email:')}}
          {{Form::email('email', $cliente->email, ['class' => 'form-control', 'placeholder'=>'nombre@email.es', 'readonly' => 'readonly' ])}}
          </div>
          <div class="form-group">
          {{Form::label('fechaalt', 'Fecha Alta:')}}
          {{Form::text('fechaalt', $cliente->fechaalt, ['class' => 'form-control', 'readonly' => 'readonly']) }}
          </div>
          <div class="form-group">
          <a href="{{ route('clientes.index') }}" class="btn btn-default">Volver</a>
          
          
          </div>
      </div> 
  {{ Form::close() }}

    
    
          
          
    </section>
  </main>
 
@endsection
