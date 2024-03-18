<?php
session_start();
include "modelo/conexion.php";


// Verificar si se enviaron datos POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $correo = $_POST["COR_USU"];
    $contraseña = $_POST["CON_USU"];

    // Consulta SQL para verificar el usuario y obtener su rol
    $consulta = "SELECT ROL_ID FROM usuarios WHERE COR_USU = ? AND CON_USU = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ss", $correo, $contraseña);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si se encontró el usuario
// Verificar si se encontró el usuario
if ($resultado->num_rows == 1) {
    // Obtener el rol del usuario
    $fila = $resultado->fetch_assoc();
    $rol = $fila['ROL_ID'];

    // Guardar el rol en la sesión
    $_SESSION['rol'] = $rol;

    // Redirigir a la página correspondiente según el rol
    switch ($rol) {
        case 1:
            header('Location: /sedes/index.html');
            exit(); // Importante: detener la ejecución del script después de la redirección
            break;
        case 2:
            header('Location: /sedes/index.html');
            exit(); // Importante: detener la ejecución del script después de la redirección
            break;
        default:
            // Redirigir a una página de error o manejar el caso de otro modo
            break;
    }
}}
?>