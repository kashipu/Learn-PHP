<?php
//Arreglos Asociativos 
/* Esto va a ser un ejemplo de arreglos
asociativos, con la poblacion de las 
principales ciudades de Colombia

___________________________________
Bogotá: 7.674.366.
Medellín: 2.417.325 
Cali: 2.319.684 
Barranquilla: 1.206.946 
Cartagena: 978.600
Cúcuta: 637.302
____________________________________ */

/* Se crea una variable ciudad y dentro
se ponen las caracteristicas*/

$ciudad[0]=[
'Nombre' => 'Bogotá',
'Población' => 7674366
];

$ciudad[1]=[
    'Nombre' => 'Medellín',
    'Población' => 2417325 
    ];

    
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
    <h1>Ciudades</h1>
    <hr>
    <?php

    // Recorrer el arreglo con un for pintando los datos

   /*  for ($i=0; $i<=1; $i++) { 
        echo '<h2> Nombre: '. $ciudad[$i]['Nombre'].'</h2>';
        echo '<h2> Nombre: '. $ciudad[$i]['Población'].'</h2>';
        echo '<hr>';
    } */
    
    // Recorrer el arreglo con un foreach

    foreach ($ciudad as $valor) {
        echo '<h2> Nombre: '. $valor['Nombre'].'</h2>';
        echo '<h2> Nombre: '. $valor['Población'].'</h2>';
        echo '<hr>';
    }
    
    ?>
</body>
</html>