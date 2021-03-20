

<!DOCTYPE html>
<html>
<head>
	<title>Registro empleado</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <div class="container_fluid p-3 my-3 bg-dark text-white" >
	<h1>Datos de registro empleado</h1> <br><br>

  <nav class="navbar " id="mainNav">
	<a class="btn btn-primary" href="../../login/index.php?">Salir</a><br>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_agregar">
  Registro
  </button>
  </nav>
	</div>

</head>

	



<body>
	



	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre completo</th>
      <th scope="col">Rfc</th>
      <th scope="col">Cel</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  

    <tr>
      
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

      
      <td>
      	

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_actualizar">
 	 editar
	</button>
       <td>
     
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_eliminar">
 	 Eliminar
	</button>


       </td>

 
    </tr>
    


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
        <form class="needs-validation" name="form_actualizar" action="../back/controlador_empleado.php" method="POST" novalidate>
         <input type="hidden" value="3"  name="opcion" >


<!-- un bloque -->

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">Id</label>
      <input type="number"  class="form-control" id="id_act" name="id_act" value="" placeholder="0000" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea,   -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->



    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo_act" value="" name="nombre_completo_act" placeholder="Jose Lopez" required><br>
     <div class="valid-feedback">  
    </div>
  </div><br>
  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">RFC</label>
      <input type="text" class="form-control" id="rfc_act" name="rfc_act" value="" placeholder="Ejemplo:GOMC0110A010"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <br>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Cel</label>
      <input type="text" class="form-control" id="cel_act" name="cel_act" value="" required>
      <div class="valid-feedback">
      </div><br>
    </div>

  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Correo</label>
      <input type="text" class="form-control" id="correo_act" name="correo_act"  value="" required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Direccion</label>
      <input type="text" class="form-control" id="direccion_act" name="direccion_act"  value="" required>
      <div class="valid-feedback">
      </div><br>
  </div>
   
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Edad</label>
      <input type="text" class="form-control" id="edad_act" name="edad_act" value="" required>
      <div class="valid-feedback"><br>
      </div>
    </div>
 
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sexo</label>
      <select class="form-control" id="sexo_act" name="sexo_act" value=""  required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
      </select>
     
      <div class="valid-feedback"><br>
      </div>
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
     
       <label for="id">Id</label>
      <input type="numer"  class="form-control" id="id_elim" name="id_elim" value="" readonly >
      <div class="valid-feedback">
      </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">

      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo_elim" value="" name="nombre_completo_elim" placeholder="Jose Lopez" readonly><br>
      <div class="valid-feedback">  
      </div>
      </div>
      <br>
    </div>
      <br>
     
      
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<!-------------------------------------ACTUALIZAR------------------------------------------->
<div class="modal" id="empleado_agregar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

    <form class="needs-validation" name="form_agregar" id="form_agregar" action="../back/controlador_empleado.php" method="POST" novalidate>

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
      <label for="validationCustom01">Edad</label>
      <input type="text" class="form-control" id="edad" name="edad"  required>
      <div class="valid-feedback"><br>
      </div>
    </div>
 
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sexo</label>
      <select id="sexo" name="sexo" class="form-control" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
      </select>
      
      <div class="valid-feedback"><br>
      </div>
    </div>
  
    </div>
  
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

