<?php    
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $marca = verMarcaPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de modificacion de una Marca</h1>
        <div class="card bg-light p-3">
            <form action="modificarMarca.php" method="POST">
                
                <label for="nombre">Nombre de Marca</label>
                <input type="text" name="mkNombre" id="nombre" class="form-control" value="<?= $marca['mkNombre'] ?>"required>
                <br>
                <input type="hidden" name="idMarca" value="<?= $marca['idMarca'] ?>">
                <button class="btn btn-dark">Modificar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-dark mx-2">Volver al panel marcas</a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>