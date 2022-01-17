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
    <?php
    showPreferences();
    ?>
    <br>
    <form method="POST">
        <!-- Este boton realiza con un onclick la funcion delete -->
        <button type="submit" value="Borrar preferencias" nombre="delete" onclick="<?php deletePreferences() ?>">Borrar preferencias</button>
    </form>
    <div>
        <a href="EJ2preferencias.php">Volver</a>
    </div>
</body>
<footer>
    <p>Antonio Medina Conejero</p>
    <p>2º DAW</p>
    <p>Entorno Servidor/BOLETIN 3</p>
</footer>
</html>

<?php

// Esta funcion muestra las preferencias del usuario

function showPreferences()
{
    if (isset($_COOKIE['language']) && isset($_COOKIE['public']) && isset($_COOKIE['hourZone'])) {

        echo "<h1>IDIOMA: " . $_COOKIE['language'] . "<br>PERFIL PUBLICO: " . $_COOKIE['public'] . "<br> ZONA HORARIA: " . $_COOKIE['hourZone'] . "</h2>";
    } else {

        echo "<h1>No hay preferencias</h1>";
    }
}

// Esta funcion borra las preferencias del usuario

function deletePreferences()
{
    setcookie("language", $_COOKIE['language'], time() - 60);
    setcookie("public", $_COOKIE['public'], time() - 60);
    setcookie("hourZone", $_COOKIE['hourZone'], time() - 60);

    echo "La informacion ha sido eliminada";
}

?>