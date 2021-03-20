

	  
	
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
  
      @foreach ($lista as $emp)

    <tr>
      <td>{{ $emp->id }}</td>
      <td>{{ $emp->nombre_completo }}</td>
      <td>{{ $emp->rfc }}</td>
      <td>{{ $emp->cel }}</td>
      <td>{{ $emp->correo }}</td>    
      <td>{{ $emp->direccion }}</td>
      <td>{{ $emp->tipo_empleado }}</td>
      <td><a href="" class="btn btn-primary"></a></td>
      <td><a href="" class="btn btn-primary"></a></td>
      <!--
      <td>
      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_actualizar">
 	    editar
	     </button>
       <td>
      
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_eliminar">
     	 Eliminar
    	</button>


       </td>
      -->
 
        </tr>
       @endforeach


  </tbody>
</table>


<!------------------------------------ACTUALIZAR--------------------------------------------->

 <div class="modal" id="empleado_actualizar" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">

    

      <div class="modal-header">
        <h2 class="modal-title">Actualizar datos </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
     <!--copiado de formato de validacion colocar input -->
        <form class="needs-validation" name="form_actualizar" action="empleados" method="POST" novalidate>
         <input type="hidden" value="3"  name="opcion" >


<!-- un bloque -->

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">ID</label>
      <input type="number"  class="form-control" id="id" name="id" value="{{ $empleado->id }}" placeholder="0000" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea,   -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->



    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo" value="{{ $empleado->nombre_completo }}" name="nombre_completo" placeholder="Jose Lopez" required><br>
     <div class="valid-feedback">  
    </div>
  </div><br>
  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">RFC</label>
      <input type="text" class="form-control" id="rfc" name="rfc" value="{{ $empleado->rfs }}" placeholder="Ejemplo:GOMC0110A010"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <br>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Cel</label>
      <input type="text" class="form-control" id="cel" name="cel" value="{{ $empleado->cel }}" required>
      <div class="valid-feedback">
      </div><br>
    </div>

  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Correo</label>
      <input type="text" class="form-control" id="correo" name="correo"  value="{{ $empleado->correo }}" required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Direccion</label>
      <input type="text" class="form-control" id="direccion" name="direccion"  value="{{ $empleado->direccion }}" required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Tipo empleado</label>
      <input type="text" class="form-control" id="tipo_empleado" name="tipo_empleado" value="{{ $empleado->tipo_empleado }}" required>
      <div class="valid-feedback"><br>
      </div>
    </div>
 
   
     
      <div class="valid-feedback"><br>
      </div>
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>



    </form>
    
  
 


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

      </div>
      
      
    </div>
  </div>
</div>


<!----------------------------------ELIMINAR-------------------------------------------->
 <div class="modal" id="empleado_eliminar" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
         <form class="needs-validation" name="form_eliminar" action="../back/controlador_empleado.php" method="POST" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        

     
      <input type="hidden" value="4" name="opcion" >

  <div class="form-row">
    <div class="col-md-4 mb-3">
     
       <label for="id">ID</label>
      <input type="numer"  class="form-control" id="id" name="id" value="" readonly >
      <div class="valid-feedback">
      </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">

      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo" value="" name="nombre_completo" placeholder="" readonly><br>
      <div class="valid-feedback">  
      </div>
      </div>
      <br>
    </div>
      <br>
     
      
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>   
 


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      </div>
      </form>
    </div>
  </div>
</div>

<!-------------------------------------Agregar------------------------------------------->
<div class="modal" id="empleado_agregar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

    <form class="needs-validation" name="form_agregar" id="form_agregar" action="empleados" method="POST" novalidate>

      <div class="modal-header">
        <h2 class="modal-title">Datos </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
     <!--copiado de formato de validacion colocar input -->
      
         <input type="hidden" value="2"  name="opcion" >



<!-- un bloque -->

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">Id</label>
      <input type="number"  class="form-control" id="id" name="id" placeholder="000000" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea  -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->



    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Jose Lopez" required><br>
     <div class="valid-feedback">
    </div>
  </div><br>
  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">RFC</label>
      <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ejemplo:GOMC0110A010"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <br>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Cel</label>
      <input type="text" class="form-control" id="cel" name="cel"  required>
      <div class="valid-feedback">
      </div><br>
    </div>

  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Correo</label>
      <input type="text" class="form-control" id="correo" name="correo"  required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Direccion</label>
      <input type="text" class="form-control" id="direccion" name="direccion"  required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Tipo empleado</label>
      <input type="text" class="form-control" id="tipo_empleado" name="tipo_empleado"  required>
      <div class="valid-feedback"><br>
      </div>
    </div>
 
   
      
      <div class="valid-feedback"><br>
      </div>
    </div>
  
    </div>
  
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn ">Agregar</button>
      </div>
      </form>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>





      </div>
      
    </div>
  </div>
</div>



</body>

</html>

