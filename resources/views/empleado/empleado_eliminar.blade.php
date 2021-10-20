<!----------------------------------ELIMINAR-------------------------------------------->

{{--@if($empleado=Session::get('empleado')&& $action2=Session::get('action2'))
--}}


@if($empleado = Session::get('empleado'))
    
        @if($action2 = Session::get('action2'))
<script>

    $(document).ready(function()
      {
      alert("entre a eliminar");
      $('#empleado_eliminar').modal('show');
   //});
        });
</script>


<script>

$(document).ready(function(){
  alert('eliminar');
  $('#empleado_eliminar').modal('show');
});

</script>

 <div class="modal" id="empleado_eliminar" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
         <form class="needs-validation" name="form_eliminar" action="/prueba/public/empleados/{{$empleado->id}}" method="POST" novalidate>
      <div class="modal-header">
        @csrf
        @method('DELETE')

        <h5 class="modal-title">Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        

     
      <input type="hidden" name="id" id="id" value="{{ $empleado->id }}" name="opcion" >

  <div class="form-row">
    <div class="col-md-4 mb-3">
     
       <label for="id">ID</label>
      <input type="numer"  class="form-control" id="id" name="id" value="{{ $empleado->id }}" readonly >
      <div class="valid-feedback">
      </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">

      <label for="validationCustom02">Nombre completo</label>
      <input type="text" class="form-control" id="nombre_completo" value="{{ $empleado->nombre_completo }}" name="nombre_completo" placeholder="" readonly><br>
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

@endif
@endif