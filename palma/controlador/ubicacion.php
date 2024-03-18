<?php
include "../modelo/conexion.php";

// Validar que se haya proporcionado una ubicación
if (isset($_GET['ID_UBI'])) {
    $ubicacion = $_GET['ID_UBI'];

    // Consulta SQL para obtener datos específicos basados en la ubicación seleccionada
    $sql = $conexion->prepare("SELECT * FROM secciones WHERE ID_UBI = ?");
    $sql->bind_param("s", $ubicacion);
    $sql->execute();
    $result = $sql->get_result();

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        echo "<h2>Datos para la Ubicación: $ubicacion</h2>";
        echo "<ul>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['ID_SEC']} - {$row['ID_UBI']}</li>";
            // Agrega más campos según tus necesidades
        }

        echo "</ul>";
    } else {
        echo "<p>No se encontraron datos para la Ubicación: $ubicacion</p>";
    }

    // Cierra la conexión y la consulta
    $sql->close();
    $conexion->close();
} else {
    echo "<p>No se proporcionó una ubicación válida.</p>";
}
?>


?>