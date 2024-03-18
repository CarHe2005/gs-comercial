
<?php



// Verificar si se proporcionó el parámetro ID_SEC en el POST
if (isset($_POST["ID_SEC"])) {

    // Obtener datos del formulario
    $ID_SEC = $_POST["ID_SEC"];
    $TIT_SEC = $_POST['TIT_SEC'];
    $SEC_DES = $_POST['SEC_DES'];
    $PRO_SEC = $_POST['PRO_SEC'];
    $ID_GRUP = $_POST['ID_GRUP'];
    $MAR_SEC = $_POST['MAR_SEC'];
    $FEC_INI = $_POST['FEC_INI'];
    $FEC_FIN = $_POST['FEC_FIN'];
    $ID_EST = $_POST['ID_EST'];
    $VAL_SEC = $_POST['VAL_SEC'];

    // Consulta SQL para actualizar la tabla secciones
    $sql = "UPDATE secciones 
            SET
                TIT_SEC = '$TIT_SEC',
                SEC_DES = '$SEC_DES',
                PRO_SEC = '$PRO_SEC',
                ID_GRUP = '$ID_GRUP',
                MAR_SEC = '$MAR_SEC',
                FEC_INI = '$FEC_INI',
                FEC_FIN = '$FEC_FIN',
                ID_EST = '$ID_EST',
                VAL_SEC = '$VAL_SEC'
            WHERE ID_SEC = '$ID_SEC'";

    // Ejecutar la consulta y verificar si fue exitosa
      if ($conexion->query($sql) === TRUE){
        // Mostrar la alerta de registro exitoso
        echo '<div class="alert alert-success h4">Registro exitoso</div>';
        
        // Mostrar el botón para ir atrás
        echo '<button type="button" class="btn btn-success" onclick="window.location.href=\'crudbalmoral.php\'">Atrás</button>';
        
        exit();
    } else {
        // Manejar errores
        echo '<div class="alert alert-danger h4">Error al registrar </div>';
    }
}
?>

