<?php
function lorem(){
    return '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ex optio aperiam adipisci natus at fugit, consequuntur eius 
    et illum tempore distinctio facilis modi dicta? 
    Voluptatem laudantium officia molestiae at eius.<p>';
}


function promedio($n1,$n2){
    echo $n1+$n2/2;
}

echo promedio(10,20);

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
     <?php
    echo lorem();
    echo lorem();
    echo lorem();
    echo lorem();
    ?>
</body>
</html>