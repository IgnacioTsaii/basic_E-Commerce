<?php  
        require 'autenticar.php'; 
        require 'funciones/conexion.php';
        require 'funciones/funcionesUsuarios.php';
        $usuario = verUsuarioPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <div class="card border-danger col-md-6 mx-auto mb-3">
            <div class="card-header border-danger">
            <h1>Confirmacion de baja de un Usuario</h1>
            </div>
            <div class="card-body text-danger">    
                <h2><?= $usuario['usuApellido'],' ',$usuario['usuNombre'] ?></h2>
                Email: <?= $usuario['usuEmail'] ?>
                <form action="eliminarUsuario.php" method="post">
                    <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">   
                    <button class="btn btn-danger mb-3 mt-2">Confirmar baja</button>
                    <a href="adminUsuarios.php" class="btn btn-dark mb-3 mt-2">Volver al panel</a>
                </form>
            </div>
        </div>
    </main>

    <script>
        Swal.fire({
        title: '¿Desea eliminar el Usuario?',
        text: "Esta accion no se puede deshacer",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e00',
        cancelButtonColor: '#5ebb8b',
        confirmButtonText: 'Confirmar Baja',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (!result.value) {
            window.location = 'adminUsuarios.php'
        }
        })
    </script>
<?php  include 'includes/footer.php';  ?>