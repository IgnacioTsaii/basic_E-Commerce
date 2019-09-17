<?php

//----------------CRUD DE MARCAS-----------------------------



function listarMarcas()
{
    $link = conectar();
    $sql = 'SELECT idMarca, mkNombre
            FROM marcas';
    
    $listadoMarcas = mysqli_query($link,$sql);

    return $listadoMarcas;
};

function agregarMarca()
{
    $mkNombre = $_POST['mkNombre'];
    
    $link = conectar();
    $sql = 'INSERT INTO marcas (mknombre) VALUE ("'.$mkNombre.'")';
    
    $agregaMarca = mysqli_query($link,$sql);

    return $agregaMarca;
}

function verMarcaPorID()
{
    
    $idMarca = $_GET['idMarca'];
    
    $link = conectar();
    $sql = 'SELECT idMarca, mkNombre
    FROM marcas
    WHERE idMarca ='.$idMarca;
   
    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
    $verMarca = mysqli_fetch_array($resultado);
    
    return $verMarca;
}

function modificarMarca()
{
    $idMarca = $_POST['idMarca'];
    $mkNombre = $_POST['mkNombre'];
        
    $link = conectar();
    $sql = 'UPDATE marcas
            SET mkNombre = "'.$mkNombre.'"
            WHERE idMarca ='.$idMarca;

    $modificaMarca = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    return $modificaMarca;
}

function eliminarMarca()
{
    
    $idMarca = $_POST['idMarca'];
        
    $link = conectar();
    $sql = 'DELETE FROM marcas WHERE idMarca ='.$idMarca;
 
    $eliminaMarcas = mysqli_query($link,$sql) or die (mysqlo_error($link));
    
    return $eliminaMarcas;
}

function chequeoProductosM()
{
    
    $idMarca = $_GET['idMarca'];
        
    $link = conectar();
    $sql = 'SELECT 1 FROM productos WHERE idMarca ='.$idMarca;
 
    $resultado = mysqli_query($link,$sql) or die (mysqlo_error($link));

    $chequeoPM = mysqli_num_rows($resultado);
    
    return $chequeoPM;
}
