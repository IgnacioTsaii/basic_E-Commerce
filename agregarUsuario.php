<?php  

	require 'funciones/conexion.php';
 	require 'funciones/funcionesUsuarios.php';
 	$chequeo= agregarUsuario();
	include 'includes/header.html';
	include 'includes/nav.php'; 

	#echo "<pre>";
	#print_r($chequeo);
	#echo "</pre>";

	#echo "Hola";

	#exit();
	// requiere se usa para incluir librerías. Interrume la ejecución
?>

    <main class="container">
        <h1>Alta de una Usuario</h1>
<?php 
 ##########################################################################
 ################ INICIO DE MENSAJE EN CASO DE EXITO ######################

	$clase = 'Danger';

	$mensaje = 'No se puede agregar el Usuario';

	if ($chequeo ) {

		$clase ='success';

		$mensaje ='Usuario Agregado Correctamente';
	}	

 ?>
<div class="alert alert -<?php echo $clase  ?>">
  	<?php echo $mensaje ?>-

  	<br>
  	<a href="adminUsuarios.php" class="btn btn-outline.secondary">
  		 Volver a Panel de Usuario
  	</a>

  </div>
<!---------------------------- TERMINO EL MENSAJE DE MUESTRA----------------------->

 
    </main>

<?php include 'includes/footer.php'; ?>