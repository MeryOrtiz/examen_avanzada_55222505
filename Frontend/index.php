<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo de Productos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>🛍️ Catálogo de Productos</h1>

  <div class="search-bar">
    <input type="text" id="categoria" placeholder="Buscar por categoría... (ej: electronics)">
    <button onclick="filtrarPorCategoria()">Buscar</button>
  </div>

  <div id="productos" class="grid"></div>

  <script src="script.js"></script>
</body>
</html>
