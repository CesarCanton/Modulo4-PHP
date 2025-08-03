<?php 
function validarContraseña($password, $tamañoMinimo) {

    // Verificar si la contraseña es lo suficientemente larga
    if (strlen($password) < $tamañoMinimo) {
        return false;
    }
    // Verificar si la contraseña contiene al menos una letra mayúscula
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }
    // Verificar si la contraseña contiene al menos una letra minúscula
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }
    // Verificar si la contraseña contiene al menos un dígito
    if (!preg_match('/\d/', $password)) {
        return false;
    }
    // Verificar si la contraseña contiene al menos un carácter especial
    if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
        return false;
    }
    // Si todas las condiciones se cumplen, la contraseña es fuerte
    return true;
    
}

$password = "1!";
$tamañoMinimo = 8;
if (validarContraseña($password, $tamañoMinimo)) {
    echo "La contraseña es fuerte.";
}else {
    echo "La contraseña no es fuerte.";
}
?>