
<!doctype html>
<html lang="es">
<!-- incluye head  -->  
@include('partials.head');
  <body>
 
  <!--  sección cabecera -->
  
 <div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-5">@yield('cabecera')</h1>
   </div>
 </div>


  <!-- sección menú -->
  @section('menu')
      @include('partials.menu')
  @show
  
  <!-- sección menú -->
  @yield('submenu')
  
  <!-- Begin page content -->
  
  @yield('contenido')
  
  
  <!-- muestra footers -->
  @include('partials.footer')

  <!-- jsquery -->
  @include('partials.jsbootstrap')

  </body>
</html>
