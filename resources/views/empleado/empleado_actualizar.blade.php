<!------------------------------------ACTUALIZAR--------------------------------------------->

@if($action = Session::get('action'))
    @if ($action=='editar')
        @if($empleado = Session::get('empleado'))
<script>
    $(document).ready(function(){
   //$("a").click(function(evento){
      //alert("Has pulsado el enlace...jejejeeEdit");
      $('#empleado_actualizar').modal('show');
   //});
});
</script>



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
        <form class="needs-validation" name="form_actualizar" action="/prueba/public/empleados/{{$empleado->id}}" method="POST" novalidate>
          @csrf
          @method('PUT')
         <input type="hidden" id="id" name="id"  value="3" >

         {{-- value="{{ $empleado->id }}" --}}
<!-- un bloque -->

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="id">ID</label>
      <input type="number"  class="form-control" id="id" name="id" value="{{ $empleado->id }}" placeholder="" readonly >
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
      <input type="text" class="form-control" id="rfc" name="rfc" value="{{ $empleado->rfc }}" placeholder="Ejemplo:GOMC0110A010"  required>
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

@endif
@endif
@endif