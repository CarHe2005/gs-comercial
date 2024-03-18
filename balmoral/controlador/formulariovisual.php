<?php
include "modelo/conexion.php";
//seccion
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

//Estados 
function obtenerEstados() {
    global $conexion;

    $sqlestado = "SELECT ID_EST, NOM_EST FROM estado";
    $result = $conexion->query($sqlestado);

    $estados = array();
    while ($row = $result->fetch_assoc()) {
        $estados[] = $row;
    }

    return $estados;
}
//Grupos
function obtenerGrupos() {
    global $conexion;

    $sqlgrupo = "SELECT ID_GRUP, NOM_GRUP FROM grupos";
    $resultgrupo = $conexion->query($sqlgrupo);

    $grupos = array();
    while ($row = $resultgrupo->fetch_assoc()) {
        $grupos[] = $row;
    }

    return $grupos;
}
?>
