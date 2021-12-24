<?php


class Persona
{
    /**
     * @var string
     */
    private $nombre; // private = modificador de acceso que restringe el acceso al atributo/metodo
    // Encapsulamiento: Ocultamiento de los datos o de la representacion interna del objeto.
    // Se encapsula para mantener el acoplamiento en el minimo posible.

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $email;

    /**
     * Persona constructor.
     * @param $nombre
     * @param $apellido
     * @param $correo
     */

    public function __construct($nombre, $apellido, $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $correo;
    }

    /**
     * @return mixed // anotations: definir tipo de dato
     */
    public function getNombre(){ // Un Getter, devuelve el valor de atributo nombre
        return $this->nombre; // $this -> atributo, devuelve $atributo
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


}