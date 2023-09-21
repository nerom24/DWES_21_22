<header>
  <h1>Gesbank</h1>
  <hr>
</header>

<h2>Listado de Clientes</h2>
<hr>    
        
<table class="table">
  <thead>
    <!-- <legend>Tabla de Clientes</legend> -->
    <tr>
      <th>#</th>
      <th>Apellidos</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Ciudad</th>
      <th>Email</th>
      
    </tr>
  </thead>

  <tbody>
    
    @foreach ($clientes as $cliente)
      <tr>
          <td>{{$cliente->id}} </td>
          <td>{{$cliente->apellidos}} </td>
          <td>{{$cliente->nombre}}</td>
          <td>{{$cliente->telefono}}</td>
          <td>{{$cliente->ciudad}}</td>
          <td>{{$cliente->email}}</td>

          <!-- Botones de acción -->
          
      </tr>
    @endforeach
    
  </tbody>
</table>
<footer>
  <hr>
  Página 1
</footer>

        
      
          

 

