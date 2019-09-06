<?php
require 'autenticar.php';
        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $marcas = listarMarcas();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Marcas</h1>


        <a href="admin.php" class="btn btn-outline-secondary my-3">
            Volver a panel principal
        </a>

        <table class="table table-border table stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="formAgregarMarca.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php 
            while( $marca = mysqli_fetch_array($marcas) ){       
?>            
                <tr>
                    <td><?php echo $marca[0]; ?></td>
                    <td><?php echo $marca[1]; ?></td>
                    <td>
                        <a href="formModificarMarca.php" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarMarca.php?idMarca=<?= $marca['idMarca']; ?>" class="btn btn-outline-secondary">
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