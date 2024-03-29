<?php   
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $marca = verMarcaPorID();
        $chequeoProd = chequeoProductosM();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
<?php
    if($chequeoProd){
?>
        <script>
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            confirmButtonText: 'Volver',
            confirmButtonColor: '#333',
            text: 'No se puede eliminar la marca porque tiene productos relacionados'
        }).then((result) => {
        if (result.value) {
            window.location = 'adminMarcas.php'
        }
        })
        </script>
<?php
    }else{
?>
        <div class="card border-danger col-md-6 mx-auto mb-3">
            <div class="card-header border-danger">
            <h1>Confirmacion de baja de una Marca</h1>
            </div>
            <div class="card-body text-danger">    
                <h2><?= $marca['mkNombre'] ?></h2>
                <form action="eliminarMarca.php" method="post">
                    <input type="hidden" name="idMarca" value="<?= $marca['idMarca'] ?>">   
                    <button class="btn btn-danger mb-3 mt-2">Confirmar baja</button>
                    <a href="adminMarcas.php" class="btn btn-dark mb-3 mt-2">Volver al panel</a>
                </form>
            </div>
        </div>

    <script>
        Swal.fire({
        title: '¿Desea eliminar la Marca?',
        text: "Esta accion no se puede deshacer",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e00',
        cancelButtonColor: '#5ebb8b',
        confirmButtonText: 'Confirmar Baja',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (!result.value) {
            window.location = 'adminMarcas.php'
        }
        })
    </script>
<?php
    }
?>
    </main>
<?php  include 'includes/footer.php';  ?>