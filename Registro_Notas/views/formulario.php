<!DOCTYPE html>
<html>
<head>
    <title>Registrar Nota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registrar Nota</h2>
    <form method="post" action="index.php?action=registrar">
        <input type="text" name="estudiante" placeholder="Nombre del estudiante" required>
        <input type="text" name="descripcion" placeholder="Descripción" required>
        <input type="number" step="0.01" name="nota" placeholder="Nota" required>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Ver todas las notas</a>
</body>
</html>
