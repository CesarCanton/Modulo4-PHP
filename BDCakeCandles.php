<?php
function pastelCumpleañoscandelas(array $candelas): int {
    $max = max($candelas);
    $contador = 0;
    foreach ($candelas as $candela) {
        if ($candela == $max) {
            $contador++;
        }
    }
    return $contador;
}

// Ejemplo de uso
$candelas = [3, 2, 1, 3,5,8,8];
echo pastelCumpleañoscandelas($candelas);