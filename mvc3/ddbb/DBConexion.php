<?php

class DBConexion {
    // Create the data conexion.
    public static function connection() {
        try{
            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
            $connection = new PDO('mysql:host=localhost;dbname=productos','root','',$parametros);
            return $connection;
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
            exit();
        }
     

    }
}
