<?php

$db = new Conexion();

#$pass = $_POST['pass'];
$pass = Encrypt($_POST['pass']);
$user = $_POST['user'];

$sql = $db->query("SELECT user FROM users WHERE user='$user' LIMIT 1;");

if ($db->rows($sql) == 0) {
    $db->query("INSERT INTO users (user,pass) VALUES ('$user','$pass'); " );

    $sql = $db->query("SELECT MAX(id) AS id FROM users;");

    $_SESSION['app_id'] = $db->recorrer($sql)[0];

    $db->liberar($sql);

    $HTML = 1;
} else {
    $usuario = $db->recorrer($sql)[0];

    if (strtolower($user) == strtolower($usuario)){
        $HTML = 'user existe';
    } else {
        $HTML = 'email existe';
    }
    $db->liberar($sql);
$db->close();
}


echo $HTML;