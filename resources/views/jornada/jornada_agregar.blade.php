
 <div class="modal" id="jornada_agregar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

    <form class="needs-validation" name="form_agregar" id="form_agregar"  action="/jornadas" method="POST" novalidate>
       @csfr
        @method('put')

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
      <label for="id">ID</label>
      <input type="number"  class="form-control" id="id" name="id" placeholder="" readonly >
      <!-- hidden: esconde el id, diabled: para que no se vea  -->
      <div class="valid-feedback">
      </div><br>
    </div>
     <!--Deben cambiarse los name y id  -->


      <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">ID empleado</label>
      <input type="number"  class="form-control" id="id_emple" name="id_emple" placeholder=""  >
      <!-- hidden: esconde el id, diabled: para que no se vea  -->
      <div class="valid-feedback">
      </div><br>
    </div>


   
  
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Horario</label>
      <input type="text" class="form-control" id="horario" name="horario" placeholder="00:00"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <br>

 
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