<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJ-1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST">
        <label>User</label>
        <input type="text" name="user">
        <label>Pass</label>
        <input type="password" name="pass">
        <button type="submit" name="Acceder">Login</button>
    </form>

    <?php

    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
        $user = $_COOKIE["user"];
        $pass = $_COOKIE["pass"];
    } else {
        if (!empty($_POST["pass"]) && !empty($_POST["user"])) {
            $user = $_POST["user"];
            $pass = $_POST["pass"];
        }
    }

    $ldap_dn = "uid=$user,dc=example,dc=com";
    $ldap_password = $pass;
    $ldap_con = ldap_connect("ldap.forumsys.com");
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);


    if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
        echo "<h1>Login correcto</h1>";
        setcookie("user", $user, time() + 60);
        setcookie("pass", $pass, time() + 60);
    } else {
        echo "usuario o contraseña no valido";
    }
    ?>
</body>

</html>