<?php

?>

   <div class="modal" id="jornada_eliminar<?php echo $mostrar['id']?>" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
         <form class="needs-validation" name="form_eliminar" action="../back/controlador_jornada.php" method="POST" novalidate>
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
      <input type="numer"  class="form-control" id="id_elim" name="id_elim" value="<?php echo $mostrar['id']?>" readonly >
      <div class="valid-feedback">
      </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">

      <label for="validationCustom02">Id empleado</label>
      <input type="text" class="form-control" id="id_empleado_elim" value="<?php echo $mostrar['id_empleado']?>" name="id_empleado_elim" placeholder="Jose Lopez" readonly><br>
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





