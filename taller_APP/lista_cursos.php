<?php
// Conecta a la base de datos y obtiene la lista de cursos

// Aquí deberías realizar una consulta SQL para obtener la lista de cursos

// Procesa los resultados y crea una lista
$cursos = obtenerListaDeCursos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Listar Cursos</title>
</head>
<body>
    <h1>Listado de Cursos</h1>

    <ul>
        <?php foreach ($cursos as $curso): ?>
            <li><?= $curso['nombre'] ?></li>
        <?php endforeach; ?>
    </ul>

    <form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>
