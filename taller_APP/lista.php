<?php
namespace App;

require_once 'controllers/DocentesController.php';
require_once 'controllers/CursosController.php';

use App\controllers\DocentesController;
use App\controllers\CursosController;

$docentesController = new DocentesController();
$cursosController = new CursosController();

$docentes = $docentesController->listarDocentes();
$cursos = $cursosController->listarCursos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Gestión de Docentes y Cursos</title>
</head>
<body>
    <h1>Gestión de Docentes y Cursos</h1>

    <h2>Docentes</h2>
    <ul>
        <?php foreach ($docentes as $docente): ?>
            <li><?= $docente['nombre'] ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Cursos</h2>
    <ul>
        <?php foreach ($cursos as $curso): ?>
            <li><?= $curso['nombre'] ?> (Docente: <?= $curso['nombreDocente'] ?>)</li>
        <?php endforeach; ?>
    </ul>

    <form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>
