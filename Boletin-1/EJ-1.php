<!DOCTYPE html>
<html>

<head>
    <title>EJ-1</title>
    <style>

body{
  background:linear-gradient(30deg, black, red);
}

h1{
  color:white;
}

h2{
  color: white;
}

label{
  font-weight: bolder;
}

footer{
  color: white;
  position: fixed;
  font-weight: bolder;
  width: 100%;
  text-align: center;
}

form {
    margin: 25px auto;
    padding: 20px;
    border: 5px white;
    width: 500px;
    background: black;
    color: white;
}

div.form-element {
    margin: 20px 0;
}

button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: red;
    color: white;
    border: none;
}
</style>
</head>

<body>

    <h1>EJ-1</h1>

    <?php
    /* 
    Se inicializan las distintas variables que vamos a utilizar

    -$tam_Fil/$tam_Col es para decidir que tamaño utilizara la fila y la columna
    */
    $tam_Fil = 7;
    $tam_Col = 5;

    //Esta variable guarda la mitad redondeada por ceil para utilizarla luego como condicion

    $mitad = ceil($tam_Fil / 2);

    //Se realizan dos for anidados, como si una piramide se tratara pero dandole la forma

    for ($fila = 1; $fila <= $tam_Fil; $fila++) {
        for ($columna = 1; $columna <= $tam_Col; $columna++) {
            //Este if controla la mitad de la S, para pintar la primera linea media de *
            if ($fila == 1 || $fila == $mitad || $fila == $tam_Fil) {
                echo "*&nbsp;";
                //El segundo if controla cuando la fila esta en la parte izquierda
                // para pintar la parte de arriba de la S, el sombrero
            } else if ($columna == 1 && $fila < $mitad) {
                echo "*&nbsp;";
                //Este ultimo if controla la parte baja de la S, realizando el otro lado
            } else if ($columna == $tam_Col && $fila > $mitad) {
                echo "*&nbsp;";
                //Else para realizar los espacios necesarios, para realizar la S
            } else {
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    ?>

</body>

</html>