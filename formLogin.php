<?php  
		include 'includes/header.html';
        include 'includes/nav.php';  
        $error = 0;
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }
        
?>

    <main class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST" class="card bg-light col-md-6 mx-auto p-3">
            Usuario
            <br>
            <input type="text" name="usuEmail" class="form-control mt-2">
            Contraseña
            <br>
            <input type="password" name="usuPass" class="form-control mt-2">
            
            <button class="btn btn-dark m-4">Ingresar</button>
        </form>
    </main>
<?php

    $tipo = 'error';
    $textoBoton = 'Ingresar';
    $mensaje = 'Debe loguearse primero';
    
    if($error == 1){

        $tipo = 'error';
        $textoBoton = 'Reintentar';
        $mensaje = 'Usuario y/o Contraseña Incorrectas';
        
    }

    if($error !== 0){
?>
        <script>
            Swal.fire({
                type: '<?= $tipo ?>',
                confirmButtonText: '<?= $textoBoton ?>',
                confirmButtonColor: '#333',
                text: '<?= $mensaje ?>'
            })
        </script>
 <?php
    }
 ?>
<?php  include 'includes/footer.php';  ?>