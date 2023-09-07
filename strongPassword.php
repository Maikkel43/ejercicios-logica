<?php
function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong

    $count = 0;
    $lower = false;
    $upper = false;
    $digit = false;
    $special = false;
    $faltante = 6 - $n;
    $special_characters = "!@#$%^&*()-+";
    
    //iteracion de los caracteres de la contraseña
    for ($i = 0; $i < $n; $i++) {
        if ($password[$i] >= 'a' && $password[$i] <= 'z') {
            $lower = true;
        } else if ($password[$i] >= 'A' && $password[$i] <= 'Z') {
            $upper = true;
        } else if ($password[$i] >= '0' && $password[$i] <= '9') {
            $digit = true;
        } else if (strpos($special_characters, $password[$i]) !== false) {
            $special = true;
        }
    }
    
    if (!$lower) {
        $count++;
    }
    
    if (!$upper) {
        $count++;
    }
    
    if (!$digit) {
        $count++;
    }
    
    if (!$special) {
        $count++;
    }
    
    if ($n < 6) {
        return max($faltante, $count);
    } else {
        return $count;
    }
}
?>