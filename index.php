<?php
header("Cross-Origin-Embedder-Policy: require-corp");
header("Cross-Origin-Opener-Policy: same-origin");
header("Access-Control-Allow-Origin: *");
setcookie("mi_cookie", "Hola Mundo", time() + 3600, "cc.tuleasm.com");
echo "Se ha creado la cookie 'mi_cookie'";
session_start();

// Leer la variable de sesi贸n "nombre_usuario" o proporcionar un valor predeterminado
// Asignar el nombre de usuario a la variable de sesi贸n "nombre_usuario"
$_SESSION['nombre_usuario'] = "juan";

echo "El nombre de usuario ha sido almacenado en una variable de sesi贸n.";
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="./segunda.php">button</a>
</body>
</html>