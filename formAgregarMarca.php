<?php   
        require 'autenticar.php'; 
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de una nueva Marca</h1>
        <div class="card bg-light p-3">
            <form action="agregarMarca.php" method="POST">
                
                <label for="nombre">Nombre de Marca</label>
                <input type="text" name="mkNombre" id="nombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-dark mx-2">Volver al panel marcas</a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>