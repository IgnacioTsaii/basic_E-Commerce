<?php   
        require 'autenticar.php'; 
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de alta de un nuevo Usuario</h1>
        <div class="card bg-light p-3">
            <form action="agregarUsuario.php" method="POST">
                
                <label for="nombre">Nombre de Usuario</label>
                <input type="text" name="usuNombre" id="nombre" class="form-control" required>
                <label for="apellido">Apellido de Usuario</label>
                <input type="text" name="usuApellido" id="apellido" class="form-control" required>
                <label for="email">Email de Usuario</label>
                <input type="email" name="usuEmail" id="email" class="form-control" required>
                <label for="pass">Contraseña de Usuario</label>
                <input type="password" name="usuPass" id="pass" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-dark mx-2">Volver al panel Usuario</a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>