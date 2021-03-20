<?php 
include "../back/conexion.php";
include "../back/empleado.php";
include "empleado_agregar.php";

$conexion= new Conexion();
$empleado = new empleado($conexion->get_conn());

$registro=null;

 ?>

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
	<?php 
	if (isset($_GET["mensaje"])) {
		# code...
	
	echo "<script>";

	echo "alert('".$_GET['mensaje']."');";
	echo "</script>";};



	 ?>



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






</body>

</html>

