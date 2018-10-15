<?php
$animales = ['Perro', 'Gato', 'Elefante', 'Gallinas', 'Vaca']
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
<!--  <h1>Mi animal favorito es: <?php echo $animales[0]; ?> </h1>    -->
 <?php 
 $i=0;
 while($i<=4){
     echo '<h1> Mi Animal favorito es: '. $animales[$i].'</h1>';
     $i++;
 }
 ?>
</body>
</html>