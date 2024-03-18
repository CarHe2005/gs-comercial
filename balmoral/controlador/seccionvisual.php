<?php

//este controlador tiene como funcion mostrar los datos guardados anteriormente en el registro a modificar. OJO no modifica.
function obtenerDatosSeccion($ID_SEC) {
    global $conexion;

    $sql = $conexion->query("SELECT secciones.*, estado.NOM_EST, grupos.NOM_GRUP
        FROM secciones
        INNER JOIN estado ON secciones.ID_EST = estado.ID_EST
        INNER JOIN grupos ON secciones.ID_GRUP = grupos.ID_GRUP
        WHERE secciones.ID_SEC = $ID_SEC");

    $datos = array();
    while ($seccion = $sql->fetch_assoc()) {
        $datos[] = $seccion;
    }

    return $datos;
}

function obtenerDatosSeccion1($ID_SEC1) {
    global $conexion;

    $sql = $conexion->query("SELECT secciones.*, estado.NOM_EST, grupos.NOM_GRUP
        FROM secciones
        INNER JOIN estado ON secciones.ID_EST = estado.ID_EST
        INNER JOIN grupos ON secciones.ID_GRUP = grupos.ID_GRUP
        WHERE secciones.ID_SEC = $ID_SEC1");

    $datos1 = array();
    while ($seccion1 = $sql->fetch_assoc()) {
        $datos[] = $seccion1;
    }

    return $datos;
}


?>

