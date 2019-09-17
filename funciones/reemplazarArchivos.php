<?php

   function reemplazarArchivo()
   {
    $idProducto = $_POST['idProducto'];
    $ruta = 'images/productos/'; 
    $link = conectar();

    $sqlC = 'SELECT idProducto FROM productos WHERE idProducto = '.$idProducto;
    $generaProductoID = mysqli_query($link,$sqlC);
    $productoArrayID = mysqli_fetch_array($generaProductoID);

    
    if($_FILES['prdImagen']['error'] == 0){
    $prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
    $prdImagen = 'P00'.$productoArrayID[0].'.jpg';
    move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
    }

    return $prdImagen;
   }
