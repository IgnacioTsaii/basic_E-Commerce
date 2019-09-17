<?php  
        require 'autenticar.php';     
        require 'funciones/conexion.php';
        require 'funciones/funcionesUsuarios.php';
        $usuario = listarUsuarios();
        include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración de Usuarios</h1>
        <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>

    <table class="table table-border table-stripped table-hover">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Estado</th>
            <th colspan="2">
                <a href="formAgregarUsuario.php" class="btn btn-secondary">Agregar</a>
            </th>
        </thead>
        <tbody>
            <?php
            while ($usuarioArray = mysqli_fetch_array($usuario)) {
                ?>
                <tr>
                    <td><?php echo $usuarioArray[0] ?></td>
                    <td><?php echo $usuarioArray[1] ?></td>
                    <td><?php echo $usuarioArray[2] ?></td>
                    <td><?php echo $usuarioArray[3] ?></td>
                    <td><?php echo $usuarioArray[4] ?></td>
                    <td><a href="formModificarUsuario.php?idUsuario=<?php echo $usuarioArray[0] ?>" class="btn btn-outline-secondary">Modificar</a></td>
                    <td><a href="formEliminarUsuario.php?idUsuario=<?php echo $usuarioArray[0] ?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <a href="admin.php" class="btn btn-secondary my-3">Volver al panel principal</a>
    </main>

<?php  include 'includes/footer.php';  ?>