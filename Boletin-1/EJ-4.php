<!DOCTYPE html>
<html>

<head>
    <title>EJ-4</title>
</head>

<body>

    <?php

    /* 
    Se inicializan las distintas variables que vamos a utilizar

    -$datos es un array que guarda la informacion
    */

    $datos = array(
        'Enrique' => '26',
        'Pablo' => '24',
        'Raquel' => '25',
        'Alicia' => '21',
    );

    //a) Ordenar por clave, en orden descendente

    krsort($datos);
    echo " El array ordenado de forma descendente por clave quedaria asi " . var_export($datos) . "<br>";

    //b) Ordenar por valor, en orden descendente
    echo " El array ordenado de forma descendente por valor quedaria asi " . var_export($datos) . "<br>";
    arsort($datos);
    //c) Ordenar por clave, en orden ascendente
    echo " El array ordenado de forma ascendente por clave quedaria asi " . var_export($datos) . "<br>";
    ksort($datos);
    
    //d) Ordenar por valor, en orden descendente
    echo " El array ordenado de forma ascendente por valor quedaria asi " . var_export($datos) . "<br>";
    asort($datos);
    ?>
</body>

</html>