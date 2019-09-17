<?php
require 'autenticar.php'; 
require 'funciones/conexion.php';
require 'funciones/funcionesProductos.php';
$chequeo = eliminarProducto();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Baja de un Producto</h1>

    <?php

    $clase = 'danger';
    $mensaje = 'No se pudo eliminar el producto';

    if ($chequeo) {
        $clase = 'success';
        $mensaje = 'Producto eliminado correctamente';
    }

    ?>

    <div class="alert alert-<?php echo $clase?>">
        <?php echo $mensaje?>
        <br>
        <a href="adminProductos.php" class="btn btn-outline-dark my-2">Volver al panel Productos</a>
    </div>

</main>

<?php include 'includes/footer.php';  ?>