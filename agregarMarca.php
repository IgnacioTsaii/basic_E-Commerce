<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $chequeo = agregarMarca();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar la marca';
        if ( $chequeo ) {
            $clase = 'success';
            $mensaje = 'Marca agregada correctamente';
        }
?>
        <div class="alert alert-<?php echo $clase ?>">
            <?php echo $mensaje ?>.
            <br>
            <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    volver a panel de marcas
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

