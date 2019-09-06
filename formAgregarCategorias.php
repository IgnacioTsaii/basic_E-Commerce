<?php  
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de una nueva Categoria</h1>

        <div class="card bg-light p-3">
       	<form action="agregarCategoria.php" method="post">
     	
     		<label for="nombre">Nombre de la Categoria</label>
     		<input type="text" name="catNombre" class="form-control" id="nombre">
     		<br>
     		<button class="btn btn-secondary">Agregar Categoria</button>
     		<a href="adminCategorias.php" class="btn btn-outline-secondary">Volver a panel Categorias</a>

     	</form>
        </div>	

    </main>

<?php  include 'includes/footer.php';  ?>