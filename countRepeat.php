<?php
//funcion para encontrar los indices diferentes
function heightChecker($heights) {

    $n = count($heights);
    $expecteds = $heights;
    sort($expecteds);
    $index = 0;


//se recorre el array desde cero hasta su longitud
    for($i = 0; $i < $n; $i++){
        if($heights[$i] != $expecteds[$i]){
            $index++;
        }
    }
//devolviendo el total de diferentes
    return $index;
}
?>