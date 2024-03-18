<?php
//SECCION C
session_start();

// Verificar si el usuario ha iniciado sesión y tiene el rol 1
if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
    // Si el usuario tiene el rol 1, mostrar el botón de editar
    $botonEditar = '<a href="crudbalmoral.php" class="btn boton-largo btn-success">Editar</a>';
} else {
    // Si el usuario no tiene el rol 1, no mostrar el botón de editar
    $botonEditar = '';
}

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
      <!--BOTON HAMBURGUESA-->
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
    <img src="vista/img/C/C1.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec = 5019;
  $datosSeccion = obtenerDatosSeccion($id_sec);
  foreach ($datosSeccion as $seccion) { ?>
    <!--texto seccion 2-->
    <div class="">
      <h1><?php echo $seccion['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion['SEC_DES']?></p> 
      <p><b>Fecha inicio: </b><?php echo $seccion['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion['VAL_SEC']?>$</p>   
      <p></p> 
    </div>
    <!--botones-->
    <?php echo $botonEditar; ?>
    <!---->
</div>
</div>
</div>
<!--fin-->


  <!--inicio-->
  <div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
      <img src="vista/img/C/C2.jpeg" alt="" class="img-fluid" >
      <!--Obtención de datos de manera manual-->
      <?php
      $id_sec1 = 5020;
      $datosSeccion = obtenerDatosSeccion($id_sec1);
      foreach ($datosSeccion as $seccion1) { ?>
      <!--text seccion 2-->
      <div class="">
      <h1><?php echo $seccion1['TIT_SEC']?></h1> 
      <p><b>Descripción: </b> <?php echo $seccion1['SEC_DES']?></p>
      <p><b>Fecha inicio: </b><?php echo $seccion1['FEC_INI']?></p>
      <p><b>Fecha fin: </b><?php echo $seccion1['FEC_FIN']?></p> 
      <p><b>Proveedor: </b><?php echo $seccion1['PRO_SEC']?></p> 
      <p><b>Grupo: </b><?php echo $seccion1['NOM_GRUP']?></p> 
      <p><b>Marca: </b> <?php echo $seccion1['MAR_SEC']?></p>
      <p><b>Estado: </b><?php echo $seccion1['NOM_EST']?></p> 
      <p><b>Valor: </b><?php echo $seccion1['VAL_SEC']?>$</p>  
      <p></p> 
    </div>
    <div>
      <!-- ESTOS BOTONES SON DE SECCIOOON-->
      <?php echo $botonEditar; ?>
    </div>
    </div>
      </div>
      </div>
    <!--- no tocar botonesss -->
      
<!--fin-->

<!-- inicio -->
<!--columna Izquierda -->
<div class="columns">
  <div class="container-izquierdo">
    <!--img seccion 1-->
    <div class="img1">
    <img src="vista/img/C/C3.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5021;
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
    <img src="vista/img/C/C4.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5022;
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
    <img src="vista/img/C/C5.jpeg" alt="" class="img-fluid">
    <!-- obteción de datos manual, recordar que depende del id se visualiza la info-->
  <?php
  $id_sec2 = 5023;
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
<?php }}}}}?>
</body>
</html>
