<?php
require_once 'config/Database.php';

$db = Database::getInstance()->getConnection();

$sql = "SELECT id, nombre, email FROM users";
$stmt = $db->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de conexión PDO</title>
</head>
<body>
    <h1>Usuarios registrados</h1>

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
</body>
</html>