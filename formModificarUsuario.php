<?php
require 'autenticar.php';
require 'funciones/conexion.php';
require 'funciones/funcionesUsuarios.php';
$usuario = verUsuarioPorID();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de eliminacion de un Usuario</h1>
    <div class="card bg-light p-3">
        <form action="eliminarUsuario.php" method="POST">

            <label for="nombre">Nombre de Usuario</label>
            <input type="text" name="usuNombre" id="nombre" class="form-control" value="<?= $usuario['usuNombre'] ?>" required>
            <label for="apellido">Apellido de Usuario</label>
            <input type="text" name="usuApellido" id="apellido" class="form-control" value="<?= $usuario['usuApellido'] ?>" required>
            <label for="email">Email de Usuario</label>
            <input type="email" name="usuEmail" id="email" class="form-control" value="<?= $usuario['usuEmail'] ?>" required>
            <label for="pass">Contraseña de Usuario</label>
            <input type="password" name="usuPass" id="pass" class="form-control" value="<?= $usuario['usuPass'] ?>" required>
            <label for="estado">Estado del Usuario</label>
            <select name="selEstado" class="form-control" required>
<?php
                if ($usuario['Estado'] == "Activo") {
?>
                    <option value="1">Activo</option>
                    <option value="2">Baja</option>
<?php
                }else{
?>
                    <option value="2">Baja</option>
                    <option value="1">Activo</option>
<?php
                }
?>
            </select>

            <br>
            <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
            <button class="btn btn-dark">Modificar Usuario</button>
            <a href="adminUsuarios.php" class="btn btn-outline-dark mx-2">Volver al panel Usuario</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>