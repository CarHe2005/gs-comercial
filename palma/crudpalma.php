<?php 
/// Crud sede Balmoral
include "modelo/conexion.php";

$estado = 0;
$ubicacion = 0;

if (isset($_GET['ID_EST'])) {
  $estado = intval($_GET['ID_EST']);
}

if (isset($_GET['ID_UBI'])) {
  $ubicacion = intval($_GET['ID_UBI']);
}

$sql1 = $conexion->prepare("SELECT secciones.*, estado.NOM_EST, grupos.NOM_GRUP, puntos_venta.NOM_PDV
                         FROM secciones
                         INNER JOIN estado ON secciones.ID_EST = estado.ID_EST
                         INNER JOIN grupos ON secciones.ID_GRUP = grupos.ID_GRUP
                         INNER JOIN puntos_venta ON secciones.ID_PDV = puntos_venta.ID_PDV
                         WHERE (? = 0 OR secciones.ID_EST = ?) AND (? = 0 OR secciones.ID_UBI = ?) AND puntos_venta.ID_PDV = 4
                        ORDER BY secciones.ID_SEC ASC");
$sql1->bind_param("ssss", $estado, $estado, $ubicacion, $ubicacion);
$sql1->execute();
$result = $sql1->get_result();
?>
<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i04FJ7eaZVRfQSe5l5uHJaaqH5zus1zks5VRBegF038+0TO5ibLg6S8rm" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/crud.css">
    <title>Información Palma</title>

    <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg--verde fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="palma.html">
        <img src="vista/img/logo.png" alt="" width="350px">
      </a>
      </nav>
      <!--Fin Navbar-->
</head>
<body>
  
<!-- Filtro categoria desplegable -->
<div  class="formulario" style="margin-top:90px; padding:10px;">
<h1>Filtrar por Categoría</h1>
<form action="" method="get">
  <label for="ubicacion"><b>Sección:</b></label>
  <select name="ID_UBI" required>
  <option value="0" <?php if ($ubicacion == 0) echo 'selected'; ?>>Todas las Secciones</option>
    <option value="2" <?php if ($ubicacion == 2) echo 'selected'; ?>>Sección A</option>
    <option value="3" <?php if ($ubicacion == 3) echo 'selected'; ?>>Sección B</option>
    <option value="4" <?php if ($ubicacion == 4) echo 'selected'; ?>>Sección C</option>
    <option value="5" <?php if ($ubicacion == 5) echo 'selected'; ?>>Sección D</option>
    <option value="6" <?php if ($ubicacion == 6) echo 'selected'; ?>>Sección E</option>
    <option value="7" <?php if ($ubicacion == 7) echo 'selected'; ?>>Sección F</option>
    <option value="8" <?php if ($ubicacion == 8) echo 'selected'; ?>>Sección G</option>
    <option value="9" <?php if ($ubicacion == 9) echo 'selected'; ?>>Sección H</option>
    <option value="30" <?php if ($ubicacion == 30) echo 'selected'; ?>>Mueble</option>



  </select>

<!-- Fin-->
<!-- Filtro categoria desplegable -->
  <label style="padding:20px;"for="estado"><b>Estado</b></label>
  <select name="ID_EST" required>
  <option value="0" <?php if ($estado == 0) echo 'selected'; ?>>Todos los Estados</option>
    <option value="1" <?php if ($estado == 1) echo 'selected'; ?>>Disponible</option>
    <option value="2" <?php if ($estado == 2) echo 'selected'; ?>>Rentado</option>
    <option value="3" <?php if ($estado == 3) echo 'selected'; ?>>Convenio</option>
  </select>
  <button type="submit"  class="btn btn-success">Filtrar</button>
</form>
</div>
<!-- Fin-->
<!-- Inicio Crud-->
<div class="container container d-flex "  >
    <table class="table tabla_espacio  ">
      <thead>
          <tr>
            <th scope="col">Id Sección</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Punto de venta</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Grupo</th>
            <th scope="col">Marca</th>
            <th scope="col">Fecha inicio</th>
            <th scope="col">Fecha Fin</th>
            <th scope="col">Estado</th>
            <th scope="col">Valor</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <!-- cuerpo de datos a visualizar-->
       <tbody>
         <!--interacción con consulta sql-->
         <?php
            if (isset($result) && $result->num_rows > 0) {
              while ($datos = $result->fetch_object()) { ?>
              <!--datos-->
            <tr>
            <td><?= $datos->ID_SEC?></td>
            <td><?= $datos->TIT_SEC?></td>
            <td><?= $datos->SEC_DES?></td>
            <td><?= $datos->NOM_PDV?></td>
            <td><?= $datos->PRO_SEC?></td>
            <td><?= $datos->NOM_GRUP?></td>
            <td><?= $datos->MAR_SEC?></td>
            <td><?= $datos->FEC_INI?></td>
            <td><?= $datos->FEC_FIN?></td>
            <td><?= $datos->NOM_EST?></td>
            <td><?= $datos->VAL_SEC?>$</td>
            <!--botones en el crud-->
            <td>
              <a href="formulario.php?ID_SEC=<?= $datos->ID_SEC?>" class="btn btn-small btn-warning">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
              </svg>
            </a>
            </td>
            <!--cierre corchetes php-->
            <?php }}?>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
  </html>