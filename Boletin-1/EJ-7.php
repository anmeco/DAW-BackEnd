<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJ-7</title>
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

    <?php

    /* 

        Se inicializan las distintas variables que vamos a utilizar

        -$arrayUser es un array que guarda usuarios por clave y valor
        -$user es una variable que guarda el usuario que introduce el formulario
        -$pass es una variable que guarda el pass que introduce el formulario
        -$admin es el nombre del admin
        -$adminPass es el pass del admin

    */

    $arrayUser =  array(
        "usuario1" => "123456",
        "usuario2" => "654321",
        "usuario3" => "098765",
        "usuario4" => "123456"
    );

    //Controla si el usuario y el pass del form esta vacio

    if (!empty($_POST['user']) && !empty($_POST['pass'])) {

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $admin = "root";
        $adminPass = "root";

        //Este if hace un control sobre el usuario y la contraseña introducida con el array

        if ($arrayUser[$user] == $pass) {

            //Si realiza un buen login realizara un echo dando acceso

            echo "<h1>Acceso correcto</h1>";

        } elseif ($user == $admin && $pass == $adminPass) {

            //Si realiza un login de admin dara una tabla de todos los usuarios

            echo "<h1>Acceso Admin</h1>";

            foreach ($arrayUser as $user => $pass) {

                echo "<table border = 1>
                <tr>
                <td>$user</td>
                <td>$pass</td>
                </tr>
                </table>";
            }
        } else {

            //si se introduce de forma incorrecta, mandara un mensaje

            echo "<h1>Contraseña o usuario incorrecto</h1>";
        }
    }

    ?>
</body>

</html>