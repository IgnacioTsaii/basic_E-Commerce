<?php
        require 'autenticar.php';
        require 'funciones/funcionesUsuarios.php';
        logout();
        // llamando a función logout
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Salir del sistema</h1>
            Gracias por su visita, vuelva pronto
    </main>

<?php  include 'includes/footer.php';  ?>