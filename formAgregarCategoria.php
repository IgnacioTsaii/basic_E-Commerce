<?php  
	include 'includes/header.html';
	include 'includes/nav.php'; 
	// requiere se usa para incluir librerías. Interrume la ejecución
?>

    <main class="container">
        <h1>Formulario de Alta de Categoria</h1>

<!--CREAMOS EL FORMULARIO--> 

<div class="card bg-light m-3">

<form action="agregarCategoria.php" method="post">
	
	<label for="nombre">Nombre de la Categoria: </label>

<!--L AGREGAR LA CLASS "FORM-CONTROL" se ve mas anchos tiene los bordes redondeados , un padding-->

	<input type="text" name="catNombre" class="form-control" id="nombre" required>

	<br>
	<button class="btn btn-secondary" >
		Agregar Categoria
	</button>
	<a href="adminCategoria.php" class="btn btn-outline-secondary mx-2"> Volver al Panel de Categoria</a>

</form>	

</div>


    </main>

<?php include 'includes/footer.php'; ?>