<?php   
        require 'autenticar.php'; 
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de una nueva Categoria</h1>
        <div class="card bg-light p-3">
            <form action="agregarCategoria.php" method="POST">
                
                <label for="nombre">Nombre de Categoria</label>
                <input type="text" name="catNombre" id="nombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Categoria</button>
                <a href="adminCategorias.php" class="btn btn-outline-dark mx-2">Volver al panel categorias</a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>