<?php
function esNumeroFeliz(int $n): bool {
    $vistos = [];
    while ($n != 1 && !isset($vistos[$n])) {
        $vistos[$n] = true;
        $n = sumaCuadradosDigitos($n);
    }
    return $n == 1;
}

function sumaCuadradosDigitos(int $n): int {
    $suma = 0;
    while ($n > 0) {
        $digito = $n % 10;
        $suma += $digito * $digito;
        $n = intdiv($n, 10);
    }
    return $suma;
}

// Ejemplo de uso
$numero = 2;
if (esNumeroFeliz($numero)) {
    echo "$numero es un número feliz";
} else {
    echo "$numero no es un número feliz";
}