<?php

function subirArchivo()
   {
    $ruta = 'images/productos/'; 
    $prdImagen = 'noDisponible.jpg';

    if(isset($_POST['imagenOriginal'])){
      $prdImagen = $_POST['imagenOriginal'];
    };
    
    $link = conectar();

    $sqlC = 'SELECT idProducto FROM productos order by idProducto desc limit 1';
    $generaProductoID = mysqli_query($link,$sqlC);
    $productoArrayID = mysqli_fetch_array($generaProductoID);

    /*    
    if (($_FILES["prdImagen"]["type"] == "image/jepg")){
      $ext = '.jepg';
    } elseif (($_FILES["prdImagen"]["type"] == "image/gif")) {
      $ext = '.gif';
    }elseif (($_FILES["prdImagen"]["type"] == "image/png")) {
      $ext = '.png';
   };*/
    

    if($_FILES['prdImagen']['error'] == 0){
    $prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
    $prdImagen = 'P00'.($productoArrayID[0] + 1).'.jpg';
    move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
    }

    return $prdImagen;
   }

