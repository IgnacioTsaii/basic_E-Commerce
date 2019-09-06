<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesProductos.php';
        $productos = listarProductos();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Productos</h1>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $producto = mysqli_fetch_array($productos) ){
?>            
                <tr>
                    <td><?php echo $producto['prdNombre']; ?></td>
                    <td><?php echo $producto['prdPrecio']; ?></td>
                    <td><?php echo $producto['mkNombre']; ?></td>
                    <td><?php echo $producto['catNombre']; ?></td>
                    <td><?php echo $producto['prdPresentacion'] ?></td>
                    <td><img src="images/productos/<?php echo $producto['prdImagen'] ?>" class="img50"></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>                
            </tbody>
        </table>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>