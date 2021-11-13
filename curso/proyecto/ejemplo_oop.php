<?php
require_once 'Persona.php';
require_once 'Hogar.php';

$unaPersona = new Persona("Carlos", "Perez");
echo $unaPersona -> getNombre();


$unaPersona ->setNombre("Jorge");
// -> para acceder
echo $unaPersona -> getNombre();

$unHogar = new Hogar("Calle Falsa 123");
$unHogar->agregarHabitante($unaPersona);

$otraPersona = new Persona("Manuel", "Domingo");

$unHogar->agregarHabitante($otraPersona);

$unHogar -> setPropietario($otraPersona);

echo $unHogar->cantDeHabitantes();
