<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO proyectos (nombre, descripcion) VALUES (:nombre, :descripcion)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);

    if ($stmt->execute()) {
        echo "Proyecto agregado exitosamente.";
        header("Location: index.php#proyectos");
    } else {
        echo "Error al agregar el proyecto.";
    }
}
?>
