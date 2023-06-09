<?php
$soma = 0;

for ($i = 10; $i <= 500; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}

echo "A soma dos números pares no intervalo de 10 a 500 é: " . $soma;
?>
