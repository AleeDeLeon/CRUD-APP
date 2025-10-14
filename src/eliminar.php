<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Usuario eliminado correctamente 💖</h2>";
        echo "<a href='ver.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
