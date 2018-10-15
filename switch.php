<?php

/*Sentencia SWITCH

Evalua multiples casos segun una variable y reaaliza una accion en este 
caso un usuario realizara una $eleccion que dependiento esta realizara
una accion en este caso pondra el precio del producto que eligio

*/

$eleccion = 'Pizza';
switch ($eleccion) {
    case 'Helado':
        echo 'El Valor del Helado es de $1.000';
        break;
    case 'Pizza':
        echo 'El Valor de la Pizza es de $3.000';
        break;
    case 'Torta':
        echo 'El Valor de la Torta es de $2.000';
        break;
    default:
        echo 'Esta no es una elección valida';
        break;
}

?>