<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de una nueva marca</h1>

        <div class="card bg-light p-3">
        <form action="agregarMarca.php" method="post">
            <label for="nombre">Nombre de la Marca</label>
            <input type="text" name="mkNombre" class="form-control" id="nombre" required>
            <br>
            <button class="btn btn-secondary">Agregar Marca</button>
            <a href="adminMarcas.php" class="btn btn-outline-secondary mx-2">volver a panel de marcas</a>
        </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>