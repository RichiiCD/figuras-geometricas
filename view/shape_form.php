<?php

if (!isset($_GET['shape']) || empty($_GET['shape'])) {
    header('Location: ../index.php');
    exit();
}

$shape_type = $_GET['shape'];


echo "<form action='../proc/calculate_shape.php' method='POST'>";

if ($shape_type == 'triangulo') {
    echo "
        <input type='number' step='any' name='lado1' placeholder='Base' />
        <input type='number' step='any' name='lado2' placeholder='Altura' />
    ";

} else if ($shape_type == 'rectangulo') {
    echo "
        <input type='number' step='any' name='lado1' placeholder='Lado 1' />
        <input type='number' step='any' name='lado2' placeholder='Lado 2' />
    ";

} else if ($shape_type == 'cuadrado') {
    echo "
        <input type='number' step='any' name='lado1' placeholder='Lado' />
    ";

} else {
    echo "
        <input type='number' step='any' name='lado1' placeholder='Radio' />
    ";
}

echo "<input type='hidden' name='shape' value='$shape_type'>";
echo "<input type='submit' value='Calcular'>";
echo "</form>";
