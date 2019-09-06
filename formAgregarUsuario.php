<?php  
	include 'includes/header.html';
	include 'includes/nav.php'; 
	// requiere se usa para incluir librerías. Interrume la ejecución
?>

    <main class="container">
        <h1>Formulario de Alta de Usuario</h1>

<!--CREAMOS EL FORMULARIO--> 

<div class="card bg-light m-3">

<form action="agregarUsuario.php" method="post">
	<!--L AGREGAR LA CLASS "FORM-CONTROL" se ve mas anchos tiene los bordes redondeados , un padding-->
	<label for="nombre">Nombre de Usuario: </label>

	<input type="text" name="usuNombre" class="form-control" id="nombre" required>

	<br>

	<label for="apellido">Apellido de Usuario: </label>

	<input type="text" name="usuApellido" class="form-control" id="apellido" required>

	<br>

	<label for="email">Email de Usuario: </label>

	<input type="email" name="usuEmail" class="form-control" id="email" required>

	<br>


	<button class="btn btn-secondary" >
		Agregar Usuario
	</button>
	<a href="adminUsuario.php" class="btn btn-outline-secondary mx-2"> Volver al Panel de Usuario</a>

</form>	

</div>


    </main>

<?php include 'includes/footer.php'; ?>