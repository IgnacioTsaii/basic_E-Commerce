<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass= $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND usuPass = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $chequeo = mysqli_num_rows($resultado);
        if( $chequeo == 0 ){
            // redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            // rutina de autenticación
            session_start();
            $_SESSION['login'] = 1; // le puedo poner cualquier cosa te tira ese resultado si te logeaste bien
            $usuario = mysqli_fetch_array($resultado);
            $_SESSION['usuNombre'] = $usuario['usuNombre']; // aca y en el de abajo guardamos en una session el Nombre y el Apellido
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            // redirección a admin
            header('location: admin.php');
        }
    }

    function logout()
    {
        // session_start(); no hay que poner el session_start porque tira error (porque lo estariamos llamando dos veces)
        session_destroy();
        header('refresh: 5; url=formLogin.php'); // es una redireccion con demora
    }