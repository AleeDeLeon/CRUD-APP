<?php
$host = 'db';
$usuario = 'root';
$contraseña = 'root';
$base_datos = 'crud_db';

$conn = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// echo "Conexión exitosa";
?>
