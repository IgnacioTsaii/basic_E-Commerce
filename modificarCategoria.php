<?php
require 'autenticar.php'; 
require 'funciones/conexion.php';
require 'funciones/funcionesCategorias.php';
$chequeo = modificarCategoria();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Modificar de un Categoria</h1>

    <?php

    $clase = 'danger';
    $mensaje = 'No se pudo modificar la categoria';

    if ($chequeo) {
        $clase = 'success';
        $mensaje = 'Categoria modificada correctamente';
    }

    ?>

    <div class="alert alert-<?php echo $clase?>">
        <?php echo $mensaje?>
        <br>
        <a href="adminCategorias.php" class="btn btn-outline-dark my-2">Volver al panel Categorias</a>
    </div>

</main>

<?php include 'includes/footer.php';  ?>