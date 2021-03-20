<?php 

 ?>
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