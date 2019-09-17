<?php  
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $categoria = verCategoriaPorID();
        $chequeoProd = chequeoProductosC();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

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
            text: 'No se puede eliminar la categoria porque tiene productos relacionados'
        }).then((result) => {
        if (result.value) {
            window.location = 'adminCategorias.php'
        }
        })
        </script>
<?php
    }else{
?>

        <div class="card border-danger col-md-6 mx-auto mb-3">
            <div class="card-header border-danger">
            <h1>Confirmacion de baja de una Categoria</h1>
            </div>
            <div class="card-body text-danger">    
                <h2><?= $categoria['catNombre'] ?></h2>
                <form action="eliminarCategoria.php" method="post">
                    <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>">   
                    <button class="btn btn-danger mb-3 mt-2">Confirmar baja</button>
                    <a href="adminCategorias.php" class="btn btn-dark mb-3 mt-2">Volver al panel</a>
                </form>
            </div>
        </div>

    <script>
        Swal.fire({
        title: '¿Desea eliminar la categoria?',
        text: "Esta accion no se puede deshacer",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e00',
        cancelButtonColor: '#5ebb8b',
        confirmButtonText: 'Confirmar Baja',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (!result.value) {
            window.location = 'adminCategorias.php'
        }
        })
    </script>
<?php
    }
?>
    </main>
<?php  include 'includes/footer.php';  ?>