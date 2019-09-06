<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>ingreso al panel de control</h1>

        <form action="login.php" method="post" class="card bg-light col-md-6 mx-auto p-3">
            Usuario:
            <br>
            <input type="text" name="usuEmail" class="form-control">
            <br>
            Clave:
            <br>
            <input type="password" name="usuPass" class="form-control">
            <br>
            <button class="btn btn-secondary">Ingresar</button>
        </form>
    </main>

<?php
    if ( isset($_GET['error']) ) { // pregunta si esta correcto y sino sigue con el script de error
?>
        <script>
            Swal.fire(
                'Advertencia',
                'usuario y/o clave incorrecta',
                'error',
            )
        </script>
<?php
    }
?>

<?php  include 'includes/footer.php';  ?>