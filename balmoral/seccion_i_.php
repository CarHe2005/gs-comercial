<?php
session_start();

// Verificar si el usuario ha iniciado sesión y tiene el rol 1
if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
    // Si el usuario tiene el rol 1, mostrar el botón de editar
    $botonEditar = '<a href="crudbalmoral.php" class="btn boton-largo btn-success">Editar</a>';
} else {
    // Si el usuario no tiene el rol 1, no mostrar el botón de editar
    $botonEditar = '';
}

//SECCION I
// inclución de bd y controladores
include "modelo/conexion.php";
include "controlador/seccionvisual.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vista/seccion.css">
    <title>Secciones</title>

    <!-- navbar-->
  <nav class="navbar navbar-expand-lg bg--verde " >
    <div class="container-fluid">
      <a class="navbar-brand" href="balmoral.html">
        <img src="vista/img/logo.png" alt="" width="350px">
      </a>
      
</nav>
<!-- cierre -->

</head>  
<body>
  
<!-- inicio -->


<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I1.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5084;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I2.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5085;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I3.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5086;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I4.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5087;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I5.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5088;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I6.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5089;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I7.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5090;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I8.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5091;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I9.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5092;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I10.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5093;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I11.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5094;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I12.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5095;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I3.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5096;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I4.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5097;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I15.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5098;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I6.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5099;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->

<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/I/I7.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5100;
  $datosSeccion = obtenerDatosSeccion($id_sec2);
  foreach ($datosSeccion as $seccion2) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion2['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion2['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion2['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion2['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion2['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion2['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion2['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion2['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion2['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->




</div>
</div>
</div>
<!--fin-->

<?php }}}}}}}}}}}}}}}}}?>
</body>
</html>
