<?php

    function conexion($bd_config){
        try {
            $conexion = new PDO('mysql:host=localhost;dbaname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
            return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }

    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    function pagina_actual(){
     return isset($_GET['p']) ? (int)$_GET['p'] : 1;
    }

    function obtener_negocio($negocios_por_pagina, $conexion){
        $inicio = (pagina_actual() > 1) ? pagina_actual() * $negocios_por_pagina - $negocios_por_pagina : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio, $negocios_por_pagina");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }    