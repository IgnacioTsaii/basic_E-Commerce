<?php

//----------------CRUD DE PRODUCTOS-----------------------------

function listarProductos()
{
    $link = conectar();
    $sql = 'SELECT p.idProducto,p.prdNombre,p.prdPrecio,p.idMarca,m.mkNombre,p.idCategoria,c.catNombre,p.prdPresentacion,p.prdStock,p.prdImagen
    FROM productos p 
    JOIN marcas m on p.idMarca = m.idMarca
    JOIN categorias c on p.idCategoria = c.idCategoria';
    
    $listadoProductos = mysqli_query($link,$sql);

    return $listadoProductos;
};

function agregarProducto()
{
    
    $prdNombre = $_POST['prdNombre'];
    $prdPrecio = $_POST['prdPrecio'];
    $idMarca = $_POST['idMarca'];
    $idCategoria = $_POST['idCategoria'];
    $prdPresentacion = $_POST['prdPresentacion'];
    $prdStock = $_POST['prdStock'];
    $prdImagen = subirArchivo();
    
    $link = conectar();
    $sql = 'INSERT INTO productos
            VALUE (NULL, "'.$prdNombre.'", '.$prdPrecio.', '.$idMarca.',  '.$idCategoria.', 
                    "'.$prdPresentacion.'", '.$prdStock.', "'.$prdImagen.'")';
 
    $agregaProducto = mysqli_query($link,$sql);
    
    return $agregaProducto;
}

function verProductoPorID()
{
    
    $idProducto = $_GET['idProducto'];
    
    $link = conectar();
    $sql = 'SELECT p.idProducto,p.prdNombre,p.prdPrecio,p.idMarca,m.mkNombre,p.idCategoria,c.catNombre,p.prdPresentacion,p.prdStock,p.prdImagen
    FROM productos p 
    JOIN marcas m on p.idMarca = m.idMarca
    JOIN categorias c on p.idCategoria = c.idCategoria
    WHERE idProducto ='.$idProducto;
   
    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
    $verProducto = mysqli_fetch_array($resultado);
    
    return $verProducto;
}

function modificarProducto()
{
    $idProducto = $_POST['idProducto'];
    $prdNombre = $_POST['prdNombre'];
    $prdPrecio = $_POST['prdPrecio'];
    $idMarca = $_POST['idMarca'];
    $idCategoria = $_POST['idCategoria'];
    $prdPresentacion = $_POST['prdPresentacion'];
    $prdStock = $_POST['prdStock'];
    $prdImagen = reemplazarArchivo();
    
    $link = conectar();
    $sql = 'UPDATE productos
            SET prdNombre = "'.$prdNombre.'", 
                prdPrecio = '.$prdPrecio.', 
                idMarca = '.$idMarca.', 
                idCategoria = '.$idCategoria.', 
                prdPresentacion = "'.$prdPresentacion.'", 
                prdStock = '.$prdStock.',
                prdImagen = "'.$prdImagen.'"
            WHERE idProducto ='.$idProducto;

    $modificaProducto = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    return $modificaProducto;
}

function eliminarProducto()
{
    
    $idProducto = $_POST['idProducto'];
    $prdImagen = $_POST['prdImagen'];
    $ruta = 'images/productos/'.$prdImagen;
    
    $link = conectar();
    $sql = 'DELETE FROM productos WHERE idProducto ='.$idProducto;
 
    $eliminaProducto = mysqli_query($link,$sql) or die (mysqlo_error($link));
    
    if($prdImagen != 'noDisponible.jpg'){
        unlink ($ruta);
    }
    
    return $eliminaProducto;
}
