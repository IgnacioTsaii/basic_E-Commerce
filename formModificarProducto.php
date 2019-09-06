<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesMarcas.php';
    require 'funciones/funcionesCategorias.php';
    require 'funciones/funcionesProductos.php';
    $listaMarcas = listarMarcas();
    $listaCategorias = listarCategorias();
    $producto = verProductoPorID();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de modificación de un Producto</h1>

    <form action="modificarProducto.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="prdNombre" value="<?= $producto['prdNombre']; ?>" class="form-control" required>
        <br>
        Precio: <br>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="text" name="prdPrecio" value="<?= $producto['prdPrecio']; ?>" class="form-control" required>
        </div>
        <br>
        Marca: <br>
        <select name="idMarca" class="form-control" required>
            <option value="<?= $producto['idMarca']; ?>"><?= $producto['mkNombre']; ?></option>
<?php
            while( $marca = mysqli_fetch_array($listaMarcas) ){
?>
                <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre']; ?></option>
<?php
            }
?>
        </select>
        <br>
        Categoría: <br>
        <select name="idCategoria" class="form-control" required>
            <option value="<?= $producto['idCategoria']; ?>">Seleccione una Categoría</option>
<?php
            while( $categoria = mysqli_fetch_array($listaCategorias) ){
?>
                <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre']; ?></option>
<?php
            }
?>
        </select>
        <br>
        Presentacion: <br>
        <textarea name="prdPresentacion" class="form-control"><?= $producto['prdPresentacion']; ?></textarea>
        <br>
        Stock: <br>
        <input type="number" name="prdStock" value="<?= $producto['prdStock']; ?>" class="form-control">
        <br>
        Imagen: <br>
        <img src="images/productos/<?= $producto['prdImagen']; ?>">
        <input type="file" name="prdImagen" class="form-control">
        <br>
        <input type="hidden" name="imagenOriginal" value="<?= $producto['prdImagen']; ?>">
        <input type="hidden" name="idProducto" value="<?= $producto['idProducto']; ?>">
        <input type="submit" value="Modificar Producto" class="btn btn-secondary mb-3">
        <a href="adminProductos.php" class="btn btn-light mb-3">Volver al panel de Productos</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>