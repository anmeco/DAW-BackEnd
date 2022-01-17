<!DOCTYPE html>
<html>

<head>
  <title>EJ-2</title>
  <style>
    form {
      margin: 25px auto;
      padding: 20px;
      border: 5px solid #ccc;
      width: 500px;
      background: #eee;
    }

    div.form-element {
      margin: 20px 0;
    }

    button {
      padding: 10px;
      font-size: 1.5rem;
      font-family: 'Lato';
      font-weight: 100;
      background: yellowgreen;
      color: white;
      border: none;
    }

    p.success,
    p.error {
      color: white;
      font-family: lato;
      background: yellowgreen;
      display: inline-block;
      padding: 2px 10px;
    }

    p.error {
      background: orangered;
    }
  </style>
</head>

<body>

  <h1>EJ-2 Factorial</h1>

  <form method='POST'>
    <input type="text" name="numero">
    <input type="submit" name="enviar">
    <input type="reset" name="borrar">
  </form>

  <?php

  /* 
    Se inicializan las distintas variables que vamos a utilizar

    -$dato recibe por el formulario el numero que quiere el usuario
    */

  $dato = $_POST['numero'];

  //El factorial es la cantidad que resulta de la multiplicación 
  //de determinado número natural por todos los números naturales 
  //que le anteceden excluyendo el ceros

  for ($i = $dato - 1; $i > 0; --$i) {

    //Por ello utilizamos el dato con un for, y realizamos una multiplicacion sobre si mismo

    $dato *= $i;
  }
  echo $dato;

  ?>

</body>

</html>