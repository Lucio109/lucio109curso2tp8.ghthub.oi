<?php

function perimetroCuadrado($lado) {
    $perimetro = $lado * 4;
    return $perimetro;
}

function superficieCuadrado($lado) {
    $superficie = $lado * $lado;
    return $superficie;
}

$lado = 10;
$perimetro = perimetroCuadrado($lado);
$superficie = superficieCuadrado($lado);

echo "El perimetro del cuadrado es: $perimetro\n";
echo "La superficie del cuadrado es: $superficie\n";



function mayuscula($cadena) {
    return strtoupper($cadena);
}

function minuscula($cadena) {
    return strtolower($cadena);
}

$cadena = "hola mundo";

echo "La cadena en mayúscula es: " . mayuscula($cadena);
echo "La cadena en minúscula es: " .minuscula($cadena);




function diasDelMes($mes) {
    if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
        return 31;
    } else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
        return 30;
    } else {
        return 28;
    }
}

$mes = 8;
$dias = diasDelMes($mes);

echo "El mes $mes tiene $dias días\n";









#ejercio 1: en este trabajo trata de la utilizacion de funciones que es pocas palabras en un trabajo extenso estar copiando el mismo code lo hace eneficiente y bastente largo ,las funciones nos ayuda a reciclarlo de manera que podes reutilizar bloques de code varias vaces(podria ser algo estetico o llamar un resultado)
#aca no sabia si el usuario ingrese el dato para que saque el perimetro y el area,cualquier cosa lo cambio.

?>