<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-5</title>

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

    <h1>ForoCodigo</h1>

    <?php

    //Se realiza un session start

    session_start();
    escribirForum();

    //Este if controla si existe un array en una session de foro ya guardada, si no utilizara la siguiente

    if (!isset($_SESSION['foro'])) {
        $li = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies erat sit amet enim pulvinar scelerisque. Morbi sit amet odio quis magna dapibus tempus et vitae sem. Quisque cursus ante nulla, eget feugiat est gravida et. Proin non tincidunt metus. Curabitur non ante sed velit facilisis sagittis at non arcu. Sed id auctor augue. Praesent pulvinar ante a metus tempus sollicitudin. Vestibulum elit lacus, luctus sed venenatis ut, commodo ut ante. In quis elementum nulla. Nam et egestas mi. Donec molestie purus ac elit suscipit efficitur. Integer odio urna, semper ultrices tristique quis, pellentesque ut enim. Suspendisse placerat, nisi at pretium laoreet, tellus augue placerat urna, eu auctor libero tellus et ex. Nam ultricies sem id ex fermentum semper.";
        $_SESSION['foro'] = array(
            "usuario1" => array(
                "Tema 1" => $li,
                "Tema 2" => $li,
                "Tema 3" => $li
            ),
            "usuario2" => array(
                "Tema 4" => $li,
                "Tema 5" => $li,
                "Tema 6" => $li
            ),
            "usuario3" => array(
                "Tema 7" => $li,
                "Tema 8" => $li,
                "Tema 9" => $li
            ),
            "usuario4" => array(
                "Tema 10" => $li,
                "Tema 11" => $li,
                "Tema 12" => $li
            ),
        );
    }

    //Esta funcion realiza la escritura con el usuario que te has logueado.

    function escribirForum()
    {
        if (!empty($_POST['cuerpo']) && !empty($_POST['tema'])) {
            $_SESSION['tema'] = $_POST['tema'];
            $_SESSION['cuerpo'] = $_POST['cuerpo'];

            $_SESSION['foro'][$_SESSION['user']] += array($_SESSION['tema'] => $_SESSION['cuerpo']);
        }
        foreach ($_SESSION['foro'][$_SESSION['user']] as $theme => $cuerpo) {
            echo "<table border = 3>
                                    <tr>
                                    <td><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png height=100px width=100px> <br>
                                    $_SESSION[user]</td>
                                    <td>$theme</td>
                                    <td>$cuerpo</td>
                                    </tr>
                                    </table>";
        }
    }

    ?>
    <form method="POST">
        <h3>Tema</h3>
        <input type="text" name="tema"><br>
        <h3>Cuerpo</h3>
        <textarea type="text" name="cuerpo">Escriba aqui el tema</textarea><br>
        <button type="submit" name="Enviar" value="Enviar">Enviar</button>
    </form>

</body>

<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 2</p>
</footer>

</html>