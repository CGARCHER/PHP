<?php

session_start();

function comprobarUsuario($usuario, $pass){
    $conexion = new PDO("mysql:host=localhost;dbname=prueba","root","");
    $sql = "SELECT * FROM USUARIO WHERE usuario=:usuario and pass=:pass";
    $consulta = $conexion->prepare($sql);
    $consulta->bindParam(':usuario',$usuario, PDO::PARAM_STR);
    $consulta->bindParam(':pass',$pass, PDO::PARAM_STR);
    $consulta->execute();
    $usuarios = $consulta->fetchAll();

    $estado = false;
    if(isset($usuarios) && count($usuarios)==1){
        $estado = true;
    }
    return $estado;
    //mejor isset($usuario) && count($usuario)==1 en el return
}

//Recupero del formulario usuario y pass
$usuario = $_REQUEST["usuario"];
$pass = md5($_REQUEST["pass"]);

if(comprobarUsuario($usuario, $pass)){
    $_SESSION["loged"] = true;
    header("location:listarUsuario.php");
}
else{
    echo "<h3 style='color:red'>Credenciales Incorrectas</h3>";
    echo "<br>";
    echo "<a href=index.html>Volver al login</a>";
}
?>