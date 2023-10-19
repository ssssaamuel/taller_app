<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Crear Curso</title>
</head>
<body>
    <h1>Crear Curso</h1>
    <form method="post" action="procesar_creacion_curso.php">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" required><br>
        <label for "nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="docente">Docente:</label>
        <select name="docente" required>
            <!-- Aquí debes cargar las opciones desde la base de datos de docentes -->
        </select><br>
        <input type="submit" value="Crear Curso">
    </form>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>
