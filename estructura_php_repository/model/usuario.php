<?php

class Usuario
{
    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($nombre="", $apellidos="", $edad=0){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function __toString()
    {
        return "Nombre:" . $this->nombre . "," 
        . "Apellidos:" . $this->apellidos . "," 
        . "Edad:" . $this->edad;
    }

    public static function createRandomUser(){
        return new Usuario("Alvaro","Vasco", "33");
    }
}
