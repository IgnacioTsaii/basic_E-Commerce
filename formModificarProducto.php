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
    <h1>Formulario de modificacion de un Producto</h1>

    <form action="modificarProducto.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="prdNombre" class="form-control" value="<?= $producto['prdNombre'] ?>" required>
        
        <br>
        
        Precio: <br>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="text" name="prdPrecio" class="form-control" value="<?= $producto['prdPrecio'] ?>" required>
        </div>
        
        <br>
        
        Marca: <br>
        <select name="idMarca" class="form-control" required>
            <option value="<?= $producto['idMarca'] ?>"><?= $producto['mkNombre'] ?></option>
<?php
            while ($marca = mysqli_fetch_array($listaMarcas)) {
?>
            <option value="<?= $marca['idMarca'] ?>"><?php echo $marca['mkNombre'] ?></option>
<?php
            }
?>
        </select>
        
        <br>
        
        Categoría: <br>
        <select name="idCategoria" class="form-control" required>
            <option value="<?= $producto['idCategoria'] ?>"><?= $producto['catNombre'] ?></option>
<?php
            while ($marca = mysqli_fetch_array($listaCategoria)) {
?>
            <option value="<?= $marca['idCategoria'] ?>"><?php echo $marca['catNombre'] ?></option>
<?php
            }
?>
        </select>
        
        <br>
        
        Presentacion: <br>
        <textarea name="prdPresentacion" class="form-control"><?= $producto['prdPresentacion'] ?></textarea>
        
        <br>
        
        Stock: <br>
        <input type="number" name="prdStock" class="form-control" value="<?= $producto['prdStock'] ?>">
        
        <br>
        
        Imagen: <br>
        <img src="images/productos/<?= $producto['prdImagen'] ?>">
        <input type="file" name="prdImagen" class="form-control">
        
        <br>

        <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">

        <input type="hidden" name="imagenOriginal" value="<?= $producto['prdImagen'] ?>">
        
        <input type="submit" value="Modificar Producto" class="btn btn-secondary mb-3">


        <a href="adminProductos.php" class="btn btn-light mb-3">Volver al panel de Productos</a>
    </form>

</main>

<?php include 'includes/footer.php';  ?>