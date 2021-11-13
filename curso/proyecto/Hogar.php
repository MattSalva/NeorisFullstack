<?php


class Hogar
{
    /**
     * @var string
     */
    private $direccion;

    // Colección de personas
    /**
     * @var Persona[]
     */
    private $habitantes;

    /**
     * Hogar constructor.
     * @param string $direccion
     */

    private $propietario;
    public function __construct($direccion)
    {
        $this -> direccion = $direccion;
        $this -> habitantes = []; // Incialización del atributo array
    }

    public function agregarHabitante(Persona $persona){ // Funcion para agregar objetos a un array
        array_push($this->habitantes, $persona);
    }

    public function cantDeHabitantes(){

        return count($this->habitantes);

    }

    /**
     * @param mixed $propietario
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;
    }

    public function cambiarPropietario(){
        $this->propietario = $this->habitantes[0];
    }
}