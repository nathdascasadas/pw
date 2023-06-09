<?php
define("PI", 3.141592); // Definindo a constante PI

$raio = 5; // Valor do raio da esfera

// Cálculo da área da esfera
$area = 4 * PI * pow($raio, 2);

// Cálculo do volume da esfera
$volume = (4/3) * PI * pow($raio, 3);

echo "Raio: " . $raio . "<br>";
echo "Área da esfera: " . $area . "<br>";
echo "Volume da esfera: " . $volume . "<br>";
?>
