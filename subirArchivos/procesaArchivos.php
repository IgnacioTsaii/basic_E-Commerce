<?php

    $archivo =  $_FILES['archivo'];
    echo '<pre>';
    print_r($archivo);
    echo '</pre>';



    function subirArchivo()
    {
        $ruta = 'images/productos/';
        $prdImagen = 'noDisponible.jpg';
        if( $_FILES['prdImagen']['error'] == 0 ){
            $prdImagen = $_FILES['prdImagen']['name'];
            $prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
        }
        return $prdImagen;
    }
