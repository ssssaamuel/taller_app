<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Resultados</h1>

    <?php
    if (isset($_POST['numbers'])) {
        $input_numbers = $_POST['numbers'];

        $numbers = explode(',', $input_numbers);

        $numbers = array_filter(array_map('trim', $numbers));

        sort($numbers);
        echo "<h2>Esta es la lista de números ordenada de menor a mayor:</h2>";
        echo implode(', ', $numbers);

        $even_numbers = array_filter($numbers, function($num) {
            return $num % 2 === 0;
        });
        rsort($even_numbers);
        echo "<h2>Estos son los números pares ordenados de mayor a menor v:</h2>";
        echo implode(', ', $even_numbers);

        $odd_numbers = array_filter($numbers, function($num) {
            return $num % 2 !== 0;
        });
        sort($odd_numbers);
        echo "<h2>Estos son los números impares ordenados de menor a mayor ingresados:</h2>";
        echo implode(', ', $odd_numbers);
    }
    ?>
    <form method="get" action="menu.html">
        <input type="submit" value="Volver al Menú">
    </form>
</body>
</html>
