<?php   
        require 'autenticar.php';     
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración</h1>

        <div class="list-group">
            <a href="adminMarcas.php" class="list-group-item">Panel de Administracion de Marcas</a>
            <a href="adminCategorias.php" class="list-group-item">Panel de Administracion de Categorias</a>
            <a href="adminProductos.php" class="list-group-item">Panel de Administracion de Productos</a>
            <a href="adminUsuarios.php" class="list-group-item">Panel de Administracion de Usuarios</a>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>   