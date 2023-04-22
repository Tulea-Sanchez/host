<?php
// Establecemos la cabecera para las políticas COEP y COOP
header("Cross-Origin-Embedder-Policy: require-corp");
header("Cross-Origin-Opener-Policy: same-origin");
header("Access-Control-Allow-Origin: *");

// Leemos la cookie "mi_cookie" y mostramos su valor en la página
if(isset($_COOKIE["mi_cookie"])) {
    echo "El valor de la cookie 'mi_cookie' es: " . $_COOKIE["mi_cookie"];
} else {
    echo "La cookie 'mi_cookie' no está definida.";
}


session_start();




session_start();
$nombre_usuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : "invitado";
echo "Hola, " . $nombre_usuario;

// Verificar si las sesiones están habilitadas
if (isset($_SESSION)) {
    echo "Las sesiones están habilitadas en este servidor.";
} else {
    echo "Las sesiones NO están habilitadas en este servidor.";
}
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer cookie</title>
</head>
<body>
</body>
</html>
