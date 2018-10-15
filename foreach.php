<?php
$animales = ['Perro', 'Gato', 'Elefante', 'Gallinas', 'Vaca', 'palomas', 'pavos']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--  <h1>Mi animal favorito es: <?php //echo $animales[0]; ?> </h1>    -->


 <?php 
// $animales = ['Perro', 'Gato', 'Elefante', 'Gallinas', 'Vaca']
 // Esto es un for un ciclo determinado que recorre un arreglo en este caso 
/* for($i=0;$i<=2;$i++){
   echo '<h1> Mi animal Favorito es: '. $animales[$i].'</h1>'; 
} */

// For each para no tener que saber cuantos elementos hay en un arreglo

foreach ($animales as $valor) {
    echo '<h1> Mi animal Favorito es: '. $valor.'</h1>'; 
}


?>
</body>
</html>