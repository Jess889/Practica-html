<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <style>
        table {
            border-collapse: collapse;
            display: flex;
            justify-content: center;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            border: solid 1px;
            text-align: left;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #456f8b, #5e406a);
        }
        h1, h2{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['Telefono'];
    $genero = $_POST['genero'];
    $usuario = $_POST['user'];
    $contrasenia = $_POST['password'];
    $compassword = $_POST['compassword'];

    if ($compassword == $contrasenia) {
        $respuesta = "Correcto";
    } else {
        $respuesta = "Incorrecto";
    }
    ?>

    <h1>Respuesta</h1>
    <h2>Hola: <?php echo $usuario; ?></h2>
    <h2>Tu inicio de sesión fue: <?= $respuesta; ?></h2>

    <h2>Datos registrados:</h2>
    <table>
        <tr>
            <th>Nombre:</th>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <th>Correo:</th>
            <td><?php echo $correo; ?></td>
        </tr>
        <tr>
            <th>Teléfono:</th>
            <td><?php echo $telefono; ?></td>
        </tr>
        <tr>
            <th>Género:</th>
            <td><?php echo $genero; ?></td>
        </tr>
        <tr>
            <th>Usuario:</th>
            <td><?php echo $usuario; ?></td>
        </tr>
        <tr>
            <th>Contraseña:</th>
            <td><?php echo $contrasenia; ?></td>
        </tr>
    </table>
</body>
</html>