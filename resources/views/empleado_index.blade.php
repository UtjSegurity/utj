

	  
	
  @include('nav_admin')
  
	
  
  
  @if($mensaje=Session::get('insertado'))
    <div class="alert alert-success" role="alert">
      <p>{{$mensaje}}</p>
    </div>
  @endif

  @if($mensaje=Session::get('eliminado'))
    <div class="alert alert-success" role="alert">
      <p>{{$mensaje}}</p>
    </div>
  @endif

  @if($mensaje=Session::get('actualizado'))
    <div class="alert alert-success" role="alert">
      <p>{{$mensaje}}</p>
    </div>
  @endif

  <div class="container_fluid p-3 my-3 bg-dark text-white" >
    <h1>Datos de registro empleado</h1> <br><br>

    <nav class="navbar " id="mainNav">
     

     

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_agregar">
      Registro
      </button>
      </nav>

    </div>



	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre completo</th>
      <th scope="col">Rfc</th>
      <th scope="col">Cel</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Tipo de empleado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
      @if (isset($lista_empleado))


      @foreach ($lista_empleado as $emp)

    <tr>
      <td>{{ $emp->id }}</td>
      <td>{{ $emp->nombre_completo }}</td>
      <td>{{ $emp->rfc }}</td>
      <td>{{ $emp->cel }}</td>
      <td>{{ $emp->correo }}</td>    
      <td>{{ $emp->direccion }}</td>
      <td>{{ $emp->tipo_empleado }}</td>
     
    
         <td><a href="empleados/{{ $emp->id }}/edit" class="btn btn-primary"></a>Editar</td>

      <td><a href="empleados/{{ $emp->id}}" class="btn btn-primary"></a>Eliminar</td>
      
        </tr>
       @endforeach
       @endif

  </tbody>
</table>
@include('empleado.empleado_eliminar')
@include('empleado.empleado_agregar')
@include('empleado.empleado_actualizar')
{{-- @include('empleado.empleado_actualizar')
 --}}








</body>

</html>

