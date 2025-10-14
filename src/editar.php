<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $conn->query("SELECT * FROM usuarios WHERE id=$id");
    $fila = $resultado->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Usuario actualizado correctamente 💖</h2>";
        echo "<a href='ver.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <style>
        body {
            background-color: #FFD6E0; /* Rosita clarito */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 300px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff1493;
        }
        a {
            color: #ff1493;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Editar Usuario 💅</h2>
        <form method="POST" action="editar.php">
            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
            Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required><br>
            Correo: <input type="email" name="correo" value="<?php echo $fila['correo']; ?>" required><br>
            Teléfono: <input type="text" name="telefono" value="<?php echo $fila['telefono']; ?>" required><br>
            <input type="submit" value="Actualizar">
        </form>
        <br>
        <a href="ver.php">Volver</a>
    </div>
</body>
</html>
