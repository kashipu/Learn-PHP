<?php

// Esta es la conexion a la base de datos local SOLAMENTE

$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';
$pass = '';

try {
    $pdo = new pdo($link,$usuario,$pass);

  //  echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>