<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $chequeo = checkProductos();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>
<?php
        if( $chequeo ) {
?>
            <div class="card border-danger col-md-4">
                <div class="card-body text-danger">
                No se puede eliminar la marca
                porque tiene productos relacionados.
                <br>
                <a href="adminMarcas.php" class="btn btn-secondary mt-3">
                    volver a panel de marcas
                </a>
                </div>
            </div>
<?php
        }else {
            $marca = verMarcaPorID();
?>
            <div class="card border-danger col-md-6 mx-auto">
                <div class="card-header">
                    <h2>Confirmación de baja de una marca</h2>
                </div>
                <div class="card-body">
                    Marca: <?= $marca['mkNombre']; ?>
                    <br>
                    <form action="eliminarMarca.php" method="post">
                        <input type="hidden" name="idMarca" value="<?= $marca['idMarca']; ?>">
                        <button class="btn btn-danger">Confirmar baja</button>
                        <a href="adminMarcas.php" class="btn btn-secondary mt-3">
                            volver a panel de marcas
                        </a>
                    </form>
                    <script>
                        Swal.fire({
                            title: '¿desea eliminar la marca?',
                            text: "esta acción no se puede deshacer",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d00',
                            cancelButtonColor: '#5edd8d',
                            confirmButtonText: 'Confirmar Baja',
                            cancelButtonText: 'No la voy a eliminar'
                        }).then((result) => {
                            if (!result.value) {
                                window.location = 'adminMarcas.php';
                            }
                        })
                    </script>
                </div>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>