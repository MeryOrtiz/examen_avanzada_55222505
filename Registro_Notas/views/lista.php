<!DOCTYPE html>
<html>
<head>
    <title>Lista de Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Notas Registradas</h2>
    <a href="index.php?action=registrar">Registrar nueva nota</a>
    <table>
        <tr>
            <th>Estudiante</th>
            <th>Descripción</th>
            <th>Nota</th>
        </tr>
        <?php foreach ($notas as $n): ?>
            <tr>
                <td><?= htmlspecialchars($n['estudiante']) ?></td>
                <td><?= htmlspecialchars($n['descripcion']) ?></td>
                <td><?= htmlspecialchars($n['nota']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><strong>Promedio General:</strong> <?= number_format($promedio, 2) ?></p>
</body>
</html>
