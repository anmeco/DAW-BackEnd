<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJ-2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Realizamos un select con todas las opciones
    Cada una de ellas va a estar controlada por un isset de su respectiva cookie
    para guardar la informacion -->

    <form method="POST">
        <select name="language">
            <option value="Español" <?php if (isset($_COOKIE['language'])) {
                                        if ($_COOKIE["language"] == "Español") {
                                            echo "selected";
                                        }
                                    } ?>>Español</option>
            <option value="Ingles" <?php if (isset($_COOKIE['language'])) {
                                        if ($_COOKIE["language"] == "Ingles") {
                                            echo "selected";
                                        }
                                    } ?>>Ingles</option>
        </select>
        <select name="public">
            <option value="Si" <?php if (isset($_COOKIE['public'])) {
                                    if ($_COOKIE["public"] == "Si") {
                                        echo "selected";
                                    }
                                } ?>>Si</option>
            <option value="No" <?php if (isset($_COOKIE['public'])) {
                                    if ($_COOKIE["public"] == "No") {
                                        echo "selected";
                                    }
                                } ?>>No</option>
        </select>
        <select name="hourZone">
            <option value="GMT-1" <?php if (isset($_COOKIE['hourZone'])) {
                                        if ($_COOKIE["hourZone"] == "GMT-1") {
                                            echo "selected";
                                        }
                                    } ?>>GMT-1</option>
            <option value="GMT" <?php if (isset($_COOKIE['hourZone'])) {
                                    if ($_COOKIE["hourZone"] == "GMT") {
                                        echo "selected";
                                    }
                                } ?>>GMT</option>
            <option value="GMT+1" <?php if (isset($_COOKIE['hourZone'])) {
                                        if ($_COOKIE["hourZone"] == "GMT+1") {
                                            echo "selected";
                                        }
                                    } ?>>GMT+1</option>
            <option value="GMT+2" <?php if (isset($_COOKIE['hourZone'])) {
                                        if ($_COOKIE["hourZone"] == "GMT+2") {
                                            echo "selected";
                                        }
                                    } ?>>GMT+2</option>
        </select>
        <button type="submit" value="Establecer Preferencias" name="OK">Establecer preferencias</button>
    </form>
    <?php
    setPreferences();
    ?>
    <div>
    <a href="EJ2mostrar.php">Mostrar preferencias</a>
    </div>

</body>
<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 3</p>
</footer>
</html>

<?php

// Esta funcion solo setea l cookie con la informacion para guardarla por 60 segundos

function setPreferences()
{

    setcookie("language", $_POST['language'], time() + 60);
    setcookie("public", $_POST['public'], time() + 60);
    setcookie("hourZone", $_POST['hourZone'], time() + 60);
}
?>