<?php

require_once("repository/userRepository.php");

$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];
$usuario = new Usuario($nombre,$apellidos);
$userRepository = new UserRepositorty();
$userRepository->deleteUsuario($usuario);

echo "Se ha eliminado el usuario";
echo "<br>";
echo "<a href=listarUsuario.php>Volver</a>";
?>