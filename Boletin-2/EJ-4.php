<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-4</title>

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


    <form method="POST" action="" name="signin-form">
        <div class="form-element">
            <label>User</label>
            <input type="text" name="user" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Pass</label>
            <input type="pass" name="pass" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>

</head>

<body>

    <h1>ForoCodigo</h1>

    <?php

    //Se realiza un session para guardar las distintas variables, esta vez un array de foro y usuarios, es decir tridimensional

    session_start();
    login();

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

    //Se realiza un check de ver si ha introducido los datos

    function login()
    {
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {

            $user = $_POST['user'];

            //Reciclamos el mismo sistema de control de usuarios

            if ($_SESSION['users'][$_POST['user']] == $_POST['pass']) {
                echo "<h1>Acceso correcto, hola " . $_POST['user'] . "</h1>";

                //Se realiza un foreach con la clave de usuario, utilizando los temas y la clave

                foreach ($_SESSION['foro'][$_POST['user']] as $theme => $cuerpo) {
                    echo "<table border = 1>
                        <tr>
                        <td><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png height=100px width=100px>
                        $user</td>
                        <td>$theme</td>
                        <td>$cuerpo</td>
                        </tr>
                        </table>";
                };

                //Si se conecta como admin, se da la tabla de usuarios, que tambien se puede
                //utilizar para verificar que contraseñas se utilizan

            } elseif ($_SESSION['users']['root'] == 'root') {
                echo "<h1>Acceso Admin</h1>";

                foreach ($_SESSION['users'] as $user => $pass) {

                    echo "<table border = 1>
                        <tr>
                        <td>$user</td>
                        <td>$pass</td>
                        </tr>
                        </table>";
                }

                //Si no introduce una pass correcta, se le escribe un mensaje de nuevo

            } else {
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