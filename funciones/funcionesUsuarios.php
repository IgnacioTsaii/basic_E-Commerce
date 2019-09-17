<?php

//----------------CRUD DE USUARIOS-----------------------------
function listarUsuarios()
{
    $link = conectar();
    $sql = 'SELECT u.idUsuario, u.usuNombre, u.usuApellido, u.usuEmail, 
    (CASE WHEN u.usuEstado = 1 THEN "Activo" ELSE "Baja" END) as Estado, usuEstado
    FROM usuarios u';
    
    $listadoUsuarios = mysqli_query($link,$sql);

    return $listadoUsuarios;
};

function agregarUsuario()
{
    $usuNombre = $_POST['usuNombre'];
    $usuApellido = $_POST['usuApellido'];
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];
    $usuEstado = 1;
    
    $link = conectar();
    $sql = 'INSERT INTO usuarios (usuNombre, usuApellido, usuEmail, usuPass, usuEstado) 
            VALUE ("'.$usuNombre.'", "'.$usuApellido.'", "'.$usuEmail.'",  "'.$usuPass.'", "'.$usuEstado.'")';
    
    $agregaUsuario = mysqli_query($link,$sql) or die(mysqli_error($link));

    return $agregaUsuario;
}

function verUsuarioPorID()
{
    
    $idUsuario = $_GET['idUsuario'];
    
    $link = conectar();
    $sql = 'SELECT u.idUsuario, u.usuNombre, u.usuApellido, u.usuEmail, u.usuPass, 
    (CASE WHEN u.usuEstado = 1 THEN "Activo" ELSE "Baja" END) as Estado
    FROM usuarios u
    WHERE idUsuario ='.$idUsuario;
   
    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
    $verUsuario = mysqli_fetch_array($resultado);
    
    return $verUsuario;
}

function modificarUsuario()
{
    $idUsuario = $_POST['idUsuario'];
    $usuNombre = $_POST['usuNombre'];
    $usuApellido = $_POST['usuApellido'];
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];
    $usuEstado = $_POST['usuEstado'];
        
    $link = conectar();
    $sql = 'UPDATE usuarios
            SET usuNombre = "'.$usuNombre.'",
                usuApellido = "'.$usuApellido.'",
                usuEmail = "'.$usuEmail.'",
                usuPass = "'.$usuPass.'",
                usuEstado = "'.$usuEstado.'"
            WHERE idUsuario ='.$idUsuario;

    $modificaUsuario = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    return $modificaUsuario;
}

function eliminarUsuario()
{
    
    $idUsuario = $_POST['idUsuario'];
        
    $link = conectar();
    $sql = 'DELETE FROM usuarios WHERE idUsuario ='.$idUsuario;
 
    $eliminaUsuario = mysqli_query($link,$sql) or die (mysqlo_error($link));
    
    return $eliminaUsuario;
}

function login()
{
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];

    $link = conectar();
    $sql = "SELECT usuNombre, usuApellido FROM usuarios where usuEmail = '".$usuEmail."' and usuPass = '".$usuPass."'AND usuEstado = 1";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    $chequeo = mysqli_num_rows($resultado);
    
    if ($chequeo == 0) {

        //redireccion formLogin.php
        header('location: formLogin.php?error=1');
        
    } else {
        
        //rutina de autentificacion
        session_start(); //permiso para trabajar con sesiones
        $_SESSION['login'] = 1; //asignacion de variable de sesion
        $nombreUsuario = mysqli_fetch_array($resultado) or die(mysqli_error($link));
        $_SESSION['usuNombre'] = $nombreUsuario['usuNombre'];
        $_SESSION['usuApellido'] = $nombreUsuario['usuApellido'];

        //redireccion admin.php
        header('location: admin.php');

    }
}

function logout()
{
    session_destroy();
    header('location: index.php?msg=1');
}