<?php

// las constantes siempre en mayuscula (se puede usar const o define)

const SERVER = 'localhost';
const USUARIO = 'root';
const CLAVE = '';
const DDBB = 'catalogo';

function conectar()
{
    $link = mysqli_connect(
        SERVER,
        USUARIO,
        CLAVE,
        DDBB
    );   
    
    return $link;
}

