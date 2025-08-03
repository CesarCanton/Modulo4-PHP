<?php
function sumaGrande($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

$numeros = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
echo "La suma es: " . sumaGrande($numeros);