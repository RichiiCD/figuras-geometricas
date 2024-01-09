<?php

if (!isset($_POST['shape']) || empty($_POST['shape'])) {
    header('Location: ../index.php');
    exit();
}

$shape_type = $_POST['shape'];


if ($shape_type == 'triangulo') {
    include '../objects/Triangulo.php';
    
    $base = $_POST['lado1'];
    $altura = $_POST['lado2'];

    $figura = new Triangulo($base, $altura);

} else if ($shape_type == 'rectangulo') {
    include '../objects/Rectangulo.php';

    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];

    $figura = new Rectangulo($lado1, $lado2);

} else if ($shape_type == 'cuadrado') {
    include '../objects/Cuadrado.php';

    $lado1 = $_POST['lado1'];

    $figura = new Cuadrado($lado1);

} else {
    include '../objects/Circulo.php';

    $radio = $_POST['lado1'];

    $figura = new Circulo($radio);
}

$data = [
    'area' => $figura->area(),
    'perimeter' => $figura->perimetro()
];

echo json_encode($data);
