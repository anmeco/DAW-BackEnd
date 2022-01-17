<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-3</title>

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

    <form method="POST" name="FormularioForo">

        <label for="Usuario">User</label>
        <input type="text" name="user" id="user" />

        <label for="Pass">Pass</label>
        <input type="text" name="pass" id="pass" />

        <button type="submit" name="enviar" value="Log In">Enviar</button>

    </form>

    <?php

    //Se realiza un session para guardar las distintas variables, esta vez un array de usuarios

    session_start();
    Login();

    $_SESSION['users'] = array(
        "usuario1" => "123456",
        "usuario2" => "654321",
        "usuario3" => "098765",
        "usuario4" => "123456",
    );

    // La funcion login lo que realiza es el control de:

    // Usuarios registrados
    // Administradores, user:root pass:root
    // Mensaje de error para los demas

    function Login()
    {

        if (!empty($_POST['user']) && !empty($_POST['pass'])) {

            //Este if hace un control sobre el usuario y la contraseña introducida con el array

            if ($_SESSION['users'][$_POST['user']] == $_POST['pass']) {

                //Si realiza un buen login realizara un echo dando acceso

                echo "<h1>Acceso correcto</h1>";
            } elseif ($_POST['user'] == 'root' && $_POST['pass'] == 'root') {

                //Si realiza un login de admin dara una tabla de todos los usuarios

                echo "<h1>Acceso Admin</h1>";

                foreach ($_SESSION['users'] as $user => $pass) {

                    echo "<table border = 1>

                <tr>
                <td><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png height=100px width=100px><br>
                $user</td>
                <td>$pass</td>
                </tr>
                </table>";
                }
            } else {

                //si se introduce de forma incorrecta, mandara un mensaje

                echo "<h1>Contraseña o usuario incorrecto</h1>";
            }
        }
    }

    ?>
</body>

<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 2</p>
</footer>

</html>