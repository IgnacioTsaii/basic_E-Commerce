<?php

//----------------CRUD DE CATEGORIAS-----------------------------

function listarCategorias()
{
    $link = conectar();
    $sql = 'SELECT idCategoria, catNombre
            FROM categorias';
    
    $listadoCategorias = mysqli_query($link,$sql);

    return $listadoCategorias;
};

function agregarCategoria()
{
    $catNombre = $_POST['catNombre'];
    
    $link = conectar();
    $sql = 'INSERT INTO categorias (catnombre) VALUE ("'.$catNombre.'")';
    
    $agregaCategoria = mysqli_query($link,$sql);

    return $agregaCategoria;
}

function verCategoriaPorID()
{
    
    $idCategoria = $_GET['idCategoria'];
    
    $link = conectar();
    $sql = 'SELECT idCategoria, catNombre
    FROM categorias
    WHERE idCategoria ='.$idCategoria;
   
    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
    $verCategoria = mysqli_fetch_array($resultado);
    
    return $verCategoria;
}

function modificarCategoria()
{
    $idCategoria = $_POST['idCategoria'];
    $catNombre = $_POST['catNombre'];
        
    $link = conectar();
    $sql = 'UPDATE categorias
            SET catNombre = "'.$catNombre.'"
            WHERE idCategoria ='.$idCategoria;

    $modificaCategoria = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    return $modificaCategoria;
}

function eliminarCategoria()
{
    
    $idCategoria = $_POST['idCategoria'];
        
    $link = conectar();
    $sql = 'DELETE FROM categorias WHERE idCategoria ='.$idCategoria;
 
    $eliminaCategoria = mysqli_query($link,$sql) or die (mysqlo_error($link));
    
    return $eliminaCategoria;
}

function chequeoProductosC()
{
    
    $idCategoria = $_GET['idCategoria'];
        
    $link = conectar();
    $sql = 'SELECT 1 FROM productos WHERE idCategoria ='.$idCategoria;
 
    $resultado = mysqli_query($link,$sql) or die (mysqlo_error($link));

    $chequeoC = mysqli_num_rows($resultado);
    
    return $chequeoC;
}