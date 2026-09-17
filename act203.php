<?php
$globalVar = "Soy global";

function probarAmbito() {
    $localVar = "Soy local";
    global $globalVar;
    static $contador = 0;

    $contador++;
    
    echo $localVar . "<br>";
    echo $globalVar . "<br>";
    echo "Contador: " . $contador . "<br>";
}

probarAmbito();
probarAmbito();

// ¿Qué ocurre si intentamos acceder a estas variables aquí?
// echo $localVar;
// echo $contador;
?>

