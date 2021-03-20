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
  	<?php 
  	$datos=$empleado->listar();
  	$mostrar=null;

  	foreach($datos as $mostrar){
  		//foreach se mueve entre los valores dentro del arreglo 
  		
  	 ?>
  	

    <tr>
      
      <td><?php echo $mostrar['id']?></td>
      <td><?php echo $mostrar['nombre_completo']?></td>
      <td><?php echo $mostrar['rfc']?></td>
      <td><?php echo $mostrar['cel']?></td>
      <td><?php echo $mostrar['correo']?></td>
      <td><?php echo $mostrar['direccion']?></td>
      <td><?php echo $mostrar['edad']?></td>
      <td><?php echo $mostrar['sexo']?></td>

      
      <td>
      	

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_actualizar<?php echo $mostrar['id']?>">
 	 editar
	</button>
       <td>
     
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado_eliminar<?php echo $mostrar['id']?>">
 	 Eliminar
	</button>


       </td>

 
    </tr>
    

<?php  

include "empleado_actualizar.php";
include "empleado_eliminar.php";

} 



?>

  </tbody>
</table>