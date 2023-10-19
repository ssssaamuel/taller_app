<?php
// Conecta a la base de datos y obtiene la lista de docentes

// Aquí deberías realizar una consulta SQL para obtener la lista de docentes

// Procesa los resultados y crea una lista
$docentes = obtenerListaDeDocentes();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Listar Docentes</title>
</head>
<body>
    <h1>Listado de Docentes</h1>

    <ul>
        <?php foreach ($docentes as $docente): ?>
            <li><?= $docente['nombre'] ?></li>
        <?php endforeach; ?>
    </ul>

    <form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>
