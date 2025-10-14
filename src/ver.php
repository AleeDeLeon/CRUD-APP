<?php
include 'conexion.php';
$resultado = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Usuarios</title>
    <style>
        body {
            background-color: #FFD6E0; /* rosita clarito */
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        th {
            background-color: #ff69b4;
            color: white;
            padding: 12px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #ffe6f2;
        }
        a {
            color: #ff1493;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            background-color: #ff69b4;
            color: white;
            padding: 8px 15px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <h1>Lista de Usuarios 💖</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['telefono']; ?></td>
            <td>
                <a class="btn" href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
                <a class="btn" href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php" class="btn">Volver</a>
</body>
</html>
