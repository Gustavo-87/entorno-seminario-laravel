<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Lista de Usuarios</h1>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success">
            Usuario creado exitosamente.
        </div>
    <?php endif; ?>

    <a href="index.php?action=create" class="btn btn-primary mb-3">Crear Nuevo</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo htmlspecialchars($user['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <a href="index.php?action=delete&id=<?php echo $user['id']; ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('¿Eliminar?')">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>