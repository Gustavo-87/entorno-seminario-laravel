<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefono = $_POST["telefono"] ?? "";

    if (empty($nombre) || empty($email) || empty($telefono)) {
        $mensaje = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($telefono)) {
        $mensaje = "El teléfono debe ser numérico.";
    } else {
        $nombreSeguro = htmlspecialchars($nombre);
        $emailSeguro = htmlspecialchars($email);
        $telefonoSeguro = htmlspecialchars($telefono);

        $mensaje = "Datos recibidos correctamente:<br>";
        $mensaje .= "Nombre: $nombreSeguro<br>";
        $mensaje .= "Email: $emailSeguro<br>";
        $mensaje .= "Teléfono: $telefonoSeguro";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <h1>Formulario de Registro</h1>

    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Teléfono:</label><br>
        <input type="number" name="telefono"><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

    <p><?php echo $mensaje; ?></p>
</body>
</html>