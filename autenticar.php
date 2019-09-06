<?php

    session_start();
    if ( !isset($_SESSION['login']) ){ // el ! le da mas prioridad para no estar gastando codigo con el "else"
        header('location: formLogin.php?=1');
    }
?>