<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-9</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }

        h1 {
            font-family: 'Passion One';
            font-size: 2rem;
            text-transform: uppercase;
        }

        label {
            width: 150px;
            display: inline-block;
            text-align: left;
            font-size: 1.5rem;
            font-family: 'Lato';
        }

        input {
            border: 2px solid #ccc;
            font-size: 1.5rem;
            font-weight: 100;
            font-family: 'Lato';
            padding: 10px;
        }

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

    <h1>ForoCodigo</h1>

    <form method="POST" action="" name="signin-form">
        <div class="form-element">
            <label>Usuario</label>
            <input type="text" name="user" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Contraseña</label>
            <input type="password" name="pass" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>


    <table border="3">
        <?php

        $li = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies erat sit amet enim pulvinar scelerisque. Morbi sit amet odio quis magna dapibus tempus et vitae sem. Quisque cursus ante nulla, eget feugiat est gravida et. Proin non tincidunt metus. Curabitur non ante sed velit facilisis sagittis at non arcu. Sed id auctor augue. Praesent pulvinar ante a metus tempus sollicitudin. Vestibulum elit lacus, luctus sed venenatis ut, commodo ut ante. In quis elementum nulla. Nam et egestas mi. Donec molestie purus ac elit suscipit efficitur. Integer odio urna, semper ultrices tristique quis, pellentesque ut enim. Suspendisse placerat, nisi at pretium laoreet, tellus augue placerat urna, eu auctor libero tellus et ex. Nam ultricies sem id ex fermentum semper.";

        $arrayuser =  array(
            "usuario1" => "123456",
            "usuario2" => "654321",
            "usuario3" => "098765",
            "usuario4" => "123456"
        );

        if (!empty($_POST['user']) && !empty($_POST['pass'])) {

            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $register = $_POST['login'];

            $admin = "root";
            $adminpass = "root";

            if ($arrayuser[$user] == $pass) {
                echo "<h1>Acceso correcto</h1>";

                $arrayUserTheme = array(
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
                foreach ($arrayUserTheme[$user] as $theme => $cuerpo) {
                    echo "<table border = 1>
                    <tr>
                    <td>$user</td>
                    <td>$theme</td>
                    <td>$cuerpo</td>
                    </tr>
                    </table>";
                };
            } elseif ($user == $admin && $pass == $adminpass) {
                echo "<h1>Acceso Admin</h1>";

                foreach ($arrayuser as $user => $pass) {

                    echo "<table border = 1>
                    <tr>
                    <td>$user</td>
                    <td>$pass</td>
                    </tr>
                    </table>";
                }
            } else {
                echo "<h1>Contraseña o usuario incorrecto</h1>";
            }
        }

        ?>


    </table>

</body>

</html>