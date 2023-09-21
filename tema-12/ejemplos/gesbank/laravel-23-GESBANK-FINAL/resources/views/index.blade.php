@extends('layouts.app')

@section('title', 'Principal')


@section('cabecera')

<div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">GESBANK</h1>
     <p class="lead">Bienvenidos a GESBANK. Aplicación para la gestión de Clientes, Cuentas y Movimientos</p>
   </div>
</div>
 
      
  
@endsection

@section('content')

  <main role="main" class="container">
      <section>
          
            <img src="{{asset('images/tecno_bancaria.jpg')}}" class="img-fluid" alt="Responsive image" width="100%">

          </section>
  </main>

@endsection

