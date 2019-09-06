<?php
        require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesCategorias.php';
        $listacategorias = listarCategorias();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Categorias</h1>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Categoria</th>
                    <th colspan="2">
                        <a href="formAgregarCategoria.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $categoria = mysqli_fetch_array($listacategorias) ){
?>            
                <tr>
                    <td><?php echo $categoria[0]; ?></td>
                    <td><?php echo $categoria[1]; ?></td>
                    <td>
                        <a href="formModificarMarca.php" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarMarca.php" class="btn btn-outline-secondary">
                            eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>                
            </tbody>
        </table>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>