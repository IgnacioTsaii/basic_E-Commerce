<?php
        require 'funciones/conexion.php';
        require 'funciones/funcionesProductos.php';
        $producto = verProductoPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
            <div class="card border-danger col-md-6 mx-auto mb-3">
                <div class="card-header border-danger">
                    <h1>Confirmación de baja de un producto</h1>
                </div>
                <div class="card-body text-danger">
                   <h2><?= $producto['prdNombre']; ?></h2>
                    <img src="images/productos/<?= $producto['prdImagen']; ?>">
                    <br>
                    Precio: <?= $producto['prdPrecio']; ?>
                    <br>
                    Marca: <?= $producto['mkNombre']; ?>
                    <br>
                    Categoria: <?= $producto['catNombre']; ?>
                    <br>
                    Presentacion: <?= $producto['prdPresentacion']; ?>
                    <br>
                    Stock: <?= $producto['prdStock']; ?>
                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto" value="<?= $producto['idProducto']; ?>">
                        <input type="hidden" name="prdImagen" value="<?= $producto['prdImagen']; ?>">
                        <button class="btn btn-danger">Eliminar producto</button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary">
                               Volver a panel de productos
                        </a>
                    </form>
                </div>
            </div>
    </main>

    <script>
        Swal.fire({
            title: '¿desea eliminar el producto?',
            text: "esta acción no se puede deshacer",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d00',
            cancelButtonColor: '#5edd8d',
            confirmButtonText: 'Confirmar Baja',
            cancelButtonText: 'No lo voy a eliminar'
        }).then((result) => {
            if (!result.value) {
                window.location = 'adminProductos.php';
            }
        })
    </script>


<?php  include 'includes/footer.php';  ?>