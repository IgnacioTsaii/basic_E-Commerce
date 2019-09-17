<?php  
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $categoria = verCategoriaPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de modificar una Categoria</h1>
        <div class="card bg-light p-3">
            <form action="modificarCategoria.php" method="POST">
                
                <label for="nombre">Nombre de Categoria</label>
                <input type="text" name="catNombre" id="nombre" class="form-control" value="<?= $categoria['catNombre'] ?>" required>
                <br>
                <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>">
                <button class="btn btn-dark">Modificar Categoria</button>
                <a href="adminCategorias.php" class="btn btn-outline-dark mx-2">Volver al panel categorias</a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>