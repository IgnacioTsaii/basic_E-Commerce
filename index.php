<?php   
        require 'funciones/conexion.php';
        require 'funciones/funcionesProductos.php';
        $producto = listarProductos();
        include 'includes/header.html';
        include 'includes/nav.php';  
        $msg = 0;
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
        }
?>

    <main class="container">
        <h1>Catalogo de Productos</h1>
        <div class="row">
<?php
           while ($productoArray = mysqli_fetch_assoc($producto)) { // solo trae los indices asociativos, por lo que no funciona con los indices numericos
?>
            <div class="card m-2">
                <div class="card-header">
                    <h4><?= $productoArray['prdNombre'] ?></h4>
                </div>
                <div class="card-body">
                    <img src="images/productos/<?= $productoArray['prdImagen'] ?>" class="img-thumbnail"><br>
                    <?= $productoArray['mkNombre'] ?> - <?= $productoArray['catNombre'] ?> 
                    (<?= $productoArray['prdPresentacion'] ?>) <br>
                    $<?= $productoArray['prdPrecio'] ?>
                </div>
            </div>
<?php
           }
?>
        </div>
    </main>
<?php
        if($msg == 1){
?>
    <script>
            Swal.fire({
                type: 'success',
                confirmButtonText: 'Salir',
                confirmButtonColor: '#333',
                text: 'Gracias por su visita'
            })
    </script>
<?php
        }
?>
<?php  include 'includes/footer.php';  ?>