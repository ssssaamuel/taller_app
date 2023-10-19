<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Crear Docente</title>
</head>
<body>
    <h1>Crear Docente</h1>
    <form method="post" action="procesar_creacion_docente.php">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="ocupacion">Ocupación:</label>
        <select name="ocupacion" required>
            <!-- Aquí debes cargar las opciones desde la base de datos -->
        </select><br>
        <input type="submit" value="Crear Docente">
    </form>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>
