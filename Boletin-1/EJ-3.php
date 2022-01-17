<!DOCTYPE html>
<html>

<head>
    <title>EJ-3</title>
</head>

<body>
    <h1>EJ-3 Triangulo Floyd</h1>
    <?php

    /* 
    Se inicializan las distintas variables que vamos a utilizar

    -$num recibe por el formulario el numero que quiere el usuario
    */

    $num = 1;

    //Se reutiliza la misma piramide de asteriscos, para realizar el triangulo de Floyd

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {

            //Se realiza un espacio, con un echo del numero

            echo "&nbsp;" .  $num;

            //Se hace un incremento del numero

            $num++;
        }

        echo "<br/>";
    }
    ?>
</body>

</html>