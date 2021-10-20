@include('nav_admin')
	
	<div class="container_fluid p-3 my-3 bg-dark text-white" >
		<h1>Datos de registro jornada</h1> <br><br>
	
	  <nav class="navbar " id="mainNav">
		
	  <button type="button" id="boton1"class="btn btn-primary" data-toggle="modal" data-target="#jornada_agregar">
	  Registro
	  </button>
	  
	  </nav>
		</div>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">horario</th>
      <th scope="col">horario</th>
      
      
      
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
      	

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jornada_actualizar">
 	 editar
	</button>
       <td>
     
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jornada_eliminar">
 	 Eliminar
	</button>


       </td>

 
    </tr>
    


  </tbody>
</table>
@include('jornada.jornada_agregar')
@include('jornada.jornada_eliminar')

@include('jornada.jornada_actualizar')








</body>

</html>

