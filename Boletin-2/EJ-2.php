<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-2</title>

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

</head>

<body>

    <h1>Forocodigo</h1>

    <table border="3">
        <?php

        /* 

        Se realiza el session_start y las llamadas a las distintas funciones

        */

        session_start();
        pintarForo();
        sumarForo();

        //Esta funcion realiza la suma de lo que escribamos via form

        function sumarForo()
        {
            $_SESSION['tema'] = $_POST['Tema'];
            $_SESSION['cuerpo'] = $_POST['Cuerpo'];

            $_SESSION['arrayforo'] += array($_SESSION['tema'] => $_SESSION['cuerpo']);
        }

        //Esta funcion realiza la representacion del array del foro, con sus titulos y cuerpos

        function pintarForo()
        {
            foreach ($_SESSION['arrayforo'] as $key => $value) {
                echo "<tr>
                <td>$key</td> 
                <td>$value</td>
                    </tr>";
            }
        }

        ?>

    </table>

    <form method="POST">
        <h3>Tema</h3>
        <input type="text" name="Tema"><br>
        <h3>Cuerpo</h3>
        <textarea type="text" name="Cuerpo">Escribe el temita</textarea><br>
        <button type="submit" value="Enviar">Enviar</button>
    </form>

</body>

<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 2</p>
</footer>

</html>