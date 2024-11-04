<?php

session_start();

if(isset($_SESSION["loged"]) && $_SESSION["loged"]){
    header("location: listarUsuario.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    <h1>Login</h1>
    <p>
        <label for="usuario">Usuario:</label>
        <input id="usuario" name="usuario" required>
    </p>
    <p>
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass">
    </p>
    <button type="submit">Entrar</button>
</form>
    
</body>
</html>