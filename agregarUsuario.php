<?php
require 'autenticar.php'; 
require 'funciones/conexion.php';
require 'funciones/funcionesUsuarios.php';
$chequeo = agregarUsuario();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Alta de un Usuario</h1>

    <?php

    $clase = 'danger';
    $mensaje = 'No se pudo agregar el usuario';

    if ($chequeo) {
        $clase = 'success';
        $mensaje = 'Usuario agregado correctamente';
    }

    ?>

    <div class="alert alert-<?php echo $clase?>">
        <?php echo $mensaje?>
        <br>
        <a href="adminUsuarios.php" class="btn btn-outline-dark my-2">Volver al panel Usuarios</a>
    </div>

</main>

<?php include 'includes/footer.php';  ?>