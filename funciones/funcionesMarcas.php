<?php

    #############################
    ###### CRUD de MARCAS #######

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                        FROM marcas";
        $listadoMarcas = mysqli_query($link, $sql);
        return $listadoMarcas;
    }

    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];

        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUES
                        ( '".$mkNombre."' )";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    /**
    * chequear si hay PRODUCTOS de esa marca
     * @return bool
    */
    function checkProductos()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                    WHERE idMarca = ".$idMarca;
        $result = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        $chequeo = mysqli_num_rows($result);
        return $chequeo;
    }
    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $result = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $detalle = mysqli_fetch_array($result);
        return $detalle;
    }

    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     */