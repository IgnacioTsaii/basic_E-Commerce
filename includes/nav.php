<nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a href="index.php" class="mt-1">
        <i class="fab fa-angrycreative fa-2x"></i>
        </a>

<?php
        if (!isset($_SESSION['login'])) {
    
?>
        <button class="btn btn-dark">
            <a href="formLogin.php"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</a>
        </button>
<?php
        }else{
?>
        <a class="py-2" href="adminMarcas.php">Marcas</a>  
        <a class="py-2" href="adminCategorias.php">Categorías</a>
        <a class="py-2" href="adminProductos.php">Productos</a>
        <a class="py-2" href="adminUsuarios.php">Usuarios</a>        
        
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="#"><i class="fas fa-sign-out-alt"></i> <?= $_SESSION['usuNombre']?> <?= $_SESSION['usuApellido']?></a>
        </button>
        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item bg-dark" href="logout.php">Cerrar Sesion</a>
        </div>
<?php
        }
?>
    </div>
</nav>