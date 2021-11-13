<?php


class Persona
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;


    public function __construct($nombre, $apellido){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

}