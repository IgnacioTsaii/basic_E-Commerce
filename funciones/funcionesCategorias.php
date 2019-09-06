<?php

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                            FROM categorias";
        $listadoCategorias = mysqli_query($link, $sql);
        return $listadoCategorias;
    }
