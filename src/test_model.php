<?php
require_once 'models/UserModel.php';

$userModel = new UserModel();

// Descomenta esta línea solo una vez si quieres insertar un nuevo usuario
// $userModel->create("Nuevo Usuario", "nuevo@mail.com");

$usuarios = $userModel->getAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba UserModel</title>
</head>
<body>
    <h1>Prueba del Modelo UserModel</h1>

    <h2>Lista de usuarios</h2>

    <?php if (count($usuarios) > 0): ?>
        <ul>
            <?php foreach ($usuarios as $usuario): ?>
                <li>
                    ID: <?php echo $usuario['id']; ?> -
                    Nombre: <?php echo htmlspecialchars($usuario['nombre']); ?> -
                    Email: <?php echo htmlspecialchars($usuario['email']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay usuarios registrados.</p>
    <?php endif; ?>

    <hr>

    <h2>Buscar usuario por ID</h2>

    <?php
    $usuario = $userModel->getById(1);

    if ($usuario) {
        echo "<p>Usuario encontrado: " . htmlspecialchars($usuario['nombre']) . " - " . htmlspecialchars($usuario['email']) . "</p>";
    } else {
        echo "<p>No se encontró el usuario.</p>";
    }
    ?>
</body>
</html>