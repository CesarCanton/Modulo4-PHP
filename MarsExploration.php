<?php
function contarLetrasModificadasSOS($mensaje) {
    $patron = "SOS";
    $contador = 0;

    for ($i = 0; $i < strlen($mensaje); $i++) {
        // Compara cada letra con el patrón correspondiente
        if ($mensaje[$i] !== $patron[$i % 3]) {
            $contador++;
        }
    }
    return $contador;
}

// Ejemplo de uso
$mensaje = "SOSSOTSOSSOSS";
echo "Letras modificadas: ". contarLetrasModificadasSOS($mensaje) . "\n";