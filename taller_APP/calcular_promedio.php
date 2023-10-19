<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['materia']) && isset($_POST['cantidad']) && isset($_POST['minimo']) && isset($_POST['maximo']) && isset($_POST['valor-notas'])) {
        $materia = $_POST['materia'];
        $cantidad = intval($_POST['cantidad']);
        $minimo = floatval($_POST['minimo']);
        $maximo = floatval($_POST['maximo']);
        $valor_notas = explode(",", $_POST['valor-notas']);

        // Validar que el rango sea correcto
        if ($minimo >= $maximo) {
            echo "El rango de calificación es incorrecto.";
        } else {
            // Validar que la cantidad de notas coincida con la cantidad de valores ingresados
            if (count($valor_notas) != $cantidad) {
                echo "La cantidad de valores de notas no coincide con la cantidad especificada.";
            } else {
                $suma_notas = 0;

                // Validar y sumar las notas
                $notas_validas = true;
                foreach ($valor_notas as $nota) {
                    $nota = floatval($nota);
                    if ($nota < $minimo || $nota > $maximo) {
                        $notas_validas = false;
                        break;
                    }
                    $suma_notas += $nota;
                }

                if (!$notas_validas) {
                    echo "Una o más notas están fuera del rango especificado.";
                } else {
                    $promedio = $suma_notas / $cantidad;
                    echo "Materia: $materia<br>";
                    echo "Promedio de notas: $promedio<br>";
                    $nota_min_aprobacion = ($minimo + $maximo) / 2 + 0.5;
                    echo $promedio >= $nota_min_aprobacion ? "¡Aprobado!" : "Reprobado";
                }
            }
        }
    } else {
        echo "Faltan datos para realizar el cálculo.";
    }
    ?>
<form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>

