<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Resultado</h1>

    <?php
    class CalculadoraArea {
        public function calcular($figura, $datos) {
            switch ($figura) {
                case 'circulo':
                    if (isset($datos['radio'])) {
                        $radio = floatval($datos['radio']);
                        $area = M_PI * ($radio ** 2);
                        echo "Área del círculo: $area";
                    } else {
                        echo "Falta el valor del radio para el círculo.";
                    }
                    break;
                case 'cuadrado':
                    if (isset($datos['lado'])) {
                        $lado = floatval($datos['lado']);
                        $area = $lado ** 2;
                        echo "Área del cuadrado: $area";
                    } else {
                        echo "Falta el valor del lado para el cuadrado.";
                    }
                    break;
                case 'rectangulo':
                    if (isset($datos['base']) && isset($datos['altura'])) {
                        $base = floatval($datos['base']);
                        $altura = floatval($datos['altura']);
                        $area = $base * $altura;
                        echo "Área del rectángulo: $area";
                    } else {
                        echo "Faltan los valores de la base y la altura para el rectángulo.";
                    }
                    break;
                case 'triangulo':
                    if (isset($datos['base']) && isset($datos['altura'])) {
                        $base = floatval($datos['base']);
                        $altura = floatval($datos['altura']);
                        $area = 0.5 * $base * $altura;
                        echo "Área del triángulo: $area";
                    } else {
                        echo "Faltan los valores de la base y la altura para el triángulo.";
                    }
                    break;
                default:
                    echo "Figura no válida.";
            }
        }
    }

    if (isset($_POST['shape'])) {
        $figura = $_POST['shape'];
        $calculadora = new CalculadoraArea();

        echo "<form method='post' action='area.php'>";
        echo "<label for='shape'>Seleccione la figura:</label>";
        echo "<select name='shape' id='shape' required>";
        echo "<option value='circulo' " . ($figura == 'circulo' ? 'selected' : '') . ">Círculo</option>";
        echo "<option value='cuadrado' " . ($figura == 'cuadrado' ? 'selected' : '') . ">Cuadrado</option>";
        echo "<option value='rectangulo' " . ($figura == 'rectangulo' ? 'selected' : '') . ">Rectángulo</option>";
        echo "<option value='triangulo' " . ($figura == 'triangulo' ? 'selected' : '') . ">Triángulo</option>";
        echo "</select>";

        if ($figura == 'circulo') {
            echo "<label for='radio'>Radio:</label>";
            echo "<input type='text' name='radio' id='radio' required>";
        } elseif ($figura == 'cuadrado') {
            echo "<label for='lado'>Lado:</label>";
            echo "<input type='text' name='lado' id='lado' required>";
        } elseif ($figura == 'rectangulo') {
            echo "<label for='base'>Base:</label>";
            echo "<input type='text' name='base' id='base' required>";
            echo "<label for='altura'>Altura:</label>";
            echo "<input type='text' name='altura' id='altura' required>";
        } elseif ($figura == 'triangulo') {
            echo "<label for='base'>Base:</label>";
            echo "<input type='text' name='base' id='base' required>";
            echo "<label for='altura'>Altura:</label>";
            echo "<input type='text' name='altura' id='altura' required>";
        }

        echo "<input type='submit' value='Calcular Área'>";
        echo "</form>";

        if (isset($_POST['shape'])) {
            $datos = $_POST;
            $calculadora->calcular($figura, $datos);
        }
    }
    ?>
    <form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>


