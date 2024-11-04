<?php

class DBConnection
{
    private static PDO $instance;
    private static $host;
    private static $user;
    private static $password;

    public function __construct()
    {
        if(!isset(self::$instance)) {
            $this->initValues();
            $this->connect();
        }
    }

    private function connect()
    {
        self::$instance = new PDO(self::$host,  self::$user, self::$password);
    }

    public function getInstance()
    {
        return self::$instance;
    }

    private function initValues(){
        $config = parse_ini_file('config.ini');
        self::$host = $config['dsn'];
        self::$user =  $config['username'];
        self::$password = $config['password'];
    }
}