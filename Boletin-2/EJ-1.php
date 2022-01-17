<!DOCTYPE html>
<html>

<head>
    <title>EJ-1</title>

    <!-- Hoja de estilos personalizada para los distintos ejercicios -->

    <style>
        html {
            height: 100%;
        }

        body {

            background: linear-gradient(white, gray);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h1 {
            color: black;
        }

        h2 {
            color: white;
        }

        label {
            font-weight: bolder;
        }

        footer {
            color: black;
            position: relative;
            font-weight: bolder;
            width: 100%;
            text-align: center;
        }

        form {
            margin: 25px auto;
            padding: 20px;
            border: 5% black;
            width: fit-content;
            height: fit-content;
            background: gray;
            color: white;
        }

        button {
            padding: 10px;
            font-size: 1rem;
            font-family: 'Lato';
            font-weight: 100;
            background: red;
            color: white;
            border: none;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        tr {
            background-color: lightgray;
            font-weight: bold;
        }
    </style>

    <h1>Foro</h1>
</head>

<body>

    <table border="3">
        <?php

        /* 

    Se inicializan las distintas variables que vamos a utilizar

    -$foro es un array que guarda los datos con clave y valor

    */

        $li = "Lorem fistrum tempor nisi llevame al sircoo cillum enim aliqua ut aute benemeritaar velit. Aliquip esse diodeno va usté muy cargadoo aliquip. Nostrud sit amet duis aute. Velit tiene musho peligro al ataquerl incididunt llevame al sircoo ex ullamco va usté muy cargadoo se calle ustée diodeno occaecat. Qui commodo me cago en tus muelas nostrud va usté muy cargadoo ut a wan qué dise usteer a peich.";

        // Se realiza un session_start(), para guardar variables como el array de foros

        session_start();

        $_SESSION["arrayforo"] = array(
            "Tema 1" => $li,
            "Tema 2" => $li,
            "Tema 3" => $li
        );

        //Se realiza un foreach, para pintar el foro con sus temas y cuerpo

        function pintarArray()
        {
            foreach ($_SESSION["arrayforo"] as $key => $value) {
                echo "<tr><td>$key</td> <td>$value</td></tr>";
            }
        }

        echo pintarArray();

        ?>
    </table>
</body>

<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 2</p>
</footer>

</html>