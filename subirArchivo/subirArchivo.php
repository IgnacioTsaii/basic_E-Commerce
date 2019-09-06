<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesMarcas.php';
    require 'funciones/funcionesCategorias.php';
    include 'includes/header.html';
    include 'includes/nav.php';
    $listarMarcas=listarMarcas();
    $listarCategorias=listarCategorias();
    
?>

<main class="container">
    <h1>Formulario de alta de un nuevo Producto</h1>

    <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="prdNombre" class="form-control" required>
        <br>
        Precio: <br>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="text" name="prdPrecio" class="form-control" required>
        </div>
        <br>
        Marca: <br>
        <!--SI EL VALUE TIENE VALOR = "" TENES QUE ELEGIR UNA OPCION OBLIGATORIA QUE NO SEA LA PRIMERA-->

        <!--------------------- LISTA DE MARCAS -------------------------------->

        <select name="idMarca" class="form-control" required>
            <option value="">Seleccione una Marca</option>
            <?php 

                    while ($marca= mysqli_fetch_array($listarMarcas)) {
                            

                    

             ?>
                    <option value="<?php echo  $marca['idMarca'] ?>"> <?php echo $marca['mkNombre'];  ?></option>



            <?php 


             }
            ?>

        </select>

        <!--------------------- LISTA DE CATEGORIAS -------------------------------->
        <br>
        Categoría: <br>
        <select name="idCategoria" class="form-control" required>
            <option value="">Seleccione una Categoría</option>

            <?php 

                    while ($categoria= mysqli_fetch_array($listarCategorias)) 
                    {
                            

                    

             ?>
                    <option value="<?php echo  $categoria['idCategoria'] ?>"> <?php echo $categoria['catNombre'];  ?></option>



            <?php 


                     }
            ?>

        </select>
        <br>
        Presentacion: <br>
        <textarea name="prdPresentacion" class="form-control"></textarea>
        <br>
        Stock: <br>
        <input type="number" name="prdStock" class="form-control">
        <br>
        Imagen: <br>
        <input type="file" name="prdImagen" class="form-control">
        <br>
        <input type="submit" value="Agregar Producto" class="btn btn-secondary mb-3">
        <a href="adminProductos.php" class="btn btn-light mb-3">Volver al panel de Productos</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>