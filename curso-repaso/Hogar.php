<?php

require_once 'Persona.php';


class Hogar
{
    /**
     * @var string
     */
    private $direccion;

    /**
     * @var Persona[]
     */
    private $habitantes;

    /**
     * @var Persona
     */
    private $propietario;

    /**
     * Hogar constructor.
     * @param string $direccion
     */
    public function __construct(string $direccion)
    {
        $this->direccion = $direccion;
        $this->habitantes = []; // Siempre se inicializa el array en el constructor
    }

    /**
     * @return Persona
     */
    public function getPropietario(): Persona
    {
        return $this->propietario;
    }

    /**
     * @param Persona $propietario
     */
    public function setPropietario(Persona $propietario): void
    {
        $this->propietario = $propietario;
    }

    public function agregarPersona(Persona $persona){
        array_push($this->habitantes, $persona);
    }

    public function cantHabitantes(){
        return count($this->habitantes);
    }

    public function cambiarPropietario(){
        $this->propietario = $this->habitantes[0];
    }
}