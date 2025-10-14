<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD en Docker - Ale</title>
    <style>
        body {
            background-color: #FFC0CB; /* rosita cute */
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
        <h1>Agregar Usuario</h1>
        <form action="insertar.php" method="POST">
            Nombre: <input type="text" name="nombre" required><br>
            Correo: <input type="email" name="correo" required><br>
            Teléfono: <input type="text" name="telefono" required><br>
            <input type="submit" value="Guardar">
        </form>
        <br>
        <a href="ver.php">Ver usuarios</a>
    </div>
</body>
</html>
