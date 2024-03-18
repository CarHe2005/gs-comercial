<?php
// inclusion de controladores, bd.
include "modelo/conexion.php";
include "controlador/formulariovisual.php";
?>
<!--Incio Html-->
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
      <link rel="stylesheet" href="vista/formulario.css">
      <title>Editar Sección</title>
</head>
<body>
<!--inicio de formulario-->
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 p-4 border " style="border-radius: 45px; background-color: white; width: 600px;">
        <form action="" method="POST">
            <h3 class="text-center mb-4"><B>SECCIÓN</B></h3>
            <!-- controlador update para visualización correcta de advertencias-->
            <?php
            include "controlador/updateformulario.php";
            $ID_SEC = $_GET["ID_SEC"];
            $datosSeccion = obtenerDatosSeccion($ID_SEC);
            foreach ($datosSeccion as $seccion) { ?>
            <!--inicio de inputs del formulario-->
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="Sec_Id" class="form-label a"><B> Id Sección</B></label>
                    <input type="text" class="form-control" name="ID_SEC" style="width: 250px;"  placeholder="Identificación de la sección" value = "<?php echo $seccion['ID_SEC']?>">
                </div>
                
                <div class="col-md-6">
                    <label for="NombreSeccion" class="form-label a"><B>Nombre Sección</B></label>
                    <input type="text" class="form-control" style="width: 250px;" name="TIT_SEC" value = "<?php echo $seccion['TIT_SEC']?>">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="Descripcion" class="form-label"><B>Descripción</B></label>
                <textarea class="form-control" id="Descripcion" rows="3"  name="SEC_DES"><?php echo $seccion['SEC_DES']?></textarea>
            </div>
            
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="FechaInicio" class="form-label"><B>Fecha Inicio</B></label>
                    <input type="date" class="form-control" name="FEC_INI" value = "<?php echo $seccion['FEC_INI']?>">
                </div>
                    
                <div class="col-md-6">
                    <label for="FechaFinal" class="form-label"><B>Fecha Final</B></label>
                    <input type="date" class="form-control" name="FEC_FIN" value = "<?php echo $seccion['FEC_FIN']?>">
                </div>
            </div>
            
            <!-- selector automaticos dependiendo los registros en su tbl-->
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="estado" class="form-label"><B>Estado</B></label>
                    <select name="ID_EST" class="form-select">
                        <!--logica del selector-->
                        <?php
                        $ID_SEC = $_GET["ID_SEC"];
                        $datosestados = obtenerEstados($ID_SEC);
                        foreach ($datosestados as $estados) {
                            $ID_EST = $estados["ID_EST"];
                            $NOM_EST = $estados["NOM_EST"];
                            $isSelected = ($ID_EST == $seccion['ID_EST']) ? 'selected' : '';
                            echo "<option value='$ID_EST' $isSelected>$NOM_EST</option>";
                        }
                        ?>
                        <!--fin logica-->
                    </select>
                </div>
            <!-- fin -->
                    
            <div class="col-md-6">
                <label for="LugDestino" class="form-label"><B>Proveedor</B></label>
                <input type="text" class="form-control" name ="PRO_SEC" value = "<?php echo $seccion['PRO_SEC']?>" >
            </div>
        </div>
        

        <!-- selector automaticos dependiendo los registros en su tbl-->
        <div class="row g-3">
            <div class="col-md-6">
                <label for="Grupo" class="form-label"><B>Grupo</B></label>
                <select name="ID_GRUP" class="form-select">
                    <!--logica del selector-->
                    <?php
                    $datosgrupos = obtenerGrupos($id_sec);
                    foreach ($datosgrupos as $grupo) {
                        $ID_GRUP = $grupo["ID_GRUP"];
                        $NOM_GRUP = $grupo["NOM_GRUP"];
                        $isSelected = ($ID_GRUP == $seccion['ID_GRUP']) ? 'selected' : '';
                        echo "<option value='$ID_GRUP' $isSelected>$NOM_GRUP</option>";}
                        ?>
                        <!--fin logica-->
                    </select>
                </div>
            <!-- fin --> 
            
            <div class="col-md-6">
                <label for="LugDestino" class="form-label"><B>Marca</B></label>
                <input type="text" class="form-control" name="MAR_SEC" value = "<?php echo $seccion['MAR_SEC']?>" >
            </div>
        </div>

        <div class="col-md-6">
            <label for="Valor" class="form-label"><B>Valor</B></label>
        <input type="text" class="form-control" name="VAL_SEC" value = "<?php echo $seccion['VAL_SEC']?>">
    </div>

    <p></p>
    <!--botones-->
    <div class="form-group">
        <div>
        <button type="button" class="btn btn-warning" onclick="window.location.href='crudbalmoral.php'">Atrás</button>
            <button type="" name="" class="btn btn-success" value="">Guardar</button>
        </div>
    </div>
</div>
</div>
<!-- cierre corchetes php -->
<?PHP }?>
</body>
</html>