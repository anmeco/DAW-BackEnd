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

    //Se realiza el session start y el function del login del ejercicio anterior

    session_start();
    login();

    //Variable para guardar info de cuerpo randomizado

    $li = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies erat sit amet enim pulvinar scelerisque. Morbi sit amet odio quis magna dapibus tempus et vitae sem. Quisque cursus ante nulla, eget feugiat est gravida et. Proin non tincidunt metus. Curabitur non ante sed velit facilisis sagittis at non arcu. Sed id auctor augue. Praesent pulvinar ante a metus tempus sollicitudin. Vestibulum elit lacus, luctus sed venenatis ut, commodo ut ante. In quis elementum nulla. Nam et egestas mi. Donec molestie purus ac elit suscipit efficitur. Integer odio urna, semper ultrices tristique quis, pellentesque ut enim. Suspendisse placerat, nisi at pretium laoreet, tellus augue placerat urna, eu auctor libero tellus et ex. Nam ultricies sem id ex fermentum semper.";

    //Array de foro guardado en session de ejercicios anteriores

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

    //Se realiza un check de ver si ha introducido los datos con esta funcion login

    // La funcion login lo que realiza es el control de:

    // Usuarios registrados
    // Administradores, user:root pass:root
    // Mensaje de error para los demas

    function Login()
    {
    ?>
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

    <?php
    
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {

            $admin = "root";
            $adminPass = "root";
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];

            if ($_SESSION['users'][$_SESSION['user']] == $_SESSION['pass']) {
                echo "<h1>Acceso correcto, hola " . $_SESSION['user'] . "</h1>";

                if (isset($_SESSION['user'])) {
                    header("Location:EJ-5forum.php");
                }
            }
            if ($_SESSION['user'] == $admin && $_SESSION['pass'] == $adminPass) {
                echo "<h1>Acceso ";

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