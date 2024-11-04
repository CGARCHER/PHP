<?php

require_once("model/usuario.php");
require_once("config/DBConnection.php");

class UserRepositorty{
    private function getConexion(){
        return (new DBConnection())->getInstance();
    }

    public function getAllUsers(){
        $sql = "SELECT nombre, apellidos, edad FROM PERSONA";
        $consulta = $this->getConexion()->prepare($sql);
        $consulta->execute();
        $usuarios = [];

        while($usuario = $consulta->fetch(PDO::FETCH_ASSOC)){
            $usuarios[] = new Usuario($usuario['nombre'], $usuario['apellidos'], $usuario['edad']);
        }
        return $usuarios;
    }

    public function insertUsuario($usuario){
        $insert = $this->getConexion()->prepare("INSERT INTO persona(NOMBRE,APELLIDOS,EDAD) VALUES (:nombre, :apellidos, :edad)");
        $nombre = $usuario->getNombre();
        $apellidos = $usuario->getApellidos();
        $edad = $usuario->getEdad();
        $insert->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $insert->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $insert->bindParam(':edad', $edad, PDO::PARAM_INT);
        return $insert->execute();
    }

    public function deleteUsuario($usuario){
        $insert = $this->getConexion()->prepare("DELETE FROM persona WHERE nombre=:nombre and apellidos=:apellidos");
        $nombre = $usuario->getNombre();
        $apellidos = $usuario->getApellidos();
        $insert->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $insert->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        return $insert->execute();
    }

}




?>