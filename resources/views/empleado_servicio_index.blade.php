

	  
	
  @include('nav_admin')
  
  
  


	<div class="container_fluid p-3 my-3 bg-dark text-white" >
    <h1>Servicio por empleado</h1> <br><br>

   
      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_servicio_agregar">
      Registro
      </button>
    

    </div>



	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID Servicio</th>
      <th scope="col">ID Empleado</th>
      
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  

    <tr>
      
      <td></td>
      <td></td>
      <td></td>
      
    

      
      <td>
      	

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_servicio_actualizar">
 	 editar
	</button>
       <td>
     
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_servicio_eliminar">
 	 Eliminar
	</button>


       </td>

 
    </tr>
    


  </tbody>
</table>


<!------------------------------------ACTUALIZAR--------------------------------------------->

 <div class="modal" id="empleado_servicio_actualizar" tabindex="-1" >
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
      <label for="id">ID</label>
      <input type="number"  class="form-control" id="id_act" name="id_act" value="" placeholder="0000" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea,   -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->



    
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">ID Servicio</label>
      <input type="text" class="form-control" id="id_servicio_act" name="id_servicio_act" value="" required>
      <div class="valid-feedback"><br>
      </div>
      </div>

       <div class="col-md-6 mb-3">
      <label for="validationCustom01">ID empleado</label>
      <input type="text" class="form-control" id="id_empleado_act" name="id_empleado_act" value="" required>
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
 <div class="modal" id="empleado_servicio_eliminar" tabindex="-1">
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
      <input type="numer"  class="form-control" id="id_elim" name="id_elim" value="" readonly >
      <div class="valid-feedback">
      </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">

      <label for="validationCustom02">ID Servicio</label>
      <input type="text" class="form-control" id="id_servicio_elim" value="" name="id_servicio_elim" readonly><br>
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

<!-------------------------------------ACTUALIZAR------------------------------------------->
<div class="modal" id="empleado_servicio_agregar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

    <form class="needs-validation" name="form_agregar" id="form_agregar" action="../back/controlador_empleado.php" method="POST" novalidate>

      <div class="modal-header">
        <h2 class="modal-title">Agregar registro </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
     <!--copiado de formato de validacion colocar input -->
      
         <input type="hidden" value="2"  name="opcion" >



<!-- un bloque -->

  
     <!--Deben cambiarse los name y id  -->



     <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">ID</label>
      <input type="number"  class="form-control" id="id" name="id" value="" placeholder="" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea,   -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->



    
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">ID Servicio</label>
      <input type="text" class="form-control" id="id_servicio" name="id_servicio" value="" required>
      <div class="valid-feedback"><br>
      </div>
      </div>

       <div class="col-md-6 mb-3">
      <label for="validationCustom01">ID empleado</label>
      <input type="text" class="form-control" id="id_empleado" name="id_empleado" value="" required>
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

