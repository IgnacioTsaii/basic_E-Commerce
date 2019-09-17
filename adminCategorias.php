<?php  
        require 'autenticar.php';     
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $categoria = listarCategorias();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración de Categorias</h1>
        <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>

    <table class="table table-border table-stripped table-hover">
        <thead class="thead-dark">
            <th>Id Categoria</th>
            <th>Nombre Categoria</th>
            <th colspan="2">
                <a href="formAgregarCategoria.php" class="btn btn-secondary">Agregar</a>
            </th>
        </thead>
        <tbody>
            <?php
            while ($categoriaArray = mysqli_fetch_array($categoria)) {
                ?>
                <tr>
                    <td><?php echo $categoriaArray[0] ?></td>
                    <td><?php echo $categoriaArray[1] ?></td>
                    <td><a href="formModificarCategoria.php?idCategoria=<?php echo $categoriaArray[0] ?>" class="btn btn-outline-secondary">Modificar</a></td>
                    <td><a href="formEliminarCategoria.php?idCategoria=<?php echo $categoriaArray[0] ?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>
    </main>

<?php  include 'includes/footer.php';  ?>