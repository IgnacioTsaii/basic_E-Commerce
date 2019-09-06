<?php

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'catalogo'
    );

    $sql = 'SELECT p.prdNombre,p.prdPrecio,m.mkNombre,c.catNombre,p.prdPresentacion,p.prdImagen
                FROM productos p 
                JOIN marcas m on p.idMarca = m.idMarca
                JOIN categorias c on p.idCategoria = c.idCategoria';        ;

    $resultado = mysqli_query($link,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <table class="table table-border table-stripped table-hover">
        <thead class="bg-primary">
        <th>Nombre</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Presentación</th>
        <th>Imagen</th>
        </thead>
        <tbody>
<?php
        while ($productos = mysqli_fetch_array($resultado)){

?>
            <tr>
                <td><?php echo $productos[0]?></td>
                <td><?php echo $productos[1]?></td>
                <td><?php echo $productos[2]?></td>
                <td><?php echo $productos[3]?></td>
                <td><?php echo $productos[4]?></td>
                <td><img src="images/productos/<?php echo $productos[5]?>"></td>
            </tr>
<?php
        }
?>
        </tbody>
    </table>
</main>


</body>
</html>