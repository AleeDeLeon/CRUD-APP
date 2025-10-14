<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario agregado correctamente.<br><a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
