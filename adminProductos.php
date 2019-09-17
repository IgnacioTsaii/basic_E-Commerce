<?php
require 'autenticar.php';     
require 'funciones/conexion.php';
require 'funciones/funcionesProductos.php';
$producto = listarProductos();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Panel de Administración de Productos</h1>
    <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>

    <table class="table table-border table-stripped table-hover">
        <thead class="thead-dark">
            <th>Nombre</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>Categoría</th>
            <th>Presentación</th>
            <th>Imagen</th>
            <th colspan="2">
                <a href="formAgregarProducto.php" class="btn btn-secondary">Agregar</a>
            </th>
        </thead>
        <tbody>
            <?php
            while ($productoArray = mysqli_fetch_array($producto)) {
                ?>
                <tr>
                    <td><?php echo $productoArray['prdNombre'] ?></td>
                    <td><?php echo $productoArray['prdPrecio'] ?></td>
                    <td><?php echo $productoArray['mkNombre'] ?></td>
                    <td><?php echo $productoArray['catNombre'] ?></td>
                    <td><?php echo $productoArray['prdPresentacion'] ?></td>
                    <td><img src="images/productos/<?php echo $productoArray['prdImagen'] ?>" class="img50"></td>
                    <td><a href="formModificarProducto.php?idProducto=<?php echo $productoArray['idProducto'] ?>" class="btn btn-outline-secondary">Modificar</a></td>
                    <td><a href="formEliminarProducto.php?idProducto=<?php echo $productoArray['idProducto'] ?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>
</main>

<?php include 'includes/footer.php';  ?>