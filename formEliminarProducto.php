<?php  
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $listaMarcas = listarMarcas();
        require 'funciones/funcionesCategorias.php';
        $listaCategoria = listarCategorias();
        require 'funciones/funcionesProductos.php';
        $producto = verProductoPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <div class="card border-danger col-md-6 mx-auto mb-3">
            <div class="card-header border-danger">
                <h1>Confirmacion de baja de Producto</h1>
            </div>
            <div class="card-body text-danger">    
                <h2><?= $producto['prdNombre'] ?></h2>
                Imagen: <img src="images/productos/<?= $producto['prdImagen'] ?>"><br>
                Precio: <?= $producto['prdPrecio'] ?><br>
                Marca: <?= $producto['mkNombre'] ?><br>
                Categoría: <?= $producto['catNombre'] ?><br>
                Presentacion: <?= $producto['prdPresentacion'] ?><br>
                Stock: <?= $producto['prdStock'] ?><br>
                <form action="eliminarProducto.php" method="post">
                    <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                    <input type="hidden" name="prdImagen" value="<?= $producto['prdImagen'] ?>">
                    <button class="btn btn-danger mb-3 mt-2">Confirmar baja</button>
                    <a href="adminProductos.php" class="btn btn-dark mb-3 mt-2">Volver al panel</a>
                </form>
            </div>
        </div>
    </main>
    <script>
        Swal.fire({
        title: '¿Desea eliminar el producto?',
        text: "Esta accion no se puede deshacer",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e00',
        cancelButtonColor: '#5ebb8b',
        confirmButtonText: 'Confirmar Baja',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (!result.value) {
            window.location = 'adminProductos.php'
        }
        })
    </script>

<?php  include 'includes/footer.php';  ?>