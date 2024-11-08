<?php

class configDB {

     private static PDO $instance;
     private static $host;
     private static $user;
     private static $pass;


     public function __construct(){
        //Compruebo si esta inicilizado
        if(!isset(self::$instance)){
            //recuperar los valores del .ini
            $this->getValues();

            //Crear la conexion
            $this->connect();
        }
     }

     private function connect(){
        self::$instance = new PDO(self::$host,self::$user,self::$pass);
     }

     private function getValues(){
        $conf =  parse_ini_file('config.ini');
        self::$host = $conf['host'];
        self::$user = $conf['user'];
        self::$pass = $conf['pass'];
     }

     /**
      * Get the value of instance
      */ 
     public function getInstance()
     {
          return self::$instance;
     }
}

?>